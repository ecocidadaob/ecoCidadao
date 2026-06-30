<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Pontos de Reciclagem</title>
  <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css">
  <link rel="stylesheet" href="../css/coletas.css">
</head>

<body>
  <div class="topo">Pontos de Reciclagem</div>
  <div id="map"></div>
  <div class="card">Ecoponto Central - Pilhas e Eletrônicos</div>
  <div class="card">Recicla Mais - Plásticos e Vidros</div>
  <div class="card">Coleta Verde - Óleo de Cozinha</div>
  <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
  <script src="../js/script.js"></script>
  <nav class="bottom-nav">

    <a href="./index.php" class="nav-item active">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
        <path d="m3 9 9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z" />
        <polyline points="9 22 9 12 15 12 15 22" />
      </svg>
    </a>

    <a href="./enviarFoto.php" class="nav-item">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
        <circle cx="11" cy="11" r="8" />
        <line x1="21" x2="16.65" y1="21" y2="16.65" />
      </svg>
    </a>

    <a href="./mapa.php" class="nav-item">
      <i class="bi bi-geo-alt"></i>
    </a>

    <a href="./coletas.php" class="nav-item">
      <i class="bi bi-recycle"></i>
    </a>

    <a href="./perfil.php" class="nav-item">
      <div class="user-avatar-circle">J</div>
    </a>

  </nav>
</body>

</html>