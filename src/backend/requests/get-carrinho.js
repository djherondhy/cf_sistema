function getCarrinho(user_id) {
    var dados = {
        id: user_id
    }

    var dadosJson = JSON.stringify(dados);

    $.ajax({
        url: '../backend/controllers/getCarrinho.php',
        method: 'post',
        data: { data: dadosJson },
        dataType: 'json',
        success: function (response) {
           $('.carrinho-list .carrinho-card').remove();

            var length = response.length;

            for (var i = 0; i < length; i++) {
                $('.carrinho-list').append('<div class="carrinho-card h-align v-center">'
                    + '<div class="info h-align">'
                    + '<div class="image">'
                    + '<img src="../backend/upload/'+response[i].imagem+'" alt="">'
                    + '</div>'
                    + '<div class="informacoes">'
                    + '<p class="produto-nome">'+response[i].nome_comercial+'</p>'
                    + '<div class="tags">'
                    + '<p class="tag">x'+response[i].carrinho_quantidade+'</p>'
                    + '<p class="tag">R$ '+response[i].preco+'</p>'
                    + '</div>'
                    + '</div>'
                    + '</div>'
                    + '<div class="action">'
                    + '<button onclick="updateCarrinho()"> + </button>'
                    + '<button onclick="updateCarrinho()"> - </button>'
                    + '</div>'
                    + '</div>');
            }


        }
    });

}

