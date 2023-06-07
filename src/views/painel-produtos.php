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
    <?php include 'components/confirm.php'?>
    <?php include 'components/filtro-produtos.php' ?>
    <?php include 'components/produto-view.php' ?>
    
    <div class="cadastro-container v-align vh-center">
        <div class="form-produto v-align">
            <button class="close-btn" id="close-prodcad"><i class='bx bx-x'></i></button>
            <p class="title">Novo Produto</p>
            <form action="" class="h-align formulario" id="form-produto">
                <div class="img-input v-align vh-center">
                    <img src="" alt="" srcset="" id="previewProduto">
                    <label for="imagem">Upload Imagem</label>
                    <input type="file" name="imagem" id="imagem">
                </div>
                
                <div class="inputs v-align">
                    <div class="input-row h-align">
                        <div class="agroup-input v-align">
                            <label for="p-nome-comercial">Nome Comercial</label>
                            <input type="text" id="p-nome-comercial" name="nome_comercial"
                                placeholder="Ex.. Omeprazol 100Mg">
                        </div>
                        <div class="agroup-input v-align">
                            <label for="p-categoria">Categoria</label>
                            <select name="categoria" id="p-categoria">
                                <option value="Genérico">Genérico</option>
                                <option value="Alopáticos">Alopáticos</option>
                                <option value="Similar">Similar</option>
                                <option value="Fitoterápicos">Fitoterápicos</option>
                                <option value="Homeopáticos">Homeopáticos</option>
                                <option value="Controlados">Controlados</option>
                                <option value="Biológicos">Biológicos</option>
                                <option value="Fracionados">Fracionados</option>
                                <option value="Outros">Outros</option>
                            </select>
                        </div>
                        <div class="agroup-input v-align">
                            <label for="p-secao">Seção</label>
                            <select name="secao" id="p-secao">
                                <option value="Genérico">AB 123</option>
                                <option value="Genérico">AB 123</option>
                                <option value="Genérico">AB 123</option>
                            </select>
                        </div>
                    </div>



                    <div class="input-row h-align">
                        <div class="agroup-input v-align">
                            <label for="p-descricao">Descrição</label>
                            <textarea name="descricao" id="p-descricao" placeholder="Descreva o produto"></textarea>
                        </div>
                    </div>

                    <div class="input-row h-align">
                        <div class="agroup-input v-align">
                            <label for="p-preco">Preço R$</label>
                            <input type="text" id="p-preco" name="preco" placeholder="0.00">
                        </div>
                        <div class="agroup-input v-align">
                            <label for="p-quantidade">Quantidade</label>
                            <input type="number" id="p-quantidade" name="quantidade" placeholder="0">
                        </div>
                        <div class="agroup-input v-align">
                            <label for="p-validade">Validade</label>
                            <input type="date" id="p-validade" name="validade">
                        </div>
                    </div>
                    <div class="action-row h-align">
                        <input type="submit" value="Salvar Produto">
                    </div>

                </div>
            </form>
        </div>
    </div>
    <div class="secoes v-align">
        <button class="close-btn" id="close-secoes"><i class='bx bx-x'></i></button>
        <p class="title">Seções</p>
        <div class="action h-align">
            <div class="busca h-align"><input type="text" placeholder="Procura por código da seção"> <button> <i
                        class='bx bx-search'></i></button></div>
            <button class="add neomorphism">+ Adicionar</button>
        </div>
        <div class="secao-table">
            <table>
                <tr>
                    <td>Código</td>
                    <td>Localização</td>
                    <td>Ações</td>
                </tr>
                <tr>
                    <td>AB-78</td>
                    <td>Prateleira 7, coluna 8</td>
                    <td>
                        <button><i class='bx bxs-edit'></i></button>
                        <button class="delete"><i class='bx bxs-trash-alt'></i></button>

                    </td>
                </tr>
                <tr>
                    <td>AB-78</td>
                    <td>Prateleira 7, coluna 8</td>
                    <td>
                        <button><i class='bx bxs-edit'></i></button>
                        <button class="delete"><i class='bx bxs-trash-alt'></i></button>

                    </td>
                </tr>
            </table>
        </div>
    </div>
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
    <script>
    </script>
</body>
</html>