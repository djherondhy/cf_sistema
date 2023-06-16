<?php
session_start();
?>
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

    <?php include "components/sidebar.php"; ?>
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
                    </div>
                </div>
                <a href="login-user.php" class="logout"><i class='bx bx-log-out'></i></a>
            <?php } else { ?>
                <a href="login-user.php" class="acessar"><i class='bx bx-log-in'></i> Acessar</a>
            <?php } ?>

        </div>

        <div class="container-geral-perfil">

            <div class="container-perfil">
            <div class="user-perfil">
            </div>
                <div class="perfil-info">
                    <i class='bx bxs-user-circle'></i>
                    <p class="nome_completo"></p>
                </div>
                <div class="perfil-info">
                    <i class='bx bxs-ghost' ></i>
                    <p class="username"></p>
                </div>
                <div class="perfil-info">
                    <i class='bx bxl-gmail'></i>
                    <p class="email"></p>
                </div>
            </div>

            <div class="bottons">
                <div class="edit-perfil">
                    <button id="btn" href="">
                        <i class='bx bxs-lock-open-alt bx-tada' style='color:#ffffff'></i>
                        <p>Alterar Senha</p>
                    </button>
                    <button id="btn" href="">
                        <i class='bx bx-history bx-spin' style='color:#ffffff'></i>
                        <p>Excluir Histórico</p>
                    </button>
                    <button id="btn" href="">
                        <i class='bx bx-block bx-spin' style='color:#ffffff'></i>
                        <p>Excluir Conta</p>
                    </button>
                </div>
            </div>
        </div>
        <h1 class="ender">Seu Endereços</h1>
        <div class="endereco-user">
            <div class="add-endereco">
                    <i class='bx bxs-clinic bx-tada' style="color:#8856f6; font-size: 40px"></i>
                    <p>Adicionar endereço</p>
            </div>
            <div class="endereco-card">
                <p>Neymar da Silva Santos Júnior</p>
                <p>Rua Nossa Senhora do Roário 3164</p>
                <p>Itacoatiara, AM 69104570</p>
                <p>Brasil</p>
                <p>Telefone:97981405568</p>
                <div class="btn">
                    <button>Alterar</button>
                    <button>Excluir</button>
                </div>
            </div>
        
        </div>

        <script src="js/show-elements.js"></script>
        <script src="js/hide-elements.js"></script>
        <script src="../backend/requests/get-catalogo.js"></script>
        <script src="../backend/requests/ver-detalhes.js"></script>
        <script src="../backend/requests/get-userData.js"></script>
        <script>
            <?php
            if (isset($_SESSION['active'])) {
                $userId = $_SESSION['user_id'];
                echo "getUser($userId)";
            }
            ?>
        </script>
</body>

</html>