<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Lava Jato do Patrão</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>
    <header>
        <div class="logo">
            <img src="img/patrão(logo).png" alt="Logo Lava Jato do Patrão">
            <span></span>
        </div>
        <nav>
            <ul>
                <li><a href="index.html">Início</a></li>
                <li><a href="sobre.html">Sobre</a></li>
                <li><a href="servicos.html">Serviços</a></li>
                <li><a href="depoimentos.html">Depoimentos</a></li>
                <li class="login-menu">
                    <a href="login.html" class="login-button">Login</a>
                    <ul class="submenu">
                        <li><a href="login.html">Login</a></li>
                        <li><a href="cadastro.html">Cadastre-se</a></li>
                        <li><a href="admin.html">Administrador</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </header>

    <main>
        <div class="login-container">
            <h2>Login do Administrador</h2>
            <form action="login.html" method="post">
                <div class="input-group">
                    <i class="fas fa-user"></i>
                    <input type="text" name="username" placeholder="Usuário" required>
                </div>
                <div class="input-group">
                    <i class="fas fa-lock"></i>
                    <input type="password" name="password" placeholder="Senha" required>
                </div>
                <a href="admininicio.html">Entrar</a>
                <div class="login-links">
                    <a href="#">Esqueceu a senha?</a>
                   
                </div>
            </form>
        </div>
    </main>

    <footer>
        <div class="footer-content">
            <div class="footer-section logo-section">
                <img src="img/logo22.png" alt="Logo Lava Jato do Patrão 22">
                <div class="social-icons">
                    <a href="https://wa.me/0000000000" target="_blank"><img src="img/whatsapp.png" alt="WhatsApp"></a>
                    <a href="https://facebook.com/lavajatopatrao" target="_blank"><img src="img/facebook.png" alt="Facebook"></a>
                    <a href="https://instagram.com/lavajatopatrao" target="_blank"><img src="img/instagram.png" alt="Instagram"></a>
                </div>
            </div>
            <div class="footer-section contact-section">
                <h3>Precisa de ajuda?</h3>
                <p>Entre em contato com a nossa Central de Atendimento!</p>
                <p>0800 000 0000</p>
                <p>Ou através do email lavajatopatrao@gmail.com</p> 
                <p>Disponível de Segunda a Sexta-Feira de 08:00 às 18:00</p>
            </div>
            <div class="footer-section app-section">
                <p>Baixe o app Lava Jato do Patrão e participe de ofertas exclusivas:</p>
                <a href="https://play.google.com/store/apps/details?id=com.lavajatopatrao" target="_blank">
                    <img src="img/playstore.png" alt="Play Store">
                </a>
            </div>
        </div>
        <div class="footer-bottom">
            <p>© 2024 Lava Jato do Patrão – <a href="politica.html">Política de Privacidade</a></p>
        </div>
    </footer>
    
</body>
</html>