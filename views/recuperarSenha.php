<!doctype html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Eco Cidadão - Recuperar Senha</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="../css/recuperarS.css">
</head>

<body class="body bg-light d-flex align-items-center justify-content-center min-vh-100 p-3">

  <div class="recuperar-container w-100" style="max-width: 400px;">
    <div class="card recuperar-card shadow border-0 p-4" style="border-radius: 25px;">

      <div class="text-center mb-4">
        <div class="circulo icone mx-auto d-flex align-items-center justify-content-center bg-success-subtle rounded-circle" style="width: 70px; height: 70px;">
          <i class="bi bi-envelope text-success fs-2"></i>
        </div>
      </div>

      <form action="../index.php" method="POST">
        <h1 class="h3 fw-bold text-center text-dark mb-3">
          Recuperar Senha
        </h1>

        <div class="text-center mb-4">
          <p class="text-secondary small m-0">
            Digite seu e-mail para receber as instruções de recuperação de senha.
          </p>
        </div>

        <div class="mb-4">
          <input
            type="email"
            name="email"
            class="form-control form-control-lg fs-6"
            placeholder="Digite o seu e-mail"
            required>
        </div>

        <div class="d-grid mb-4">
          <button type="submit" class="btn btn-success btn-lg fs-6 fw-bold" style="border-radius: 12px; background-color: #005f27; border: none;">
            Enviar
          </button>
        </div>
      </form>

      <div class="text-center">
        <a class="text-secondary small text-decoration-none fw-bold" href="../index.php">
          Voltar para o Login
        </a>
      </div>

    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>