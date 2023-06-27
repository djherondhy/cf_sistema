
$('input[name="filtro"]').change(function(){
    filtroCatalogo();
})

$('#input-busca').keyup('input',function(){
    filtroCatalogo();
})


function filtroCatalogo(){
    var dados = {
        busca: $('#input-busca').val(),
        categoria: $('input[name="filtro"]:checked').val()
    }

    var dadosJson = JSON.stringify(dados);

    $.ajax({
        url: '../backend/controllers/filterCatalogo.php',
        method: 'post',
        data: {data: dadosJson},
        dataType: 'json',
        success: function(response){
            $('.product-list .product-card').remove();
            var length = response.length;
            $('.product-list p').remove();
            
            if(length == 0){
                $('.product-list').append('<p>Nenhum Produto Encontrado</p>');
                $('.left-btn').hide();
                $('.right-btn').hide();
            }

            if(length < 4){
                $('.left-btn').hide();
                $('.right-btn').hide();
            }else{
                $('.left-btn').show();
                $('.right-btn').show();
            }
          

            for (var i = 0; i < length; i++) {
                $('.product-list').append('<div class="product-card" >'
                    + '<div class="action-button">'
                    + '<button onclick="addCarrinho('+response[i].id_medicamento+')">'
                    + '<i class="bx bx-cart-alt"></i>'
                    + '</button>'
                    + '</div>'
                    + '<div class="product-img">'
                    + '<img src="../backend/upload/'+response[i].imagem+'" alt="" onclick="getDetalhes('+response[i].id_medicamento+')">'
                    + '</div>'
                    + '<div class="card-text" onclick="getDetalhes('+response[i].id_medicamento+')">'
                    + '<p class="nome">'+response[i].nome_comercial+'</p>'
                    + '<p class="categoria">'+response[i].categoria+'</p>'
                    + '<p class="preco">R$ '+response[i].preco+'</p>'
                    + '</div>'
                    + '</div>');
            }
        }
    })
}


function getDetalhes(_id){
    var dados = {
        tabela: 'medicamentos',
        coluna: 'id_medicamento',
        id: _id
    }

    var dadosJson = JSON.stringify(dados);

    $.ajax({
        url: '../backend/controllers/getOne.php',
        method: 'post',
        data: {data: dadosJson},
        dataType: 'json',
        success: function(response){
            $('.detalhes-container').fadeIn('slow');

            $('#detalhes-nome').empty();
            $('#detalhes-nome').append(response.nome_comercial);

            $('#detalhe-descricao').empty();
            $('#detalhe-descricao').append(response.descricao);

            $('#detalhe_categoria').empty();
            $('#detalhe_categoria').append(response.categoria);

            $('#detalhes-imagem').prop('src','../backend/upload/'+response.imagem);

            $('#detalhe_preco').empty();
            $('#detalhe_preco').append('R$ '+response.preco);
            $('#ad-carrinho').click(function(){
                addCarrinho(response.id_medicamento);
            })
        }
    })
}

function getCatalogo() {
    var dados = {
        tabela: 'medicamentos',
        coluna: 'onCatalogo'
    }

    var dadosJson = JSON.stringify(dados);

    $.ajax({
        url: '../backend/controllers/catalogo.php',
        method: 'post',
        data: { data: dadosJson },
        dataType: 'json',
        success: function (response) {
           

            $('.product-list .product-card').remove();
            var length = response.length;

            for (var i = 0; i < length; i++) {
                $('.product-list').append('<div class="product-card" >'
                    + '<div class="action-button">'
                    + '<button onclick="addCarrinho('+response[i].id_medicamento+')">'
                    + '<i class="bx bx-cart-alt"></i>'
                    + '</button>'
                    + '</div>'
                    + '<div class="product-img">'
                    + '<img src="../backend/upload/'+response[i].imagem+'" alt="" onclick="getDetalhes('+response[i].id_medicamento+')">'
                    + '</div>'
                    + '<div class="card-text" onclick="getDetalhes('+response[i].id_medicamento+')">'
                    + '<p class="nome">'+response[i].nome_comercial+'</p>'
                    + '<p class="categoria">'+response[i].categoria+'</p>'
                    + '<p class="preco">R$ '+response[i].preco+'</p>'
                    + '</div>'
                    + '</div>');
            }
        }
    });

}

getCatalogo()