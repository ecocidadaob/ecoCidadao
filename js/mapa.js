
const map=L.map('map').setView([20,0],2);
L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png',{maxZoom:19}).addTo(map);

let selectedLatLng=null;
let reports=JSON.parse(localStorage.getItem('reports')||'[]');
let reportMarkers=[];
let currentCity=null;
let cityCache={};

const problemColors={red:"#e53935",blue:"#1e88e5",orange:"#fb8c00",green:"#43a047",purple:"#8e24aa"};

function makeIcon(color){
 return L.divIcon({className:'',html:`<div class="custom-marker pulse" style="background:${color};width:18px;height:18px;border-radius:50%"></div>`,iconSize:[18,18]});
}

function getVisibleCityReports(){
 return currentCity?reports.filter(r=>r.city===currentCity):[];
}

function render(){
 reportMarkers.forEach(m=>map.removeLayer(m));
 reportMarkers=[];
 const list=document.getElementById('reportList');
 list.innerHTML='';
 if(!currentCity){
   list.innerHTML='<li>Entre em uma cidade para visualizar os registros.</li>';
   return;
 }

 getVisibleCityReports().forEach(report=>{
   const li=document.createElement('li');
   li.textContent=report.name+' - '+report.date;
   li.style.cursor='pointer';
   li.onclick=()=>{
      map.flyTo([report.lat,report.lng],18,{duration:0.6});
      report.markerRef?.openPopup();
   };
   list.appendChild(li);

   const mk=L.marker([report.lat,report.lng],{icon:makeIcon(report.color)})
   .addTo(map)
   .bindPopup(`<b>${report.name}</b><br>${report.city}`);

   mk.on('click',()=>map.flyTo([report.lat,report.lng],19,{duration:0.4}));
   report.markerRef=mk;
   reportMarkers.push(mk);
 });
}

async function detectCity(lat,lng){
 try{
 const key=lat.toFixed(2)+','+lng.toFixed(2);
 if(cityCache[key]){
   currentCity=cityCache[key];
   render();
   return;
 }
 const r=await fetch(`https://nominatim.openstreetmap.org/reverse?format=json&lat=${lat}&lon=${lng}`);
 const d=await r.json();
 currentCity=d.address.city||d.address.town||d.address.village||d.address.municipality||null;
 cityCache[key]=currentCity;
 render();
 }catch(e){}
}

map.on('moveend',()=>{
 const z=map.getZoom();
 const c=map.getCenter();
 if(z>=10) detectCity(c.lat,c.lng);
 else{
   currentCity=null;
   render();
 }
});

map.on('click',e=>{ selectedLatLng=e.latlng; });

document.getElementById('sendBtn').onclick=()=>{
 if(!selectedLatLng){ alert('Clique no mapa primeiro.'); return; }
 if(!currentCity){ alert('Entre em uma cidade antes de registrar.'); return; }

 const select=document.getElementById('problemType');
 reports.push({
   name:select.options[select.selectedIndex].text,
   color:problemColors[select.value],
   lat:selectedLatLng.lat,
   lng:selectedLatLng.lng,
   date:new Date().toLocaleString('pt-BR'),
   city:currentCity
 });

 localStorage.setItem('reports',JSON.stringify(reports));
 render();
};

async function searchCity(){
 const city=document.getElementById('pesquisa').value.trim();
 if(!city) return;

 const btn=document.getElementById('searchBtn');
 if(btn) btn.disabled=true;

 try{
   const r=await fetch(`https://nominatim.openstreetmap.org/search?format=json&limit=1&q=${encodeURIComponent(city)}`);
   const d=await r.json();
   if(d.length){
      map.flyTo([+d[0].lat,+d[0].lon],12,{duration:0.8});
   }else{
      alert('Cidade não encontrada');
   }
 } finally {
   if(btn) btn.disabled=false;
 }
}

document.getElementById('pesquisa').addEventListener('keydown',e=>{
 if(e.key==='Enter') searchCity();
});

const sb=document.getElementById('searchBtn');
if(sb) sb.onclick=searchCity;

document.getElementById("temaBtn").onclick=()=>{
 document.body.classList.toggle("dark");
 document.getElementById("temaBtn").innerHTML=document.body.classList.contains("dark")?"☀️":"🌙";
};

document.getElementById("btnLocalizacao").onclick=()=>{
 navigator.geolocation.getCurrentPosition(
 p=>map.flyTo([p.coords.latitude,p.coords.longitude],13,{duration:0.8}),
 ()=>alert('Não foi possível obter localização.')
 );
};

render();
