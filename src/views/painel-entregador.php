<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width= , initial-scale=1.0">
    <title>A Farmácia ao Seu Alcance</title>
    <link rel="stylesheet" href="css/painel-entregador.css">
    <link rel="stylesheet" href="css/historico-sidebar.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="pluguins/jquery-3.6.4.min.js"></script>
    <link rel="stylesheet" href="preset.css">
</head>

<body>



    <div class="historico-pedido">
        <button class="close-btn" id="close-historico"> <i class='bx bx-x'></i> </button>
        <p class="title">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                <path
                    d="M21 11h-3V4a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v14c0 1.654 1.346 3 3 3h14c1.654 0 3-1.346 3-3v-6a1 1 0 0 0-1-1zM5 19a1 1 0 0 1-1-1V5h12v13c0 .351.061.688.171 1H5zm15-1a1 1 0 0 1-2 0v-5h2v5z">
                </path>
                <path d="M6 7h8v2H6zm0 4h8v2H6zm5 4h3v2h-3z"></path>
            </svg>
            Histórico Entregas
        </p>
        <div class="historico-filter">
            <button class="filter-active">Hoje</button>
            <button>Semana</button>
            <button>Semana</button>
        </div>

        <div class="historico-list" id="list-pedidos-history">
            <div class="historico-card">
                <div class="more-btn" id="more-pedido" onclick="showMorePedido(1)">
                    <i class='bx bx-expand-vertical'></i>
                </div>
                <div class="historico-header">

                </div>
                <div class="datatime">

                </div>
                <div class="historico-content" id="pedido-content1">
                    <p class="historico-title"><i class='bx bx-basket'></i>Itens</p>
                    <div class="itens-list">

                    </div>
                    <p class="detalhe-title"> Endereço</p>
                    <div class="endereco">

                    </div>

                    <div class="pedido-info">
                        <p class="info-text"><i class='bx bx-store'></i>Retirada</p>
                    </div>
                </div>
            </div>


        </div>

    </div>

    <div class="detalhe-pedido">
        <button class="close-btn" id="close-detalhe"> <i class='bx bx-x'></i> </button>
        <p class="title">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                <path
                    d="M21 11h-3V4a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v14c0 1.654 1.346 3 3 3h14c1.654 0 3-1.346 3-3v-6a1 1 0 0 0-1-1zM5 19a1 1 0 0 1-1-1V5h12v13c0 .351.061.688.171 1H5zm15-1a1 1 0 0 1-2 0v-5h2v5z">
                </path>
                <path d="M6 7h8v2H6zm0 4h8v2H6zm5 4h3v2h-3z"></path>
            </svg>
            Detalhe Entrega
        </p>

        <div class="detalhe-list" id="detalhe-info-pedido">
            <div class="detalhe-card">

                <div class="pedido-info">
                    <p class="info-text"><i class='bx bx-store'></i>Pix</p>
                </div>
                <div class="confirm-status" id="confirm-stats">

                </div>
            </div>
        </div>


    </div>

    </div>


















    <div class="container">

        <div class="painel">
            <div class="top-bar">
                <img src="pictures/entrega.gif" alt="Gif Animado">
                <div class="title-painel">
                    <h2>Painel de Entrega</h2>
                </div>
                <div class="bnt-hisb"><input type="button" value="Histórico" id="bnt-historico"></div>
            </div>
            <div class="title">
                <h2 id="title-painel-pronto">Pronto Entrega</h2>
                <h2 id="title-painel-entrega">Em Entrega</h2>
            </div>
            <div class="container-list">


                <div class="pedidos-list" id="list-pronto-entrega">


                </div>
                <div class="seta" id="setaL">
                    <img src="pictures/setaL.gif" alt="Gif Animado">
                </div>
                <div class="seta" id="setaR">
                    <img src="pictures/setaR.gif" alt="Gif Animado">
                </div>

                <div class="pedidos-list" id="list-em-entrega">



                </div>
            </div>
        </div>
    </div>
    <script src="js/show-elements.js"></script>
    <script src="js/hide-elements.js"></script>
    <script src="../backend/requests/get-pedidos-entregador.js"></script>

</body>