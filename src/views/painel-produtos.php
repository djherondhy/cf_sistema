<?php
include '../backend/config/connection.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bem Vindo, Administrador</title>
    <link rel="stylesheet" href="painel-produtos.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="preset.css">
    <link rel="stylesheet" href="sidemenu.css">
    <script src="pluguins/jquery-3.6.4.min.js"></script>
</head>

<body>
    <?php include 'components/confirm.php';?>
    <?php include 'components/filtro-produtos.php'; ?>
    <?php include 'components/produto-view.php'; ?>
    <?php include 'components/secao-form.php'; ?>
    <?php include 'components/cadastro-form.php'; ?>
    <?php include 'components/secao-modal.php' ?>
    <?php #include 'components/fornecedores-modal.php' ?>
    
    <div class="container h-align v-center">
        <?php include 'components/sidemenu.php';?>
        <div class="content v-align">
            <div class="produtos v-align h-center neomorphism">
                <div class="header-btns h-align">
                    <p class="title">Gerenciamento de Estoque</p>
                    <div class="btns-agroup h-align vh-center">
                        <button id="btn-fornecedores"><i class='bx bx-expand-alt'></i> Fornecedores</button>
                        <button id="btn-secoes"> <i class='bx bx-expand-alt'></i> Seções</button>
                    </div>
                </div>
            </div>
            <section class="h-align">
                <div class="es-list v-align neomorphism">
                    <p class="title">Entrada e Saída</p>
                    <div class="header-list h-align h-center">
                        <button>Hoje <i class='bx bx-chevron-down'></i> </button>
                    </div>
                    <div class="es-table v-align">
                       
                        <div class="row h-align">
                            <div class="column h-align product-name">
                                <span class="entrada"> <i class='bx bx-right-arrow-alt'></i> </span>
                                L-Triptofano 250Mg 120 Cápsula
                            </div>
                            <div class="column"> +5 </div>
                            <div class="column"> 12/05 14:45 </div>
                        </div>
                        <div class="row h-align">
                            <div class="column h-align product-name">
                                <span class="saida"> <i class='bx bx-left-arrow-alt'></i> </span>
                                Fitocherry® (Melatonina Vegetal Líquida) 40mg/mL 20mL
                            </div>
                            <div class="column"> -16 </div>
                            <div class="column"> 12/05 14:45 </div>
                        </div>
                        <div class="row h-align">
                            <div class="column h-align product-name">
                                <span class="entrada"> <i class='bx bx-left-arrow-alt'></i> </span>
                                Maca Peruana 500Mg 60 Cápsulas
                            </div>
                            <div class="column"> -12 </div>
                            <div class="column"> 12/05 14:45 </div>
                        </div>



                        <div class="row h-align">
                            <div class="column h-align product-name">
                                <span class="entrada"> <i class='bx bx-left-arrow-alt'></i> </span>
                                Maca Peruana 500Mg 60 Cápsulas
                            </div>
                            <div class="column"> -12 </div>
                            <div class="column"> 12/05 14:45 </div>
                        </div>


                    </div>
                </div>

                <div class="produtos-list v-align neomorphism">
                    <p class="title">Produtos</p>
                    <div class="header-list h-align v-center">
                        <button id="btn-filtroProdutos">Todos <i class='bx bx-chevron-down'></i> 
                        </button>
                        <button class="h-align vh-center" id="btn-novoproduto"><i class='bx bx-list-plus'></i>Novo
                            Produto</button>
                    </div>
                    <div class="produtos-table v-align">
                        <table id="produtos-table">
                            <tr class="head">
                                <td>Código</td>
                                <td>Produto</td>
                                <td>Seção</td>
                                <td>Categoria</td>
                                <td>Estoque</td>
                                <td>Ações</td>
                            </tr>
                        </table>     

                    </div>
                </div>
            </section>

        </div>


    </div>
    </div>

    <script src="js/hide-elements.js"></script>
    <script src="js/show-elements.js"></script>
    <script src="js/image-picker.js"></script>
    <script src="../backend/requests/getOne.js"></script>
    <script src="../backend/requests/produto-post.js"></script>
    <script src="../backend/requests/produto-delete.js"></script>
    <script src="../backend/requests/produto-get.js"></script>
    <script src="../backend/requests/produto-filter.js"></script>
    <script src="../backend/requests/secao-post.js"></script>
    <script src="../backend/requests/secao-get.js"></script>
    <script src="../backend/requests/secao-delete.js"></script>
    <script src="../backend/requests/populate.js"></script>
    <script>
    </script>
</body>
</html>