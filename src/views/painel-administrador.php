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
    <script src="pluguins/jquery-3.6.4.min.js"></script>
</head>

<body>
    <div class="container h-align">
        <div class="sidemenu v-align neomorphism">
            <div class="action-btns h-align h-center">
                <p>ConnectFarma</p>
                <div>
                    <button><i class='bx bx-log-out'></i></button>
                </div>
            </div>
            <div class="perfil-area v-align vh-center">
                <img src="pictures/dj.jpg" alt="" srcset="">
                <p class="username">Administrador</p>
                <p class="welcome">Bem Vindo</p>
            </div>
            <div class="menu v-align h-center">
                <a href="" class="menu-active"><i class='bx bx-scatter-chart'></i> Painel de Dados</a>
                <a href="painel-pedido.php"><i class='bx bx-scatter-chart'></i> Pedidos</a>
                <a href=""><i class='bx bx-scatter-chart'></i> Produtos</a>
                <a href=""><i class='bx bx-store-alt'></i> Catálogo</a>
                <a href=""><i class='bx bx-scatter-chart'></i> Recursos Humanos</a>
            </div>
        </div>

        <div class="content v-align h-center">
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
            <div class="clientes-online v-align ">
                <p class="section-title">Clientes Ativos</p>
                <div class="clientes-list">
                    <div class="online-card">
                        <div class="cliente-nome">

                        </div>
                        <div class="cliente-column">
                            <p>Atividade</p>
                        </div>
                        <div class="cliente-column">
                            <p>Subtotal</p>
                        </div>
                    </div>
                    <div class="online-card">
                        <div class="cliente-nome">
                            <img src="pictures/dj.jpg" alt="" srcset="">
                            <p>João Felix</p>
                        </div>
                        <div class="cliente-column">
                            <div class="online"></div>
                            <p>Online há 7 minutos</p>
                        </div>
                        <div class="cliente-column">
                            <p>R$ 12.45</p>
                        </div>

                    </div>
                    <div class="online-card">
                        <div class="cliente-nome">
                            <img src="pictures/bruno.jpg" alt="" srcset="">
                            <p>Carlos Souza</p>
                        </div>
                        <div class="cliente-column">
                            <div class="online"></div>
                            <p>Online há 22 minutos</p>
                        </div>
                        <div class="cliente-column">
                            <p>R$ 00.00</p>
                        </div>
                    </div>
                    <div class="online-card">
                        <div class="cliente-nome">
                            <img src="pictures/perfil-mockup.jpg" alt="" srcset="">
                            <p>Marcio Freitas</p>
                        </div>
                        <div class="cliente-column">
                            <div class="offline"></div>
                            <p>Offline há 5 minutos</p>
                        </div>
                        <div class="cliente-column">
                            <p>R$ 36.45</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="entregadores-online h-align">
                <p class="section-title">Entregadores Ativos</p>
                <div class="entregador-list v-align">
                    <div class="online-card">
                        <div class="card-column h-align h-center">

                        </div>
                        <div class="card-column h-align h-center">
                            <p>Atividade</p>
                        </div>
                        <div class="card-column h-align h-center">
                            <p>Comissão</p>
                        </div>
                    </div>
                    <div class="online-card">
                        <div class="card-column h-align h-center">
                            <img src="pictures/perfil-mockup.jpg" alt="" srcset="">
                            <p>Marcio Freitas</p>
                        </div>
                        <div class="card-column  h-align h-center">
                            <div class="online"></div>
                            <p>Online há 22 minutos</p>
                        </div>
                        <div class="card-column  h-align h-center">
                            <p>R$ 10.72</p>
                        </div>
                    </div>
                    <div class="online-card">
                        <div class="card-column h-align h-center">
                            <img src="pictures/perfil-mockup.jpg" alt="" srcset="">
                            <p>Marcio Freitas</p>
                        </div>
                        <div class="card-column h-align h-center">
                            <div class="online"></div>
                            <p>Online há 22 minutos</p>
                        </div>
                        <div class="card-column  h-align h-center">
                            <p>R$ 10.72</p>
                        </div>
                    </div>
                    <div class="online-card">
                        <div class="card-column h-align h-center">
                            <img src="pictures/bruno.jpg" alt="" srcset="">
                            <p>Marcio Freitas</p>
                        </div>
                        <div class="card-column  h-align h-center">
                            <div class="online"></div>
                            <p>Online há 22 minutos</p>
                        </div>
                        <div class="card-column  h-align h-center">
                            <p>R$ 10.72</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="pedidos">
            <div class="pedidos-header">
                <p> Pedidos Recentes </p>
            </div>

            <div class="pedidos-list v-align h-center">
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