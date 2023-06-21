<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vamos Lá, Registro</title>
    <link rel="stylesheet" href="register.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="pluguins/jquery-3.6.4.min.js"></script>
</head>

<body>
    <div class="container">
        <div class="register-content">
            <div class="register-left">
                <div class="text-agroup">
                    <h2>Olá Cliente! Bem Vindo!</h2>
                </div>
                <div class="text-agroup">
                    <p>Encontre os melhores produtos, na palma da sua mão!</p>
                </div>

                <div class="img_register">
                    <img src="pictures/cliente.gif" alt="Gif animado">
                </div>



            </div>
            <div class="register-right">
                <div class="background-circle1"></div>
                <div class="background-circle2"></div>
                <form action="" id="user-form">
                    <img src="pictures/cliente.gif" alt="Gif animado">
                    <p class="title">Criar Conta</p>
                    <div class="input-agroupt">

                        <i class='bx bxs-user-detail'></i>

                        <input type="text" placeholder="Digite seu nome completo" id="nome">
                    </div>

                    <div class="input-agroupt">
                        <i class='bx bxs-user-voice'></i>
                        <input type="text" placeholder="Como deseja ser chamado" id="username">
                    </div>

                    <div class="input-agroupt">
                        <i class='bx bx-envelope'></i>
                        <input type="email" placeholder="Digite seu e-mail" id="email">
                    </div>
                    <span class="message email-message">E-mail já cadastrado</span>
                    <div class="input-agroupt">
                        <i class='bx bx-lock-alt'></i>
                        <input type="password" placeholder="Digite sua senha" id="senha">
                    </div>
                    <span class="message senha-message">Senha deve ter no mínimo 8 caracteres</span>

                    <div class="input-agroupt">
                        <i class='bx bx-lock-alt'></i>
                        <input type="password" placeholder="Confirme sua senha" id="confirma">

                    </div>
                    <span class="message confirma-message">Senhas não coincidem</span>

                    <div class="forget">
                        <a href="#">Esqueceu sua Senha?</a>
                    </div>
                    <input type="submit" value="Registrar-se" id="salvar">

                    <div class="register">
                        <a href="login-user.php">Login</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="../backend/requests/register-validation.js"></script>
    <script src="../backend/requests/user-post.js"></script>
</body>

</html>