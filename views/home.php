<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Home</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="../css/home.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
</head>

<body class="body bg-light">

  <div class="container-fluid p-3 mb-4" style="background-color: #005f27; border-radius: 0 0 25px 25px;">

    <div class="d-flex align-items-center mb-3 text-white">
      <img class="logo-icone me-3" src="../img/folha.png" alt="Eco Cidadão" style="width: 40px; height: 40px; object-fit: contain;">
      <h1 class="m-0 h3 fw-bold">Eco Cidadão</h1>
    </div>

    <div class="row g-3">
      <div class="col-12 col-md-6">
        <div class="card homeA card-body border-0 text-light" style="border-radius: 20px;">
          <h5 class="card-title mb-1" style="font-size: 0.95rem;">Problemas Ambientais</h5>
          <h4 class="fw-bold m-0 fs-1">12</h4>
        </div>
      </div>

      <div class="col-12 col-md-6">
        <div class="card home card-body border-0 text-light" style="border-radius: 20px;">
          <h5 class="card-title mb-1" style="font-size: 0.95rem;">Problemas Resolvidos</h5>
          <h4 class="fw-bold m-0 fs-1">5</h4>
        </div>
      </div>
    </div>

  </div>

  <div class="container pb-5" style="max-width: 450px;">
    <div class="row g-3">

      <div class="col-6">
        <div class="card text-center border-0 shadow-sm p-3 h-100" style="border-radius: 20px; cursor: pointer;">
          <div class="rounded-circle d-flex align-items-center justify-content-center mx-auto mb-2 text-white"
            style="width: 70px; height: 70px; background-color: #f27420; font-size: 1.6rem;">
            <i class="bi bi-camera-fill"></i>
          </div>
          <span class="fw-bold text-dark d-block">Enviar Foto</span>
        </div>
      </div>

      <div class="col-6">
        <a class="text-decoration-none d-block h-100" href="./mapa.html">
          <div class="card text-center border-0 shadow-sm p-3 h-100" style="border-radius: 20px;">
            <div class="rounded-circle d-flex align-items-center justify-content-center mx-auto mb-2 text-white"
              style="width: 70px; height: 70px; background-color: #3a9a86; font-size: 1.6rem;">
              <i class="bi bi-geo-alt-fill"></i>
            </div>
            <span class="fw-bold text-dark d-block">Mapa</span>
            <small class="text-secondary" style="font-size: 0.85rem;">Ambiental</small>
          </div>
        </a>
      </div>

      <div class="col-6">
        <a class="text-decoration-none d-block h-100" href="./coletas.php">
          <div class="card text-center border-0 shadow-sm p-3 h-100" style="border-radius: 20px;">
            <div class="rounded-circle d-flex align-items-center justify-content-center mx-auto mb-2 text-white"
              style="width: 70px; height: 70px; background-color: #2557fa; font-size: 1.6rem;">
              <i class="bi bi-trash3-fill"></i>
            </div>
            <span class="fw-bold text-dark d-block">Pontos de Coleta</span>
          </div>
        </a>
      </div>

      <div class="col-6">
        <a class="text-decoration-none d-block h-100" href="./dicas.php">
          <div class="card text-center border-0 shadow-sm p-3 h-100" style="border-radius: 20px;">
            <div class="rounded-circle d-flex align-items-center justify-content-center mx-auto mb-2 text-white"
              style="width: 70px; height: 70px; background-color: #4cb050; font-size: 1.6rem;">
              <i class="bi bi-recycle"></i>
            </div>
            <span class="fw-bold text-dark d-block">Dicas</span>
            <small class="text-secondary" style="font-size: 0.85rem;">Ambientais</small>
          </div>
        </a>
      </div>

    </div>
  </div>

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
      <div class="user-avatar-circle"></div>
    </a>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>