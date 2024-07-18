<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lava Jato do Patrão</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <div class="logo">
            <img src="img/patrão(logo).png" alt="Logo Lava Jato do Patrão">
            <span></span>
        </div>
        <nav>
            <ul>
                <li><a href="cadastrofunc.php">Cadastrar</a></li>
                <li><a href="estoque.php">Estoque</a></li>
                <li><a href="agendados.php">Agendamentos</a></li>
                <li><a href="faturamento.php">Faturamento</a></li>
                <li class="login-menu">
                    <a href="index.php" class="login-button">Sair</a>
        
                    </ul>
                </li>
            </ul>
        </nav>
    </header>

    <main>
        <div class="login-container">
            <h2>Cadastro de Funcionário</h2>
            <form action="cadastro.php" method="post">
                <div class="input-group">
                    <i class="fas fa-user"></i>
                    <input type="text" name="fullname" placeholder="Nome Completo" required>
                </div>
                <div class="input-group">
                    <i class="fas fa-id-card"></i>
                    <input type="text" name="cpf" placeholder="CPF" required>
                </div>
                <div class="input-group">
                    <i class="fas fa-envelope"></i>
                    <input type="email" name="email" placeholder="Email" required>
                </div>
                <div class="input-group">
                    <i class="fas fa-lock"></i>
                    <input type="password" name="password" placeholder="Senha" required>
                </div>
                <div class="input-group">
                    <i class="fas fa-phone"></i>
                    <input type="text" name="phone" placeholder="Telefone" required>
                </div>
                <button type="submit">Enviar</button>
            </form>
        </div>
    </main>

    
</body>
</html>
