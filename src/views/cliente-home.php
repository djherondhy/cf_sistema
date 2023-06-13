<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width= , initial-scale=1.0">
    <title>A Farmácia ao Seu Alcance</title>
    <link rel="stylesheet" href="cliente-home.css">
    <link rel="stylesheet" href="carrinho.css">
    <link rel="stylesheet" href="pedido-sidebar.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="pluguins/jquery-3.6.4.min.js"></script>
    <link rel="stylesheet" href="preset.css">
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
    <div class="container">
        <div class="topbar">

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
            <div class="user-perfil">
                <img src="pictures/neymar.jpg" alt="" srcset="">
            </div>
        </div>


        <div class="section">
            <div class="search-input">
                <input type="text" placeholder="Pesquisar por medicamento">
                <div class="search-button">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path
                            d="M19.023 16.977a35.13 35.13 0 0 1-1.367-1.384c-.372-.378-.596-.653-.596-.653l-2.8-1.337A6.962 6.962 0 0 0 16 9c0-3.859-3.14-7-7-7S2 5.141 2 9s3.14 7 7 7c1.763 0 3.37-.66 4.603-1.739l1.337 2.8s.275.224.653.596c.387.363.896.854 1.384 1.367l1.358 1.392.604.646 2.121-2.121-.646-.604c-.379-.372-.885-.866-1.391-1.36zM9 14c-2.757 0-5-2.243-5-5s2.243-5 5-5 5 2.243 5 5-2.243 5-5 5z">
                        </path>
                    </svg>
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
               < 
            </div>
           
            <div class="product-list">
           
                <div class="product-card">
                    <div class="action-button">
                        <button>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <path
                                    d="M12 4.595a5.904 5.904 0 0 0-3.996-1.558 5.942 5.942 0 0 0-4.213 1.758c-2.353 2.363-2.352 6.059.002 8.412l7.332 7.332c.17.299.498.492.875.492a.99.99 0 0 0 .792-.409l7.415-7.415c2.354-2.354 2.354-6.049-.002-8.416a5.938 5.938 0 0 0-4.209-1.754A5.906 5.906 0 0 0 12 4.595zm6.791 1.61c1.563 1.571 1.564 4.025.002 5.588L12 18.586l-6.793-6.793c-1.562-1.563-1.561-4.017-.002-5.584.76-.756 1.754-1.172 2.799-1.172s2.035.416 2.789 1.17l.5.5a.999.999 0 0 0 1.414 0l.5-.5c1.512-1.509 4.074-1.505 5.584-.002z">
                                </path>
                            </svg>
                        </button>

                        <button>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <path
                                    d="M21.822 7.431A1 1 0 0 0 21 7H7.333L6.179 4.23A1.994 1.994 0 0 0 4.333 3H2v2h2.333l4.744 11.385A1 1 0 0 0 10 17h8c.417 0 .79-.259.937-.648l3-8a1 1 0 0 0-.115-.921zM17.307 15h-6.64l-2.5-6h11.39l-2.25 6z">
                                </path>
                                <circle cx="10.5" cy="19.5" r="1.5"></circle>
                                <circle cx="17.5" cy="19.5" r="1.5"></circle>
                            </svg>
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
                <?php
                for ($i = 0; $i < 20; $i++) {


                    ?>
                    <div class="product-card">
                        <div class="action-button">
                            <button>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                    <path
                                        d="M12 4.595a5.904 5.904 0 0 0-3.996-1.558 5.942 5.942 0 0 0-4.213 1.758c-2.353 2.363-2.352 6.059.002 8.412l7.332 7.332c.17.299.498.492.875.492a.99.99 0 0 0 .792-.409l7.415-7.415c2.354-2.354 2.354-6.049-.002-8.416a5.938 5.938 0 0 0-4.209-1.754A5.906 5.906 0 0 0 12 4.595zm6.791 1.61c1.563 1.571 1.564 4.025.002 5.588L12 18.586l-6.793-6.793c-1.562-1.563-1.561-4.017-.002-5.584.76-.756 1.754-1.172 2.799-1.172s2.035.416 2.789 1.17l.5.5a.999.999 0 0 0 1.414 0l.5-.5c1.512-1.509 4.074-1.505 5.584-.002z">
                                    </path>
                                </svg>
                            </button>

                            <button>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                    <path
                                        d="M21.822 7.431A1 1 0 0 0 21 7H7.333L6.179 4.23A1.994 1.994 0 0 0 4.333 3H2v2h2.333l4.744 11.385A1 1 0 0 0 10 17h8c.417 0 .79-.259.937-.648l3-8a1 1 0 0 0-.115-.921zM17.307 15h-6.64l-2.5-6h11.39l-2.25 6z">
                                    </path>
                                    <circle cx="10.5" cy="19.5" r="1.5"></circle>
                                    <circle cx="17.5" cy="19.5" r="1.5"></circle>
                                </svg>
                            </button>
                        </div>
                        <div class="product-img">
                            <img src="pictures/remedios/omeprazol.png" alt="">
                        </div>
                        <div class="card-text">
                            <p class="nome">Omeprazol</p>
                            <p class="categoria">Antibiótico</p>
                            <p class="preco">R$ 15.75</p>
                        </div>
                    </div>

                    <?php
                }
                ?>

            </div>

            <div class="right-btn">
               >
            </div>

            </div>


        </div>
    </div>

    <script src="js/show-elements.js"></script>
    <script src="js/hide-elements.js"></script>
</body>

</html>