<?php include 'components/session_verify.php'?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bem Vindo</title>
    <link rel="stylesheet" href="css/painel-administrador.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="css/preset.css">
    
    <script src="pluguins/jquery-3.6.4.min.js"></script>
</head>

<body>
    <div class="container h-align v-center">
        <?php include 'components/sidemenu.php'; ?>
        <?php include 'components/cancelar.php'; ?>

        <div class="content v-align">
            <div class="info-list-cards h-align">
                <div class="card">
                    <div class="card-icon"> <i class='bx bx-scatter-chart'></i></div>
                    <p class="card-info" id='venda-diaria'>R$ 127.88</p>
                    <p class="card-subinfo">Venda Diária </p>
                </div>
                <div class="card">
                    <div class="card-icon"> <i class='bx bx-scatter-chart'></i></div>
                    <p class="card-info" id='venda-mensal'>R$ 4127.88</p>
                    <p class="card-subinfo">Venda Mensal</p>
                </div>
                <div class="card">
                    <div class="card-icon"> <i class='bx bx-scatter-chart'></i></div>
                    <p class="card-info" id='cliente-number'>132</p>
                    <p class="card-subinfo">Clientes</p>
                </div>
            </div>
            <div class="clientes-online v-align">
                <p class="section-title">Movimentação Recente</p>
                <div class="mov-list h-center">
                    <div class="mov-card">
                        <div class="mov-card-info">
                            <p class="mov-cod"><i class='bx bx-transfer-alt'></i>Movimentação #1234</p>
                            <p class="mov-data">16/06/2023</p>
                            <p class="mov-produto"><i class='bx bx-right-arrow-alt entrada'></i> Produto #13456 - </p>
                            <p class="mov-descricao"><i class='bx bx-detail'></i>Cadastro de Produto</p>
                        </div>
                    </div>
        
                    


                </div>
            </div>
        </div>
        <div class="pedidos">
            <div class="pedidos-header">
                <p> Pedidos Recentes </p>
            </div>

            <div class="pedidos-list v-align v-center">
                <div class="pedido-card">
                    <p class="pedido-title infos">Pedido #12345 <span>Há 9 minutos</span></p>
                    <p class="infos"><i class='bx bx-user'></i> Jorge Souza</p>
                    <p class="infos"><i class='bx bx-money'></i> R$ 51.75 <span>Crédito</span></p>
                    <p class="infos"><i class='bx bx-shopping-bag'></i>Retirada</p>
                    <div class="pedido-btns">
                        <button>Confirmar</button>
                        <button class="cancel-btn">Cancelar</button>
                    </div>
                </div>
                <div class="pedido-card">
                    <p class="pedido-title infos">Pedido #12345 <span>Há 9 minutos</span></p>
                    <p class="infos"><i class='bx bx-user'></i> Jorge Souza</p>
                    <p class="infos"><i class='bx bx-money'></i> R$ 51.75 <span>Crédito</span></p>
                    <p class="infos"><i class='bx bx-shopping-bag'></i>Retirada</p>
                    <div class="pedido-btns">
                        <button>Confirmar</button>
                        <button class="cancel-btn">Cancelar</button>
                    </div>
                </div>
                <div class="pedido-card">
                    <p class="pedido-title infos">Pedido #12345 <span>Há 9 minutos</span></p>
                    <p class="infos"><i class='bx bx-user'></i> Jorge Souza</p>
                    <p class="infos"><i class='bx bx-money'></i> R$ 51.75 <span>Crédito</span></p>
                    <p class="infos"><i class='bx bx-shopping-bag'></i>Retirada</p>
                    <div class="pedido-btns">
                        <button>Confirmar</button>
                        <button class="cancel-btn">Cancelar</button>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <script src="../backend/requests/get-init-data.js"></script>
    <script src="../backend/requests/pedido-get-init.js"></script>
    <script src="../backend/requests/pedido-update.js"></script>
    <script>
        $('#menu-painel').addClass('menu-active');
    </script>
</body>

</html>