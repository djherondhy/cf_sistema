<?php include 'components/session_verify.php'?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bem Vindo, Administrador</title>
    <link rel="stylesheet" href="css/painel-movimentacao.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="css/preset.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <script src="pluguins/jquery-3.6.4.min.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
</head>

<body>
    <?php include 'components/movimentacao-form.php'; ?>
    <?php include 'components/confirm.php'; ?>
    <div class="container h-align v-center">
        <?php
        include 'components/sidemenu.php';
        ?>
        <div class="content v-align">
            <div class="movimentacao-container neomorphism">
                <p class="title">Movimentação</p>
                <div class="mov-filter">
                    <div class="input-date">
                        <input type="text" placeholder="Busca por Data" id="data">
                        <label for="data" id="dataLabel"><i class='bx bx-calendar' ></i></label>
                    </div>
                    <label for="filter-todos" class="filter-label active" id='label-todos'>Todos</label>
                    <label for="filter-entradas" class="filter-label"  id='label-entrada'>Entradas</label>
                    <label for="filter-saidas" class="filter-label"  id='label-saida'>Saidas</label>
                    <input type="radio" name="filter-movimentacao" value="" id="filter-todos" checked>
                    <input type="radio" name="filter-movimentacao" value="1" id="filter-entradas">
                    <input type="radio" name="filter-movimentacao" value="0" id="filter-saidas">
                </div>
                <div class="mov-action">
                    <button class="action-btn" id="nova-mov"><i class='bx bx-layer-plus'></i> Nova Movimentação</button>
                </div>
                <div class="mov-list">
                    <div class="mov-card">
                        <div class="mov-card-info">
                            <p class="mov-cod"><i class='bx bx-transfer-alt'></i>Movimentação #1234</p>
                            <p class="mov-data">16/06/2023</p>
                            <p class="mov-produto"><i class='bx bx-right-arrow-alt entrada'></i> Produto #13456 - </p>
                            <p class="mov-descricao"><i class='bx bx-detail'></i>Cadastro de Produto</p>
                        </div>
                        <div class="mov-card-action">
                            <button><i class='bx bx-trash-alt'></i></button>
                            <button><i class='bx bxs-edit'></i></button>
                        </div>
                    </div>
                  
                </div>
            </div>
        </div>
    </div>

   
    <script>
        $('#menu-movimentacao').addClass('menu-active');
        $('.movimentacao-cadastro').hide();
        $('#data').datepicker();
        $('#dataLabel').click(function () {
            $('#data').datepicker();
        })

        $('#nova-mov').click(function(){
            $('.movimentacao-cadastro').fadeIn('slow');
        })

        $('#close-formMov').click(function(){
            $('.movimentacao-cadastro').fadeOut('slow');
        })
    </script>

<script src="../backend/requests/movimentacao-delete.js"></script>
<script src="../backend/requests/movimentacao-get.js"></script>
<script src="../backend/requests/movimentacao-populate.js"></script>
<script src="../backend/requests/movimentacao-post.js"></script>

</body>

</html>