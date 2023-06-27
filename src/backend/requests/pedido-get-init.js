
function getPedidos() {
    var dados = {
        status: ' ',
        forma_recebimento: ' ',
        forma_pagamento: ' ',
        busca: ' '
    }
    var dadosJson = JSON.stringify(dados);

    $.ajax({
        url: '../backend/controllers/getPedidoInit.php',
        method: 'post',
        data: { data: dadosJson },
        dataType: 'json',
        success: function (response) {
            $('.pedidos-list').empty();

            if(response.length == 0){
                $('.pedidos-list').append('<div class="pedido-card"> Nenhum Pedido Recente</div>');
            }
            for (var i = 0; i < response.length; i++) {
                $('.pedidos-list').append('<div class="pedido-card">'
                    + '<p class="pedido-title infos">Pedido #'+response[i].id_pedido+'</p>'
                    + '<p class="infos"><i class="bx bx-user"></i> '+response[i].username+'</p>'
                    + '<p class="infos"><i class="bx bx-money"></i> R$ 51.75 <span>Crédito</span></p>'
                    + '<p class="infos"><i class="bx bx-shopping-bag"></i>Retirada</p>'
                    + '<div class="pedido-btns">'
                    + '<button onclick="updateStatus('+response[i].id_pedido+','+response[i].id_cliente+',1)">Confirmar</button>'
                    + '<button class="cancel-btn" onclick="cancelarPedido('+response[i].id_pedido+','+response[i].id_cliente+')">Cancelar</button>'
                    + '</div>'
                    + '</div>')
            }

        }
    })
}

getPedidos();