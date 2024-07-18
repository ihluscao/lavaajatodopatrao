<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faturamento do Dia - Lava Jato do Patrão</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
     
        .chart {
            margin-top: 20px;
            text-align: center;
        }

        .chart-title {
            font-size: 24px;
            margin-bottom: 10px;
        }

        .bars {
            display: flex;
            justify-content: space-around;
            align-items: flex-end;
            height: 300px;
            background-color: #f2f2f2;
            border-radius: 10px;
            overflow: hidden;
            padding: 10px;
        }

        .bar {
            flex: 1;
            margin: 0 10px;
            text-align: center;
            position: relative;
        }

        .bar span {
            display: block;
            width: 100%;
            background-color: #0C2CA4;
            color: white;
            padding: 5px 0;
            border-radius: 5px;
            margin-top: 5px;
        }

        .bar.red {
            background-color: #ff4d4d;
        }

        .bar.green {
            background-color: #4caf50;
        }

        .transacoes {
            margin-top: 20px;
        }

        .transacoes h3 {
            font-size: 20px;
            margin-bottom: 10px;
        }

        .transacao {
            margin-bottom: 10px;
        }
    </style>
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
        <div class="container">
            <h2>Faturamento do Dia 17/07/2024</h2>

            <div class="chart">
                <h3 class="chart-title">Faturamento Gráfico</h3>
                <div class="bars">
                    <div class="bar red" style="height: 50%;">
                        <span>Saída: R$2000.00</span>
                    </div>
                    <div class="bar green" style="height: 70%;">
                        <span>Entrada: R$3000.00</span>
                    </div>
                </div>
            </div>

            <div class="transacoes">
                <h3>Detalhes das Transações</h3>
                <div class="transacao">
                    <p><strong>Saída:</strong> R$2000.00 (Produtos e Peças)</p>
                </div>
                <div class="transacao">
                    <p><strong>Entrada:</strong> R$3000.00</p>
                    <p>- Serviço: Lavagem Detalhada para BMW X6</p>
                    <p>- Serviço: Polimento para Chevrolet S10</p>
                </div>
            </div>
        </div>
    </main>

    
</body>
</html>
