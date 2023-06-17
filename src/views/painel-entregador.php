<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width= , initial-scale=1.0">
    <title>A Farmácia ao Seu Alcance</title>
    <link rel="stylesheet" href="painel-entregador.css">
    <link rel="stylesheet" href="historico-sidebar.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="pluguins/jquery-3.6.4.min.js"></script>
    <link rel="stylesheet" href="preset.css">
</head>

<body>

    <?php

$pedido =04;
$minutos = 3;
$Cliente = "Lucas Pinheiro";
$Valor = 30.00;
$Pagamento = "Pix";
?>

<div class="historico-pedido" >
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
            <button>Mês</button>
        </div>
  
        <div class="historico-list">
            <div class="historico-card">
                <div class="more-btn" id="more-pedido" onclick="showMorePedido(1)">
                    <i class='bx bx-expand-vertical'></i>
                </div>
                <div class="historico-header">
                    <p class="historico-id"><i class='bx bx-purchase-tag-alt'></i> Pedido #1234</p>
                    <p>Subtotal: R$ 13.98</p>
                </div>
                <div class="datatime">
                    <p>22/10/2022</p>
                    <p>18:20</p>
                </div>
                <div class="historico-content" id="pedido-content1">
                    <p class="historico-title"><i class='bx bx-basket'></i>Itens</p>
                    <div class="itens-list">
                        <div class="item-pedido">
                            <p>1x Omeprazol</p>
                            <p>R$ 8.95</p>
                        </div>
                        <div class="item-pedido">
                            <p>1x Ibrupofeno</p>
                            <p>R$ 5.75</p>
                        </div>
                    </div>
                    <p class="detalhe-title"> Endereço</p>
                    <div class="endereco">
                        <p>Bairo São Tok</p>
                        <p>Rua Mario Pexoto</p>
                        <p>Nº 2283</p>
                        <p>Perto de nun sei o que</p>
                    </div>

                    <div class="pedido-info">
                        <p class="info-text"><i class='bx bx-store'></i>Retirada</p>
                    </div>
                </div>
            </div>

           
        </div>

    </div>

    <div class="detalhe-pedido" >
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
  
        <div class="detalhe-list">
            <div class="detalhe-card">
               
                <div class="detalhe-header">
                    <p class="detalhe-id"><i class='bx bx-purchase-tag-alt'></i> Pedido #1234</p>
                    <p>Subtotal: R$ 13.98</p>
                </div>
                <div class="datatime">
                    <p>22/10/2022</p>
                    <p>18:20</p>
                </div>
                <div class="detalhe-content" id="pedido-content1">
                    <p class="detalhe-title"><i class='bx bx-basket'></i>Itens</p>
                    <div class="itens-list">
                        <div class="item-pedido">
                            <p>1x Omeprazol</p>
                            <p>R$ 8.95</p>
                        </div>
                        <div class="item-pedido">
                            <p>1x Ibrupofeno</p>
                            <p>R$ 5.75</p>
                        </div>
                    </div>
                    <p class="detalhe-title"> Endereço</p>
                    <div class="endereco">
                        <p>Bairo São Tok</p>
                        <p>Rua Mario Pexoto</p>
                        <p>Nº 2283</p>
                        <p>Perto de nun sei o que</p>
                    </div>

                    <div class="pedido-info">
                        <p class="info-text"><i class='bx bx-store'></i>Pix</p>
                    </div>
                </div>
            </div>

           
        </div>

    </div>


















    <div class="container">

        <div class="painel">
            <div class="top-bar">

                <img src="pictures/entrega.gif" alt="Gif Animado">
                <h2>Painel de Entrega</h2>
                <input type="submited" value="Histórico" id="bnt-historico">

            </div>
            <div class="title">
                <h2>Pronto Entrega</h2>
                <h2>Em Entrega</h2>
            </div>
            <div class="container-list">

                <div class="pedidos-list">

                    <div class="list" id="pedido-info">

                        <div class="info-list">

                            <?php
 
                             echo "
                             <h4>Pedido ". $pedido ."&emsp;</h4><p>Há ". $minutos ." minutos</p>";
                             ?>
                           </div>
                             <?php
                             echo "<h4>".$Cliente."</h4>";
                            ?>

                            <div class="info-list2">

                                <?php  
                                 echo "<h4>R$ ".$Valor."&emsp;</h4><p>(".$Pagamento.")</p>"
                                ?>

                            </div>

                            <div class="bnt-pronto">
                                <input type="submited" value="Colocar em Entrega">
                            </div>

                        </div>

                        <div class="list">
                                <div class="info-list">

                                <?php

                                echo "<h4>Pedido ". $pedido ."&emsp;</h4><p>Há ". $minutos ." minutos</p>";
                                ?>
                                  
                                </div>
                                 <?php                  
                                echo "<h4>".$Cliente."</h4>";
                                ?>

                                <div class="info-list2">

                                    <?php  
                                     echo "<h4>R$ ".$Valor."&emsp;</h4><p>(".$Pagamento.")</p>"
                                    ?>

                                </div>
                                
                                <div class="bnt-pronto">
                                <input type="submited" value="Colocar em Entrega">
                            </div>

                            </div>

                    </div>

                    

                    <div class="pedidos-list">

                        <div class="list">
                                <div class="info-list">

                                <?php

                                echo "<h4>Pedido ". $pedido ."&emsp;</h4><p>Há ". $minutos ." minutos</p>";
                                ?>
                                  
                                </div>
                                 <?php                  
                                echo "<h4>".$Cliente."</h4>";
                                ?>

                                <div class="info-list2">

                                    <?php  
                                     echo "<h4>R$ ".$Valor."&emsp;</h4><p>(".$Pagamento.")</p>"
                                    ?>

                                </div>

                                <div class="bnt-pronto">
                                <input type="submited" value="Finalizar Entrega">
                            </div>

                            </div>
                    </div>

                   

                </div>
            </div>
        </div>
        <script src="js/show-elements.js"></script>
    <script src="js/hide-elements.js"></script>
</body>