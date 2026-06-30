<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil do Usuário - Sistema Ambiental</title>
    <link rel="stylesheet" href="../css/perfil.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
</head>

<body>
    <nav class="navbar">
        <div class="nav-header">
            <button class="btn-voltar" onclick="history.back()"><i class="bi bi-house-door-fill"></i></button>
            <h1>Meu Perfil</h1>
        </div>
        <button id="temaBtn" class="float-btn theme" title="Tema"><i class="bi bi-moon-stars-fill"></i></button>

    </nav>
    <div class="container">
        <div class="card card-usuario">
            <div class="avatar-container">
                <div class="avatar-placeholder">
                    <i class="bi bi-person-fill"></i>
                </div>
                <h2>João Silva</h2>
                <p class="user-email">joao.silva@email.com</p>
            </div>
            
            <hr class="divisor">

            <div class="user-stats">
                <div class="stat-item">
                    <span class="stat-number">12</span>
                    <span class="stat-label">Denúncias</span>
                </div>
                <div class="stat-item">
                    <span class="stat-number">8</span>
                    <span class="stat-label">Resolvidas</span>
                </div>
            </div>

            <hr class="divisor">

            <form class="perfil-form">
                <div class="form-group">
                    <label for="userName">Nome Completo</label>
                    <input type="text" id="userName" value="João Silva">
                </div>
                <div class="form-group">
                    <label for="userPhone">Telefone</label>
                    <input type="tel" id="userPhone" value="(33) 99999-9999">
                </div>
                <button type="submit" id="saveBtn">Salvar Alterações</button>
            </form>
        </div>

        <div class="card card-historico">
            <h3>Minhas Denúncias Recentes</h3>
            <ul class="historico-list">
                <li class="status-pendente">
                    <div class="historico-info">
                        <strong>Lixo Acumulado</strong>
                        <span class="historico-data">Postado em: 24/06/2026</span>
                    </div>
                    <span class="badge">Análise</span>
                </li>
                <li class="status-resolvido">
                    <div class="historico-info">
                        <strong>Queimada</strong>
                        <span class="historico-data">Postado em: 15/05/2026</span>
                    </div>
                    <span class="badge">Resolvido</span>
                </li>
                <li class="status-analise">
                    <div class="historico-info">
                        <strong>Poluição no Rio</strong>
                        <span class="historico-data">Postado em: 10/04/2026</span>
                    </div>
                    <span class="badge">Em Investigação</span>
                </li>
            </ul>
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
</body>

</html>