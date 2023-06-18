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
            console.log(response);

            $('.product-list .product-card').remove();
            var length = response.length;

            for (var i = 0; i < length; i++) {
                $('.product-list').append('<div class="product-card">'
                    + '<div class="action-button">'
                    + '<button>'
                    + '<i class="bx bx-heart"></i>'
                    + '</button>'
                    + '<button onclick="addCarrinho('+response[i].id_medicamento+')">'
                    + '<i class="bx bx-cart-alt"></i>'
                    + '</button>'
                    + '</div>'
                    + '<div class="product-img">'
                    + '<img src="../backend/upload/'+response[i].imagem+'" alt="">'
                    + '</div>'
                    + '<div class="card-text"  onclick="verDetalhes('+response[i].id_medicamento+')">'
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