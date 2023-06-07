<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bem Vindo, Administrador</title>
    <link rel="stylesheet" href="painel-pedido.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="preset.css">
    <link rel="stylesheet" href="sidemenu.css">
    <script src="pluguins/jquery-3.6.4.min.js"></script>
</head>

<body>
    <div class="container h-align v-center">
        <?php include 'components/sidemenu.php'; ?>
        <div class="content v-align">
            <div class="pedidos v-align neomorphism">
                <p class="title">Histórico de Pedidos</p>
                <div class="action h-align vh-center">
                    <button>Hoje <i class='bx bx-chevron-down'></i> </button>
                </div>
                <div class="pedido-table v-align ">
                    <div class=" head row h-align">
                        <div class="column h-align id">
                            <i class='bx bxs-purchase-tag-alt'></i>
                            <p>Pedido</p>
                        </div>
                        <div class="column h-align">
                            <i class='bx bxs-purchase-tag-alt'></i>
                            <p>Data</p>
                        </div>
                        <div class="column h-align name">
                            <i class='bx bxs-user'></i>
                            <p>Cliente</p>

                        </div>
                        <div class="column h-align">
                            <i class='bx bxs-wallet'></i>
                            <p>Subtotal</p>
                        </div>
                        <div class="column h-align">
                            <i class='bx bxs-shopping-bags'></i>
                            <p>
                                Forma
                            </p>
                        </div>
                        <div class="column h-align">
                            <i class='bx bxs-bookmark-star'></i>
                            <p>
                                Status
                            </p>
                        </div>
                        <div class="column h-align">
                            <i class='bx bxs-mouse-alt'></i>
                            <p>
                                Ação
                            </p>
                        </div>
                    </div>

                    <?php
                    for ($i = 0; $i < 8; $i++) {
                        ?>

                        <div class="row h-align">
                            <div class="column id">

                                <p>#000
                                    <?php echo $i; ?>
                                </p>
                            </div>
                            <div class="column h-align">
                                <p>11/05 14:40</p>
                            </div>
                            <div class="column h-align name">
                                <img src="pictures/perfil-mockup.jpg" alt="" srcset="">
                                <p>João Pereira
                                    <?php echo $i; ?>
                                </p>

                            </div>
                            <div class="column">
                                <p>R$ 12.45</p>
                            </div>
                            <div class="column">
                                <p>
                                    Entrega
                                </p>
                            </div>
                            <div class="column">
                                <p>
                                    Confirmado
                                </p>
                            </div>
                            <div class="column">
                                <button><i class='bx bx-chevron-left'></i></button>
                                <button><i class='bx bxs-chat'></i></button>
                                <button><i class='bx bxs-trash-alt'></i></button>
                            </div>
                        </div>



                        <?php
                    }
                    ?>
                </div>
            </div>

        </div>

    </div>
</body>

</html>