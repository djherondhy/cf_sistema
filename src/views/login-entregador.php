<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vamos Lá, Login</title>
    <link rel="stylesheet" href="css/login.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="pluguins/jquery-3.6.4.min.js"></script>
</head>
<body>
<?php

if (isset($_GET['user'])) {
    include 'components/popup.php';
}

if (isset($_GET['invalid'])) {
    include 'components/popup.php';
}
?>

    <div class="container">
        <div class="login-content">
            <div class="login-left">

                <div class="text-agroup">
                    <h2>Olá entregador, Seja Bem Vindo!</h2>
                </div>    

                <div class="img_login">
                    <img src="pictures/entrega.gif" alt="Gif Animado">
                </div>

                <div class="text-agroup">
                <p>Somos a melhor parceria da sua vida! Não somos uma empresa, somos uma familia!</p>
                </div>
              
            </div>
            <div class="login-right">
            <div class="background-circle1"></div>             
            <div class="background-circle2"></div>       
                <form action="../backend/controllers/entregador-login.php" method="POST">
                    <img src="pictures/entrega.gif" alt="Gif Animado">
                    <p class="title">Login</p>
                    <div class="input-agroupt">
                    <i class='bx bx-user'></i>
                        <input type="text" placeholder="Digite seu e-mail" name="email" required>
                    </div>
                    <div class="input-agroupt">
                    <i class='bx bx-lock-alt' ></i>
                    <input type="password" placeholder="Digite sua senha" name="senha" required>
                    </div>
                
                    <input type="submit" value="Entrar">
                </form>
            </div>
        </div>
    </div>
</body>
</html>