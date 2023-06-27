<?php include 'components/session_verify.php' ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bem Vindo, Administrador</title>
    <link rel="stylesheet" href="css/painel-pedido.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="css/preset.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <script src="pluguins/jquery-3.6.4.min.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
</head>

<body>
    <?php
    include 'components/detalhes-pedido.php';
    ?>
    <div class="container h-align v-center">
        <?php
        include 'components/sidemenu.php';
        include 'components/filtro-pedidos.php';
        ?>
        <?php
        include 'components/cancelar.php';
        ?>
        <div class="content v-align">
            <div class="pedido-container neomorphism">
                <p class="title">Gerenciamento de Pedidos</p>
                <div class="actions">
                    <div class="input-date">
                        <input type="text" placeholder="Busca por Data, Cliente ou Código" id="busca">
                        <label for="busca" id="dataLabel"><i class='bx bx-calendar'></i></label>
                    </div>
                    <button class="produto-filtro">Todos <i class='bx bx-filter-alt'></i></button>
                </div>
                <div class="status-action">
                    <label for="filter-todos" class="active" id="label-todos">Todos</label>
                    <label for="filter-esperando" id="label-esperando">Esperando Confirmação</label>
                    <label for="filter-confirmado" id="label-confirmado">Confirmados</label>
                    <label for="filter-cancelado" id="label-cancelado">Cancelados</label>
                    <label for="filter-entregue" id="label-entregue">Entregues</label>

                    <input type="radio" name="filter-status" id="filter-todos" value="" checked>
                    <input type="radio" name="filter-status" id="filter-esperando" value="Esperando Confirmação">
                    <input type="radio" name="filter-status" id="filter-confirmado" value="Confirmado">
                    <input type="radio" name="filter-status" id="filter-cancelado" value="Cancelado">
                    <input type="radio" name="filter-status" id="filter-entregue" value="Entregue">

                </div>
                <div class="pedido-list">
                    <div class="pedido-card">
                        <div class="pedido-info">
                            <p class="pedido-id"><i class="bx bx-package"></i>Pedido #1234</p>
                            <p class="pedido-cliente"><i class="bx bx-user-circle"></i>Marcos</p>
                            <p class="pedido-status"><i class="bx bx-tag"></i> Esperando Confirmação</p>
                            <div class="pedido-tags">
                                <p class="pedido-data"><i class="bx bx-calendar-alt"></i> 19-06-2023 14:75</p>
                                <p class="pedido-total"><i class="bx bx-purchase-tag-alt"></i> R$ 12.75</p>
                                <p class="pedido-pagamento"><i class="bx bx-wallet"></i> Pix</p>
                                <p class="pedido-recebimento"><i class="bx bx-shopping-bag"></i>Retirada</p>
                            </div>
                        </div>
                        <div class="pedido-action">
                            <button><i class="bx bx-basket"></i>Itens </button>
                            <button> <i class="bx bx-send"></i> Confirmar </button>
                            <button><i class="bx bxs-truck"></i>Colocar Em Entrega </button>
                            <button><i class="bx bxs-shopping-bags"></i>Confirmar Retirada</button>
                            <button><i class="bx bx-x"></i> Cancelar </button>
                        </div>
                    </div>

                </div>
            </div>

        </div>

    </div>

    <script src="../backend/requests/pedido-adm-get.js"></script>
    <script src="../backend/requests/pedido-update.js"></script>
    <script src="../backend/requests/pedido-get-items.js"></script>
    <script src="../backend/requests/getPopup.js"></script>
    <script>
        $('.filtro-container').hide();
        $('.detalhes-pedidos').hide();

        $('.close-detalhes').click(function (response) {
            $('.detalhes-pedidos').fadeOut('slow');
        })

        $('#close-filtroPedidos').click(function () {
            $('.filtro-container').fadeOut('slow');
        });

        $('.produto-filtro').click(function () {
            $('.filtro-container').fadeIn('slow');
        });

        $('#dataLabel').click(function () {
            $('#busca').datepicker();
        })


        $('#menu-pedidos').addClass('menu-active');
    </script>
</body>

</html>