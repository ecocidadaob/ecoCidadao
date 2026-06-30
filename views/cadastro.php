<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Eco Cidadão</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="../css/cadastro.css">
</head>

<body class="body">

    <div class="login-container d-flex align-items-center justify-content-center min-vh-100 p-3">

        <div class="login-card shadow bg-white rounded p-4 p-md-5" style="width: 100%; max-width: 600px;">

            <div class="text-center">
                <div class="logo mb-4">
                    <img class="imagem-centralizada img-fluid" src="../img/folha.png" alt="Eco Cidadão" style="max-height: 100px;">
                </div>
                <h1 class="titulo mb-3">Criar Conta</h1>
            </div>
            
            <h4 class="mb-4 text-center text-md-start">Junte-se ao EcoCidadão</h4>
            
            <form action="validarLogin.php" method="POST">

                <div class="mb-3">
                    <input type="text" class="form-control" placeholder="Nome Completo" aria-label="Nome Completo">
                </div>

                <div class="mb-3">
                    <input type="text" class="form-control" placeholder="CPF" aria-label="CPF">
                </div>

                <div class="mb-3">
                    <input type="email" class="form-control" placeholder="E-mail" aria-label="E-mail">
                </div>

                <div class="mb-3">
                    <input type="tel" class="form-control" placeholder="Telefone" aria-label="Telefone">
                </div>

                <hr class="my-4">

                <h4 class="mb-3">Endereço</h4>
                
                <div class="row g-3 mb-3">
                    <div class="col-md-4">
                        <input type="text" class="form-control" placeholder="CEP" aria-label="CEP">
                    </div>
                    <div class="col-md-8">
                        <input type="text" class="form-control" placeholder="Rua, Avenida, etc." aria-label="Logradouro">
                    </div>
                </div>

                <div class="row g-3 mb-3">
                    <div class="col-8 col-md-9">
                        <input type="text" class="form-control" placeholder="Cidade" aria-label="Cidade">
                    </div>
                    <div class="col-4 col-md-3">
                        <input type="text" class="form-control" placeholder="UF" aria-label="UF">
                    </div>
                </div>

                <hr class="my-4">
                
                <div class="mb-3">
                    <input type="password" class="form-control" placeholder="Senha" aria-label="Senha">
                </div>
                <div class="mb-4">
                    <input type="password" class="form-control" placeholder="Confirma Senha" aria-label="Confirma Senha">
                </div>

                <div class="d-grid mb-4">
                    <button type="submit" class="btn btn-success btn-lg">
                        Cadastrar </button>
                </div>

            </form>
              
            <div class="text-center">
                <a href="index.php" class="text-decoration-none">
                    <button class="btn btn-link text-secondary">Já tem uma conta? <span class="text-success fw-bold">Fazer login</span></button>  
                </a>
            </div>

        </div>

    </div>
</body>
</html>
