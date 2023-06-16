<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bem Vindo, Administrador</title>
    <link rel="stylesheet" href="painel-administrador.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="preset.css">
    <link rel="stylesheet" href="sidemenu.css">
    <script src="pluguins/jquery-3.6.4.min.js"></script>
</head>

<body>
    <div class="container h-align v-center">
    <?php include 'components/sidemenu.php';?>

        <div class="content v-align">
            <div class="info-list-cards h-align">
                <div class="card">
                    <div class="card-icon"> <i class='bx bx-scatter-chart'></i></div>
                    <p class="card-info">R$ 127.88</p>
                    <p class="card-subinfo">Venda Diária </p>
                </div>
                <div class="card">
                    <div class="card-icon"> <i class='bx bx-scatter-chart'></i></div>
                    <p class="card-info">R$ 4127.88</p>
                    <p class="card-subinfo">Venda Mensal</p>
                </div>
                <div class="card">
                    <div class="card-icon"> <i class='bx bx-scatter-chart'></i></div>
                    <p class="card-info">132</p>
                    <p class="card-subinfo">Clientes</p>
                </div>
            </div>
            <div class="clientes-online v-align">
                <p class="section-title">Clientes Ativos</p>
                <div class="clientes-list h-center">
                    <div class="online-card">
                        <div class="info">
                            <div class="user-perfil">
                                <img src="pictures/dj.jpg" alt="" srcset="">
                            </div>
                            <p class="cliente-name">João Roberto</p>
                        </div>
                        <div class="tags">
                            <p class="tag"><span></span>Online há x minutos</p>
                            <p class="tag"> R$75.00</p>
                        </div>
                    </div>

                    <div class="online-card">
                        <div class="info">
                            <div class="user-perfil">
                                <img src="pictures/dj.jpg" alt="" srcset="">
                            </div>
                            <p class="cliente-name">João Roberto</p>
                        </div>
                        <div class="tags">
                            <p class="tag"><span></span>Online há x minutos</p>
                            <p class="tag"> R$75.00</p>
                        </div>
                    </div>
                    <div class="online-card">
                        <div class="info">
                            <div class="user-perfil">
                                <img src="pictures/dj.jpg" alt="" srcset="">
                            </div>
                            <p class="cliente-name">João Roberto</p>
                        </div>
                        <div class="tags">
                            <p class="tag"><span></span>Online há x minutos</p>
                            <p class="tag"> R$75.00</p>
                        </div>
                    </div>
                                       
                </div>
            </div>

            <div class="entregadores-online v-align">
                <p class="section-title">Entregadores Ativos</p>
                <div class="entregadores-list v-align">
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
</body>

</html>