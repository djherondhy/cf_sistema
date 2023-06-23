<?php
session_start();

?>
<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>A Farmácia ao Seu Alcance</title>
    <link rel="stylesheet" href="css/preset.css">
    <link rel="stylesheet" href="css/cliente-home.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="pluguins/jquery-3.6.4.min.js"></script>
</head>

<body>

<?php
        include "components/detalhes.php";
?>
    
<?php
        include "components/sidebar.php";
        ?>
    <div class="side-pedido">
        <button class="close-btn" id="close-pedidos"> <i class='bx bx-x'></i> </button>
        <p class="title">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                <path
                    d="M21 11h-3V4a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v14c0 1.654 1.346 3 3 3h14c1.654 0 3-1.346 3-3v-6a1 1 0 0 0-1-1zM5 19a1 1 0 0 1-1-1V5h12v13c0 .351.061.688.171 1H5zm15-1a1 1 0 0 1-2 0v-5h2v5z">
                </path>
                <path d="M6 7h8v2H6zm0 4h8v2H6zm5 4h3v2h-3z"></path>
            </svg>
            Pedidos
        </p>
        <div class="pedido-filter">
            <button class="filter-active">Confirmados</button>
            <button>Enviados</button>
            <button>Recebidos</button>
        </div>

        <div class="pedido-list">
            <div class="pedido-card">
                <div class="more-btn" id="more-pedido" onclick="showMorePedido(1)">
                    <i class='bx bx-expand-vertical'></i>
                </div>
                <div class="pedido-header">
                    <p class="pedido-id"><i class='bx bx-purchase-tag-alt'></i> Pedido #1234</p>
                    <p>Subtotal: R$ 13.98</p>
                </div>
                <div class="datatime">
                    <p>22/10/2022</p>
                    <p>18:20</p>
                </div>
                <div class="pedido-content" id="pedido-content1">
                    <p class="pedido-title"><i class='bx bx-basket'></i>Itens</p>
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

                    <div class="pedido-info">
                        <p class="info-text"><i class='bx bx-store'></i>Retirada</p>
                        <p class="info-text"> <i class='bx bx-money'></i> Dinheiro</p>
                    </div>
                </div>
            </div>

            <div class="pedido-card">
                <div class="more-btn" id="more-pedido" onclick="showMorePedido(2)">
                    <i class='bx bx-expand-vertical'></i>
                </div>
                <div class="pedido-header">
                    <p class="pedido-id"><i class='bx bx-purchase-tag-alt'></i> Pedido #1554</p>
                    <p>Subtotal: R$ 13.98</p>
                </div>
                <div class="datatime">
                    <p>22/10/2022</p>
                    <p>18:20</p>
                </div>
                <div class="pedido-content" id="pedido-content2">
                    <p class="pedido-title"><i class='bx bx-basket'></i>Itens</p>
                    <div class="itens-list">
                        <div class="item-pedido">
                            <p>1x Omeprazol</p>
                            <p>R$ 8.95</p>
                        </div>
                    </div>

                    <div class="pedido-info">
                        <p class="info-text"> <i class='bx bx-package'></i> Entrega</p>
                        <p class="info-text"> <i class='bx bx-wallet'></i> Crédito</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="side-cart">
        <button class="close-btn" id="close-carrinho"> <i class='bx bx-x'></i> </button>
        <p> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                <path
                    d="M21.822 7.431A1 1 0 0 0 21 7H7.333L6.179 4.23A1.994 1.994 0 0 0 4.333 3H2v2h2.333l4.744 11.385A1 1 0 0 0 10 17h8c.417 0 .79-.259.937-.648l3-8a1 1 0 0 0-.115-.921zM17.307 15h-6.64l-2.5-6h11.39l-2.25 6z">
                </path>
                <circle cx="10.5" cy="19.5" r="1.5"></circle>
                <circle cx="17.5" cy="19.5" r="1.5"></circle>
            </svg>
            Carrinho</p>
        <div class="carrinho-list">
            <?php
            for ($i = 0; $i < 2; $i++) {


                ?>

                <div class="carrinho-card">
                    <img src="pictures/remedios/omeprazol.png" alt="" srcset="">
                    <div class="cart-text">
                        <p class="nome-produto">Omeprazol</p>
                        <p class="chart-preco">R$ 12.75 </p>
                    </div>

                    <div class="quantidade">
                        <button> + </button>
                        <p>5</p>
                        <button> - </button>
                        <button>
                            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24">
                                <path
                                    d="M15 2H9c-1.103 0-2 .897-2 2v2H3v2h2v12c0 1.103.897 2 2 2h10c1.103 0 2-.897 2-2V8h2V6h-4V4c0-1.103-.897-2-2-2zM9 4h6v2H9V4zm8 16H7V8h10v12z">
                                </path>
                            </svg>
                        </button>
                    </div>
                </div>
            <?php } ?>
        </div>

        <div class="finalizar-cart">
            <p><b>Total:</b> R$ 125.75 </p>
            <button class="finalizar-btn">Finalizar Pedido</button>
        </div>
    </div>
    <?php
    include "components/detalhes.php";
    include "components/sidebar.php";
    include "components/pedido-sidebar.php";
    include "components/carrinho.php";
    include "components/popup.php";
    include "components/form-pedido.php";
    include "components/form-endereco.php";
    ?>
    <div class="container">
        <div class="topbar">

            <?php if (isset($_SESSION['active'])) { ?>
                <p class="username"></p>
                
                <div class="user-perfil">
                   
                </div>
                <div class="notificacao" id="notificacao-btn">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <circle cx="18" cy="6" r="3"></circle>
                        <path
                            d="M18 19H5V6h8c0-.712.153-1.387.422-2H5c-1.103 0-2 .897-2 2v13c0 1.103.897 2 2 2h13c1.103 0 2-.897 2-2v-8.422A4.962 4.962 0 0 1 18 11v8z">
                        </path>
                    </svg>
                    <div class="notificacao-modal">
                        <div class="notificacao-item">
                            <div class="notificacao-icon">
                                <i class='bx bx-cycling'></i>
                            </div>
                            <div class="notificacao-text">
                                <p>Seu pedido número #10056 saiu para entrega.</p>
                                <p>10/05/2023 14:30 </p>
                            </div>

                        </div>

                        <div class="notificacao-item">
                            <div class="notificacao-icon">
                                <i class='bx bx-package'></i>
                            </div>
                            <div class="notificacao-text">
                                <p>Seu pedido número #10056 foi confirmado.</p>
                                <p>10/05/2023 14:30 </p>
                            </div>

                        </div>
                    </div>
                </div>
                <a href="login-user.php" class="logout"><i class='bx bx-log-out'></i></a>
            <?php } else { ?>
                <a href="login-user.php" class="acessar"><i class='bx bx-log-in'></i> Acessar</a>
            <?php } ?>

        </div>


        <div class="section">
            <div class="search-input">
                <input type="text" placeholder="Pesquisar por medicamento">
                <div class="search-button">
                    <i class='bx bx-search' style="color: #ffffff;"></i>
                </div>
            </div>
        </div>
        <div class="section">
            <h2 class="section-title">Categorias</h2>
            <div class="categoria-list">
                <div class="categoria-card">
                    <p>Alopáticos</p>
                </div>
                <div class="categoria-card">
                    <p>Genéricos</p>
                </div>
                <div class="categoria-card">
                    <p>Similar</p>
                </div>
                <div class="categoria-card">
                    <p>Fitoterápicos</p>
                </div>
                <div class="categoria-card">
                    <p>Homeopáticos</p>
                </div>
                <div class="categoria-card">
                    <p>Manipulados</p>
                </div>
                <div class="categoria-card">
                    <p>Biológicos</p>
                </div>
                <div class="categoria-card">
                    <p>Fracionados</p>
                </div>
                <div class="categoria-card">
                    <p>Outros</p>
                </div>
            </div>
        </div>
        <div class="section">
            <h2 class="section-title">Produtos Recomendados</h2>
            <div class="carousel-produtos">
                <div class="left-btn">
                    < </div>

                        <div class="product-list">
                            <div class="product-card">
                                <div class="action-button">
                                    <button id="add-carrinho">
                                        <i class="bx bx-heart"></i>
                                    </button>

                                    <button>
                                        <i class="bx bx-cart-alt"></i>
                                    </button>
                                </div>
                                <div class="product-img">
                                    <img src="pictures/remedio.png" alt="">
                                </div>
                                <div class="card-text">
                                    <p class="nome">Metronidazol</p>
                                    <p class="categoria">Antibiótico</p>
                                    <p class="preco">R$ 15.75</p>
                                </div>
                            </div>
                        </div>

                        <div class="right-btn">
                            >
                        </div>

                </div>


            </div>
        </div>

      
        <script src="../backend/requests/get-catalogo.js"></script>
        <script src="../backend/requests/ver-detalhes.js"></script>
        <script src="../backend/requests/get-userData.js"></script>
        <script src="../backend/requests/add-carrinho.js"></script>
        <script src="../backend/requests/get-carrinho.js"></script>
        <script src="../backend/requests/pedido-validation.js"></script>
        <script src="../backend/requests/pedido-populate.js"></script>
        <script src="../backend/requests/pedido-post.js"></script>
        <script src="../backend/requests/endereco-get.js"></script>
        <script src="../backend/requests/endereco-post.js"></script>
        <script src="../backend/requests/pedido-get.js"></script>
      
        <script>
           
            <?php
                if(isset($_SESSION['active'])){
                    $userId = $_SESSION['user_id'];
                    echo "var user_id = $userId; ";
                    echo "getUser($userId);";
                    echo "getCarrinho($userId);";
                    echo "populatePedido();";
                    echo "getPedidos();";
                }else{
                    echo "var user_id = 0; ";  
                }
            ?>


        </script>

        <script src="js/show-elements.js"></script>
        <script src="js/hide-elements.js"></script>
</body>

</html>