<?php include 'components/session_verify.php'?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bem Vindo, Administrador</title>
    <link rel="stylesheet" href="css/painel-recursos.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="css/preset.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <script src="pluguins/jquery-3.6.4.min.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
</head>

<body>
    <?php include 'components/view-colaborador.php' ?>
    <?php include 'components/colaborador-form.php' ?>
    <?php include 'components/colaborador-edit.php' ?>
    <?php include 'components/confirm.php'?>
    <?php include 'components/alterar-acesso.php'?>
    <div class="container h-align v-center">
        <?php
        include 'components/sidemenu.php';
        ?>
        <div class="content v-align">
            <div class="recursos-container neomorphism">
                <p class="title">Recursos Humanos</p>
                <div class="filter">
                    <input type="text" placeholder="Busca">
                    <button class="action-btn" id="add-colaborador">Novo Colaborador</button>
                </div>

                <div class="funcionarios-table">
                    <div class="col-card">
                        <div class="col-dados">
                            <div class="colaborador">
                                <div class="perfil">
                                    <p>D</p>
                                </div>
                                <div class="name-info-text">
                                    <p class="col-name">Djhérondhy Felipe</p>
                                    <p class="col-tipo">Administrador</p>
                                </div>
                            </div>

                            <div class="situacao">
                                <p>Situação: <span>Ativo</span></p>
                            </div>
                            <div class="acesso">
                                <p>Acesso: <span>Permitido</span></p>
                            </div>
                        </div>
                        <div class="col-action">
                            <div class="actions">
                                <button class="view-produto" onclick="">
                                    <i class="bx bx-chevron-left"></i></button>
                                <button><i class="bx bxs-edit"></i></button>
                                <button class="delete" onclick=""><i
                                        class="bx bxs-trash-alt"></i></button>
                            </div>
                            <div class="select-agroup">
                                <label for="">Alterar Acesso: </label>
                                <select name="" id="">
                                    <option value="">Permitir</option>
                                    <option value="">Negar</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
    </div>

    <script src="../backend/requests/colaborador-post.js"></script>
    <script src="../backend/requests/colaborador-get.js"></script>
    <script src="../backend/requests/colaborador-delete.js"></script>
    <script src="../backend/requests/colaborador-update.js"></script>
    <script>
        $('.colaborador-container').hide();
        $('#add-colaborador').click(function(){
            $('.colaborador-container').fadeIn('slow');
        })

        $('#close-colCad').click(function(){
            $('.colaborador-container').fadeOut('slow');
        })

        $('#menu-recursos').addClass('menu-active');

    </script>
</body>

</html>