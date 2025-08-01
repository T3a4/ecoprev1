<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EcoPreve - Página Inicial</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="logo-section fade-in">
        <img src="imagens/img2.png" alt="logo-image">

            
        </div>

        <div class="cards-container">
            <!-- Card de Login -->
            <div class="card login-card fade-in">
                <h2 class="card-title">Fazer Login</h2>
                <form id="loginForm" action="login.php" method="POST">
                    <div class="form-group">
                        <label class="form-label" for="matricula">Matrícula</label>
                        <input type="text" id="matricula" name="matricula" class="form-input" placeholder="Digite sua matrícula" required>
                    </div>
                    
                    <div class="form-group">
                        <label class="form-label" for="senha">Senha</label>
                        <input type="password" id="senha" name="senha" class="form-input" placeholder="Digite sua senha" required>
                        <a href="recuperar-senha.php" class="forgot-password">Esqueci minha senha</a>
                    </div>
                    
                    <button type="submit" class="btn btn-login">Entrar</button>
                </form>
            </div>

            <!-- Card de Cadastro -->
            <div class="card register-card fade-in">
                <h2 class="card-title">Não tem conta?</h2>
                <p class="register-text">
                    Caso você ainda não seja cadastrado, clique no botão abaixo para se cadastrar agora e ter acesso completo ao sistema EcoPreve.
                </p>
                <a href="cadastro.php" class="register-link">Cadastrar Agora</a>
            </div>
        </div>
    </div>

    <script src="script.js"></script>
</body>
</html>