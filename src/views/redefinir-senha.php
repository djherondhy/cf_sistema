<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Redefinir Senha</title>
    <link rel="stylesheet" href="redefinir-senha.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="pluguins/jquery-3.6.4.min.js"></script>
</head>

<body>
    <div class="container">
        <div class="login-content">

            <div class="login-left">

                <div class="text-agroup">
                    <h2>Olá Cliente, Seja Bem Vindo</h2>
                </div>
                <div class="text-agroup">
                    <p id="text-modf">Insira seu emai para receber o seu código!</p>
                </div>

                <div class="img_login">
                    <img src="pictures/clientep.gif">
                </div>


            </div>
            <div class="login-right">
                <div class="background-circle1"></div>
                <div class="background-circle2"></div>

                <form action="" id="forms">
                    <img src="pictures/clientep.gif">
                    <p class="title">Redefinir Senha</p>

                    <div class="input-agroupt" id="input-email">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path
                                d="M12 2a5 5 0 1 0 5 5 5 5 0 0 0-5-5zm0 8a3 3 0 1 1 3-3 3 3 0 0 1-3 3zm9 11v-1a7 7 0 0 0-7-7h-4a7 7 0 0 0-7 7v1h2v-1a5 5 0 0 1 5-5h4a5 5 0 0 1 5 5v1z">
                            </path>
                        </svg>
                        <input type="text" placeholder="Digite seu e-mail">
                    </div>

                    <div class="input-agroupt" id="cod-redefinir">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path
                                d="M17 8V7c0-2.757-2.243-5-5-5S7 4.243 7 7v3H6c-1.103 0-2 .897-2 2v8c0 1.103.897 2 2 2h12c1.103 0 2-.897 2-2v-8c0-1.103-.897-2-2-2H9V7c0-1.654 1.346-3 3-3s3 1.346 3 3v1h2zm1 4 .002 8H6v-8h12z">
                            </path>
                        </svg>
                        <input type="text" placeholder="Digite o Código">
                    </div>

                    <div class="input-agroupt" id="senha-nova">
                        <svg id="eyes" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 570 570">
                            <path
                                d="M288 80c-65.2 0-118.8 29.6-159.9 67.7C89.6 183.5 63 226 49.4 256c13.6 30 40.2 72.5 78.6 108.3C169.2 402.4 222.8 432 288 432s118.8-29.6 159.9-67.7C486.4 328.5 513 286 526.6 256c-13.6-30-40.2-72.5-78.6-108.3C406.8 109.6 353.2 80 288 80zM95.4 112.6C142.5 68.8 207.2 32 288 32s145.5 36.8 192.6 80.6c46.8 43.5 78.1 95.4 93 131.1c3.3 7.9 3.3 16.7 0 24.6c-14.9 35.7-46.2 87.7-93 131.1C433.5 443.2 368.8 480 288 480s-145.5-36.8-192.6-80.6C48.6 356 17.3 304 2.5 268.3c-3.3-7.9-3.3-16.7 0-24.6C17.3 208 48.6 156 95.4 112.6zM288 336c44.2 0 80-35.8 80-80s-35.8-80-80-80c-.7 0-1.3 0-2 0c1.3 5.1 2 10.5 2 16c0 35.3-28.7 64-64 64c-5.5 0-10.9-.7-16-2c0 .7 0 1.3 0 2c0 44.2 35.8 80 80 80zm0-208a128 128 0 1 1 0 256 128 128 0 1 1 0-256z" />
                        </svg>
                        <input id="input-senha" type="password" placeholder="Senha Nova">
                    </div>

                    <p id="mensage" >Insira seu email para receber o seu código!</p>

                    <div id="enviar">
                        <input type="submit" value="Enviar Código">
                    </div>
                    <div id="enviar-cod">
                        <input type="submit" value="Confirmar Código">
                    </div>
                    <div id="confirmar-senha-nova">
                        <input type="submit" value="Redefinir Senha">
                    </div>


                    <div class="register">
                        <a href="login-user.php">Voltar</a>
                    </div>


                </form>
            </div>
        </div>
    </div>

    <script src="js/show-elements.js"></script>
    <script src="js/hide-elements.js"></script>
</body>

</html>