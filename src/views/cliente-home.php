<?php
session_name('user');
session_start();

if(!isset($_SESSION['active'])){
    unset($_SESSION['active']);
    unset($_SESSION['user_id']);
    session_destroy();
}
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
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <script src="pluguins/jquery-3.6.4.min.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
</head>

<body>

    <?php
    include "components/detalhes.php";
    include "components/sidebar.php";
    include "components/pedido-sidebar.php";
    include "components/carrinho.php";
    include "components/popup.php";
    include "components/form-pedido.php";
    include "components/form-endereco.php";
    include "components/confirm.php";
    include "components/cancelar.php";
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
                        <div class="notificacao-list">
                            <div class="notificacao-item">
                                <div class="notificacao-icon">
                                    <i class='bx bx-cycling'></i>
                                </div>
                                <div class="notificacao-text">
                                    <p>Seu pedido número #10056 saiu para entrega.</p>
                                    <p>10/05/2023 14:30 </p>
                                </div>

                            </div>
                        </div>
                        <button id='btn-limpar'> Limpar Notificações</button>
                    </div>
                </div>
                <a href="../backend/controllers/logout-user.php" class="logout"><i class='bx bx-log-out'></i></a>
            <?php } else { ?>
                <a href="login-user.php" class="acessar"><i class='bx bx-log-in'></i> Acessar</a>
            <?php } ?>

        </div>


        <div class="section">
            <div class="search-input">
                <input type="text" placeholder="Pesquisar por medicamento" id='input-busca'>
                <div class="search-button">
                    <i class='bx bx-search' style="color: #ffffff;"></i>
                </div>
            </div>
        </div>
        <div class="section">
            <h2 class="section-title">Categorias</h2>
            <div class="categoria-list">
                <div class="categoria-card">
                    <label for="filtro-todos">Todos</label>
                    <input type="radio" name="filtro" id="filtro-todos" value="" checked>
                </div>
                <div class="categoria-card">
                    <label for="filtro-analgesicos">Analgésicos</label>
                    <input type="radio" name="filtro" id="filtro-analgesicos"  value='Analgésicos'>
                </div>
                <div class="categoria-card">
                    <label for="filtro-antiinflamatorios">Anti-Inflamatórios</label>
                    <input type="radio" name="filtro" id="filtro-antiinflamatorios" value='Anti-Inflamatórios'>
                </div>
                <div class="categoria-card">
                    <label for="filtro-antibioticos">Antibióticos</label>
                    <input type="radio" name="filtro" id="filtro-antibioticos" value='Antibióticos'>
                </div>
                <div class="categoria-card">
                    <label for="filtro-antialergicos">Antialérgicos</label>
                    <input type="radio" name="filtro" id="filtro-antialergicos" value='Antialérgicos'>
                </div>
                <div class="categoria-card">
                    <label for="filtro-anticoncep">Anti-concepcionais</label>
                    <input type="radio" name="filtro" id="filtro-anticoncep" value='Anti-concepcionais'>
                </div>
                <div class="categoria-card">
                    <label for="filtro-antihiper">Anti-hipertensivos</label>
                    <input type="radio" name="filtro" id="filtro-antihiper" value='Anti-hipertensivos'>
                </div>
                <div class="categoria-card">
                    <label for="filtro-diureticos">Diuréticos</label>
                    <input type="radio" name="filtro" id="filtro-diureticos" value='Diurético'>
                </div>
                <div class="categoria-card">
                    <label for="filtro-outros">Outros</label>
                    <input type="radio" name="filtro" id="filtro-outros" value='Outros'>
                </div>
            </div>
        </div>
        <div class="section">
            <h2 class="section-title">Produtos</h2>
            <div class="carousel-produtos">
                <div class="left-btn">
                <i class='bx bx-chevron-left'></i>
                     </div>

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
                        <i class='bx bx-chevron-right'></i>
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
        <script src="../backend/requests/get-catalogo.js"></script>
        <script src="../backend/requests/get-notificao.js"></script>
        <script>

            <?php
            if (isset($_SESSION['active'])) {
                $userId = $_SESSION['user_id'];
                echo "var user_id = $userId; ";
                echo "getUser($userId);";
                echo "getCarrinho($userId);";
                echo "populatePedido();";
                echo "getPedidos();";
                echo "getNotificacoes($userId);";
            } else {
                echo "var user_id = 0; ";
            }
            ?>

            $('#close-detalhe').click(function () {
                $('detalhes-container').fadeOut('slow');
            })

        </script>

        <script src="js/show-elements.js"></script>
        <script src="js/hide-elements.js"></script>
        <script src="../backend/requests/pedido-update.js"></script>
</body>

</html>