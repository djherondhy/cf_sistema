function updateCarrinho(_quantidade, _acao, _produto_id) {
    if (_quantidade == 1 && _acao == 0) {

        var dados = {
            id_produto: _produto_id,
            id_cliente: user_id
        };

        var dadosJson = JSON.stringify(dados);

        $.ajax({
            url: '../backend/controllers/deleteCarrinho.php',
            method: 'post',
            data: { data: dadosJson },
            dataType: 'json',
            success: function (response) {

                getCarrinho(user_id);
            }
        })

    } else {

        if (_acao) {//soma

            var dados = {
                id_produto: _produto_id,
                id_cliente: user_id,
                quantidade: _quantidade + 1
            };

            var dadosJson = JSON.stringify(dados);

            $.ajax({
                url: '../backend/controllers/updateCarrinho.php',
                method: 'post',
                data: { data: dadosJson },
                dataType: 'json',
                success: function (response) {

                    getCarrinho(user_id);
                }
            });


        } else {//subtracao
            var dados = {
                id_produto: _produto_id,
                id_cliente: user_id,
                quantidade: _quantidade - 1
            };

            var dadosJson = JSON.stringify(dados);

            $.ajax({
                url: '../backend/controllers/updateCarrinho.php',
                method: 'post',
                data: { data: dadosJson },
                dataType: 'json',
                success: function (response) {

                    getCarrinho(user_id);
                }
            });
        }

    }
}


var itensPedido = [];

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
            $('.pedido-itens .item-agroup').remove();
            $('#carrinho-subtotal').empty();
            $('#pedido-subtotal').empty();
            var length = response.length;

            if (length == 0) {
                $('.carrinho-list').append('<div class="carrinho-card h-align v-center">'
                    + '<p>Carrinho Vazio, Adicione items</p>'
                    + '</div>');
                $('#finalizar-pedido').css('display', ' none');
            } else {
                var subtotal = 0;
                itensPedido = [];
                for (var i = 0; i < length; i++) {
                    subtotal = subtotal + (response[i].preco * response[i].carrinho_quantidade);
                   
                    itensPedido.push([response[i].id_produto, response[i].carrinho_quantidade, response[i].preco]);


                    console.log(subtotal);
                    $('.pedido-itens').append('<div class="item-agroup">'
                        + '<p class="item">' + response[i].nome_comercial + '</p>'
                        + '<div class="tags">'
                        + '<p class="tag">' + response[i].carrinho_quantidade + 'x</p>'
                        + '<p class="tag">R$ ' + response[i].preco + '</p>'
                        + '</div>'
                        + '<button class="item-delete"><i class="bx bx-trash"></i></button>'
                        + '</div>');

                    $('.carrinho-list').append('<div class="carrinho-card h-align v-center">'
                        + '<div class="info h-align">'
                        + '<div class="image">'
                        + '<img src="../backend/upload/' + response[i].imagem + '" alt="">'
                        + '</div>'
                        + '<div class="informacoes">'
                        + '<p class="produto-nome">' + response[i].nome_comercial + '</p>'
                        + '<div class="tags">'
                        + '<p class="tag">x' + response[i].carrinho_quantidade + '</p>'
                        + '<p class="tag">R$ ' + response[i].preco + '</p>'
                        + '</div>'
                        + '</div>'
                        + '</div>'
                        + '<div class="action">'
                        + '<button onclick="updateCarrinho(' + response[i].carrinho_quantidade + ',1,' + response[i].id_produto + ')"> + </button>'
                        + '<button onclick="updateCarrinho(' + response[i].carrinho_quantidade + ',0,' + response[i].id_produto + ')"> - </button>'
                        + '</div>'
                        + '</div>');
                }

                $('#finalizar-pedido').css('display', ' flex');
                $('#carrinho-subtotal').append('Subtotal: R$' +subtotal.toFixed(2));
                $('#pedido-subtotal').append('Subtotal: R$' +subtotal.toFixed(2));
            }
        }
    });

}

