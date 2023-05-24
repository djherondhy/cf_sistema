<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width= , initial-scale=1.0">
    <title>A Farmácia ao Seu Alcance</title>
    <link rel="stylesheet" href="profile.css">
    <link rel="stylesheet" href="carrinho.css">
    <link rel="stylesheet" href="pedido-sidebar.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="pluguins/jquery-3.6.4.min.js"></script>
</head>

<body>
    <div class="side-cart">
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

            <div class="notificacao">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                    <circle cx="18" cy="6" r="3"></circle>
                    <path
                        d="M18 19H5V6h8c0-.712.153-1.387.422-2H5c-1.103 0-2 .897-2 2v13c0 1.103.897 2 2 2h13c1.103 0 2-.897 2-2v-8.422A4.962 4.962 0 0 1 18 11v8z">
                    </path>
                </svg>
            </div>
            <div class="user-perfil">
                <img src="pictures/perfil-mockup.jpg" alt="" srcset="">
            </div>
        </div>

        <?php
        include "components/sidebar.php";
        ?>
    </div>

    <script src="js/show-elements.js"></script>
    <script src="js/hide-elements.js"></script>


    <h1>oiii</h1>
</body>

</html>