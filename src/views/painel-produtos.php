<?php include 'components/session_verify.php'?>
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
    <link rel="stylesheet" href="css/painel-produtos.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="css/preset.css">
    <script src="pluguins/jquery-3.6.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
   
</head>

<body>
    <?php include 'components/confirm.php';?>
    <?php include 'components/filtro-produtos.php'; ?>
    <?php include 'components/produto-view.php'; ?>
    <?php include 'components/secao-form.php'; ?>
    <?php include 'components/cadastro-form.php'; ?>
    <?php include 'components/secao-modal.php' ?>
    <?php include 'components/fornecedores-modal.php' ?>
    <?php include 'components/fornecedores-form.php' ?>
    <?php include 'components/edit-produto.php' ?>
    <?php include 'components/edit-fornecedores.php' ?>
    <?php include 'components/edit-secao.php' ?>

    <div class="container h-align v-center">
        <?php include 'components/sidemenu.php';?>
        <div class="content v-align">
            <div class="produtos v-align h-center neomorphism">
                <div class="header-btns h-align">
                    <p class="title">Gerenciamento de Estoque</p>
                    <div class="btns-agroup h-align vh-center">
                        <button id="btn-fornecedores"><i class='bx bxs-truck'></i> Fornecedores</button>
                        <button id="btn-secoes"> <i class='bx bxs-book-content'></i> Seções</button>
                    </div>
                </div>
            </div>
            <section class="h-align">
                <div class="produtos-list v-align">
                    <p class="title">Produtos</p>
                  
                    <div class="header-list h-align v-center">
                      
                        <div class="acoes h-align">
                        <div class="search-input">
                            <input type="text" placeholder="Buscar" id="produto-busca">
                        </div>
                            <button id="btn-filtroProdutos">Todos<i class='bx bx-filter-alt' ></i>
                        </button>
                        <button class="h-align vh-center" id="btn-novoproduto"><i class='bx bxs-layer-plus'></i>Novo
                            Produto</button>
                        </div>
                     </div>
                        
               
                    <div class="produtos-table v-align">
                    <div class="produto-card">
                            <div class="text-agroup">
                                <p class="produto-id"> <i class='bx bxs-basket'></i>Nenhum Produto Rehistrado</p>
                            </div>
                    </div>

                        <div class="produto-card">
                            <div class="text-agroup">
                                <p class="produto-id"> <i class='bx bxs-basket'></i> Produto #75</p>
                                <p class="produto-nome">Omeprazol 100Mg</p>
                                <div class="tags">
                                    <p class="tag-card">
                                    <i class="bx bxs-capsule"></i>
                                        Genérico
                                    </p>
                                    <p class="tag-card">
                                        x12
                                    </p>
                                    <p class="tag-card">
                                        R$ 75.08
                                    </p>
                                    <p class="tag-card">
                                        AB-123
                                    </p>
                                    <div class="onCatalogo">
                                        <p>Disponível no Catálogo</p>
                                        <div class="checkbox" id="checkbox1" onclick="ativarCatalogo(1)">
                                            <span id="slider1" class="">.</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="produto-card-buttons">
                            <button class="view-produto" onclick="getMedicamento('+response[i].id_medicamento+')">
                            <i class="bx bx-chevron-left"></i></button>
                            <button><i class="bx bxs-edit"></i></button>
                            <button class="delete" onclick="deleteProdutos('+response[i].id_medicamento+')"><i class="bx bxs-trash-alt"></i></button>
                            </div>
                        </div>
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
    <script src="../backend/requests/onCatalogo.js"></script>
    <script src="../backend/requests/fornecedores-post.js"></script>
    <script src="../backend/requests/fornecedores-get.js"></script>
    <script src="../backend/requests/fornecedores-delete.js"></script>
    <script src="../backend/requests/produto-update.js"></script>
    <script src="../backend/requests/fornecedores-update.js"></script>
    <script src="../backend/requests/secao-update.js"></script>

    <script>  

    $('#menu-produtos').addClass('menu-active');
    </script>
</body>
</html>