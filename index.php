<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Eco Cidadão - Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/login.css">
</head>

<body class="body bg-light d-flex align-items-center justify-content-center min-vh-100 p-3">

  <div class="login-container w-100" style="max-width: 400px;">

    <div class="card login-card shadow border-0 p-4" style="border-radius: 25px;">

      <div class="text-center mb-4">
        <img class="imagem-centralizada mb-2" src="img/folha.png" alt="Eco Cidadão" style="max-width: 70px; height: auto;">
        <h1 class="h3 fw-bold text-success m-0">Eco Cidadão</h1>
      </div>

      <form action="./views/home.php" method="POST">

        <div class="mb-3">
          <input
            type="email"
            name="email"
            class="form-control form-control-lg fs-6"
            placeholder="E-mail"
            required>
        </div>

        <div class="mb-4">
          <input
            type="password"
            name="senha"
            class="form-control form-control-lg fs-6"
            placeholder="Senha"
            required>
        </div>

        <div class="d-grid mb-4">
          <button type="submit" class="btn btn-success btn-lg fs-6 fw-bold" style="border-radius: 12px; background-color: #005f27; border: none;">
            Entrar
          </button>
        </div>

      </form>

      <div class="text-center mb-2">
        <a href="views/cadastro.php" class="text-success fw-bold text-decoration-none">
          Criar conta
        </a>
      </div>

      <div class="text-center">
        <a href="./views/recuperarSenha.php" class="text-secondary small text-decoration-none">
          Esqueci minha senha
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

</nav>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>