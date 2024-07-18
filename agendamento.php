<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agendamento - Lava Jato do Patrão</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>
    <header>
        <div class="logo">
            <img src="img/patrão(logo).png" alt="Logo Lava Jato do Patrão">
        </div>
        <nav>
            <ul>
                <li><a href="index.php">Início</a></li>
                <li><a href="sobre.php">Sobre</a></li>
                <li><a href="servicos.php">Serviços</a></li>
                <li><a href="depoimentos.php">Depoimentos</a></li>
                <li class="login-menu">
                    <a href="login.php" class="login-button">Login</a>
                    <ul class="submenu">
                        <li><a href="login.php">Login</a></li>
                        <li><a href="cadastro.php">Cadastre-se</a></li>
                        <li><a href="admin.php">Administrador</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </header>

    <main>
        <div class="agendamento-container">
            <h2>Agendamento de Serviços</h2>
            <div class="tipo-veiculo">
                <label for="veiculo">Escolha o tipo de veículo:</label>
                <select id="veiculo" onchange="atualizarPrecos()">
                    <option value="" disabled selected>Selecione</option>
                    <option value="moto">Moto</option>
                    <option value="carro_pequeno">Carro Pequeno</option>
                    <option value="carro_medio">Carro Médio</option>
                    <option value="carro_grande">Carro Grande</option>
                </select>
            </div>

            <div class="tabela-servicos">
                <h3>Serviços Disponíveis</h3>
                <form id="form-servicos">
                    <div class="categoria">
                        <h4>Estofados</h4>
                        <label>
                            <input type="checkbox" name="servico" value="Limpeza do Estofado (Pano)" data-preco="0">
                            Limpeza do Estofado (Pano)
                        </label>
                        <label>
                            <input type="checkbox" name="servico" value="Hidratação do Couro" data-preco="0">
                            Hidratação do Couro
                        </label>
                    </div>
                    <div class="categoria">
                        <h4>Interior e Externo</h4>
                        <label>
                            <input type="checkbox" name="servico" value="Lavagem Simples" data-preco="0">
                            Lavagem Simples
                        </label>
                        <label>
                            <input type="checkbox" name="servico" value="Lavagem Detalhada" data-preco="0">
                            Lavagem Detalhada
                        </label>
                    </div>
                    <div class="categoria">
                        <h4>Vidros</h4>
                        <label>
                            <input type="checkbox" name="servico" value="Cristalização" data-preco="0">
                            Cristalização
                        </label>
                    </div>
                    <div class="categoria">
                        <h4>Pintura</h4>
                        <label>
                            <input type="checkbox" name="servico" value="Polimento" data-preco="0">
                            Polimento
                        </label>
                        <label>
                            <input type="checkbox" name="servico" value="Vitrificação" data-preco="0">
                            Vitrificação
                        </label>
                    </div>
                    <div class="categoria">
                        <h4>Faróis</h4>
                        <label>
                            <input type="checkbox" name="servico" value="Polimento dos Faróis" data-preco="0">
                            Polimento dos Faróis
                        </label>
                    </div>
                    <div class="categoria">
                        <h4>Motor</h4>
                        <label>
                            <input type="checkbox" name="servico" value="Limpeza Técnica" data-preco="0">
                            Limpeza Técnica
                        </label>
                    </div>
                    <div class="categoria">
                        <h4>Plásticos</h4>
                        <label>
                            <input type="checkbox" name="servico" value="Revitalização dos Plásticos" data-preco="0">
                            Revitalização dos Plásticos
                        </label>
                    </div>
                </form>
            </div>

            <div class="carrinho">
                <h3>Seu Carrinho</h3>
                <ul id="carrinho-lista"></ul>
                <div class="total">
                    <span>Total:</span>
                    <span id="total-preco">R$0.00</span>
                </div>
                <button onclick="finalizarCarrinho()">Finalizar Carrinho</button>
            </div>

            <div class="agendamento-detalhes" id="agendamento-detalhes" style="display: none;">
                <h3>Detalhes do Agendamento</h3>
                <form action="agendar.php" method="post">
                    <input type="text" name="placa" placeholder="Placa do Veículo" required>
                    <input type="text" name="modelo" placeholder="Modelo do Veículo" required>
                    <input type="text" name="cor" placeholder="Cor do Veículo" required>
                    <input type="date" name="data" placeholder="Data" required>
                    <input type="time" name="hora" placeholder="Hora" required>
                    <button type="submit">Confirmar Agendamento</button>
                </form>
            </div>
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
            <p>© 2024 Lava Jato do Patrão – <a href="politica.php">Política de Privacidade</a></p>
        </div>
    </footer>
    
    <script src="script.js"></script>
</body>
</html>
