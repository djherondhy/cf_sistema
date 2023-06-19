

$('input[name="filter-status"]').change(function(){
   getPedidos();
});

$('#pagamento-select').change(function(){
    getPedidos();
 });

 $('#recebimento-select').change(function(){
    getPedidos();
 });

function getPedidos() {
    var dados = {
        status: $('input[name="filter-status"]:checked').val(),
        forma_recebimento: $('#recebimento-select').val(),
        forma_pagamento: $('#pagamento-select').val(),
        busca: ''
    }
    var dadosJson = JSON.stringify(dados);

    $.ajax({
        url: '../backend/controllers/getPedidoAdm.php',
        method: 'post',
        data: { data: dadosJson },
        dataType: 'json',
        success: function (response) {
            
            $('.pedido-list .pedido-card').remove();
           
            var lenght = response.length;


            if(lenght == 0){
                $('.pedido-list').append('<div class="pedido-card"> Nenhum pedido encontrado!</div>');
            }
            for (var i = 0; i < lenght; i++) {
                $('.pedido-list').append('<div class="pedido-card" id="pedido-card' + response[i].id_pedido + '">'
                    + '<div class="pedido-info">'
                    + '<p class="pedido-id"><i class="bx bx-package"></i>Pedido #' + response[i].id_pedido + '</p>'
                    + '<p class="pedido-cliente"><i class="bx bx-user-circle"></i>' + response[i].username + '</p>'
                    + '<p class="pedido-status"><i class="bx bx-tag"></i> ' + response[i].status + '</p>'
                    + '<div class="pedido-tags">'
                    + '<p class="pedido-data"><i class="bx bx-calendar-alt" ></i> ' + response[i].data + ' ' + response[i].hora + '</p>'
                    + '<p class="pedido-total"><i class="bx bx-purchase-tag-alt"></i> R$ ' + response[i].subtotal + '</p>'
                    + '<p class="pedido-pagamento"><i class="bx bx-wallet"></i> ' + response[i].forma_pagamento + '</p>'
                    + '<p class="pedido-recebimento"><i class="bx bx-shopping-bag"></i>' + response[i].forma_recebimento + '</p>'
                    + '</div>'
                    + '</div>'
                    + '<div class="pedido-action">'
                    + '<button><i class="bx bx-chevron-left"></i>Ver Detalhes </button>'
                    + '</div>'
                    + '</div>');

                if (response[i].status == 'Esperando Confirmação') {
                    var status = 'Confirmado';
                    
                    
                    $('#pedido-card' + response[i].id_pedido + ' .pedido-action').append(
                        '<button onclick="updateStatus('+response[i].id_pedido+','+response[i].id_cliente+',1)">'
                        + '<i class="bx bx-send"></i> Confirmar </button>'
                        + '<button><i class="bx bx-x"></i> Cancelar </button>');
                }

                if (response[i].status == 'Confirmado' && response[i].forma_recebimento == 'Entrega') {
                    $('#pedido-card' + response[i].id_pedido + ' .pedido-action').append(
                        '<button onclick="updateStatus('+response[i].id_pedido+','+response[i].id_cliente+',2)">'
                        + '<i class="bx bxs-truck" ></i>Colocar Em Entrega </button>');
                }

                if (response[i].status == 'Confirmado' && response[i].forma_recebimento == 'Retirada') {
                    $('#pedido-card' + response[i].id_pedido + ' .pedido-action').append('<button onclick="updateStatus('+response[i].id_pedido+','+response[i].id_cliente+',3)">'
                        + '<i class="bx bxs-shopping-bags" ></i>Confirmar Retirada </button>');
                }

            }
        }
    })
}

getPedidos();