
function getItemPedido(_id_pedido) {
    var dados = {
        id_pedido: _id_pedido
    };

    var dadosJson = JSON.stringify(dados);

    $.ajax({
        url: '../backend/controllers/getPedidoDetalhe.php',
        method: 'post',
        data: { data: dadosJson },
        dataType: 'json',
        success: function (response) {

            $('.detalhes-pedidos').fadeIn('slow');
            $('.detalhes-pedidos .pedido-info').empty();

            $('.detalhes-pedidos .pedido-info').append('<p class="pedido-id"><i class="bx bx-package"></i>Pedido #' + response[0].id_pedido + '</p>');

            $('.detalhes-pedidos .pedido-info').append('<p class="pedido-cliente"><i class="bx bx-user-circle"></i>' + response[0].username + '</p>');

            $('.detalhes-pedidos .pedido-info').append('<p class="pedido-status"><i class="bx bx-tag"></i>' + response[0].status + '</p>');

            $('.detalhes-pedidos .pedido-info').append('<div class="pedido-tags">'
                + '<p class="pedido-data"><i class="bx bx-calendar-alt"></i> ' + response[0].data + ' ' + response[0].hora + '</p>'
                + '<p class="pedido-pagamento"><i class="bx bx-wallet"></i> ' + response[0].forma_pagamento + '</p>'
                + '<p class="pedido-recebimento"><i class="bx bx-shopping-bag"></i>' + response[0].forma_recebimento + '</p>'
                + '</div>')

            $('.detalhes-pedidos .pedido-info').append('<div class="endereco-section"></div>');


            if (response[0].cod_endereco != 0) {

                var dadosEndereco = {
                    id: response[0].cod_endereco,
                    coluna: 'id_endereco',
                    tabela: 'endereco'
                }

                var dadosEnderecoJson = JSON.stringify(dadosEndereco);

                $.ajax({
                    url: '../backend/controllers/getOne.php',
                    method: 'post',
                    data: { data: dadosEnderecoJson },
                    dataType: 'json',
                    success: function (response) {

                        var logra = response.logradouro;
                        var numero = response.numero;
                        var bairro = response.bairro;
                        var cidade = response.cidade;
                        var estado = response.estado;
                        var cep = response.cep;

                        $('.endereco-section').append('<p><i class="bx bx-home-alt-2"></i> Endereço de Entrega</p>'
                            + '<p class="pedido-endereco">' + logra + ', nº ' + numero + ', ' + bairro + ', ' + cidade + '-' + estado + ', ' + cep + ''
                            + '</p>');

                    }
                });
            } //fim exibição endereco


            $('.detalhes-pedidos .pedido-info').append('<div class="pedido-items"><p class="pedido-item-title"><i class="bx bxs-basket"></i> Itens do Pedido</p></div>');


            var dadosItem = {
                id_pedido: response[0].id_pedido
            }

          

            var dadosItemJson = JSON.stringify(dadosItem);

            $.ajax({
                url: '../backend/controllers/getPedidoItem.php',
                method: 'post',
                data: { id_pedido: dadosItem.id_pedido },
                dataType: 'json',
                success: function (response) {
                    console.log(response);

                    var lenght = response.length;

                    for (var i = 0; i < lenght; i++) {

                        $('.pedido-info .pedido-items').append('<div class="item-card">'
                            + '<p>'+response[0].nome_comercial+'</p>'
                            + '<div class="quantidade-info">'
                            + '<p>'+response[0].quantidade+'x</p>'
                            + '<p>R$ '+response[0].preco+'</p>'
                            + '</div>'
                            + '</div>');

                    }
                }
            });
            //fim exibição items

            $('.detalhes-pedidos .pedido-info').append('<p class="pedido-subtotal"><i class="bx bx-purchase-tag-alt" ></i> Total: R$ '+response[0].subtotal.toFixed(2)+'</p>');

        }
    })
}