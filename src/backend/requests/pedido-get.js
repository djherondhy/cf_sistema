

$('#pedido-data').change(function(){         
    var filter = $('#pedido-data').val().toString();
    var status = $('input[name="filter-status"]:checked').val();
    
    getPedidosFilter(filter,status);
    
});

$('input[name="filter-status"]').change(function(){
    var filter = $('#pedido-data').val().toString();
    var status = $('input[name="filter-status"]:checked').val();
    
    getPedidosFilter(filter,status);
})


function getPedidosFilter(_filtro, _status){
    var dados = {
        id_cliente: user_id,
        filtro: _filtro,
        status: _status
    };


    var dadosJson = JSON.stringify(dados);

    $.ajax({
        url: '../backend/controllers/filterPedido.php',
        method: 'post',
        data: { data: dadosJson },
        dataType: 'json',
        success: function (response) {
            console.log(response);
            var length = response.length;
            $('.pedido-list .pedido-card').remove();

            for (var i = 0; i < length; i++) {
                var dataFormatada = response[i].data;
                var partesData = dataFormatada.split('-');
                var ano = partesData[0];
                var mes = partesData[1];
                var dia = partesData[2];

                var dataReformatada = dia + '-' + mes + '-' + ano;

                $('.pedido-list').append('<div class="pedido-card" id="pedido-card' + response[i].id_pedido + '">'
                    + '<div class="more-btn" id="more-pedido" onclick="getPedidoItens(' + response[i].id_pedido + ')">'
                    + '<i class="bx bx-expand-vertical"></i>'
                    + '</div>'
                    + '<div class="pedido-header">'
                    + '<p class="pedido-id"><i class="bx bx-purchase-tag-alt"></i> Pedido #' + response[i].id_pedido + '</p>'
                    + '<p>Subtotal: R$ ' + response[i].subtotal +'</p>'
                    + '</div>'
                    + '<div class="datatime">'
                    + '<p>' +dataReformatada+ '</p>'
                    + '<p>' + response[i].hora + '</p>'
                    + '</div>'
                    + '<div class="pedido_status">'
                    + '<p>' + response[i].status+ '</p>'
                    + '</div>'
                    +'<div class="pedido-content" id="pedido-content'+response[i].id_pedido+'">'
                    + '<p class="pedido-title"><i class="bx bx-basket"></i>Itens</p>'
                    +'<div class="itens-list" id="itens-list'+response[i].id_pedido+'"></div>'
                    +'<div class="pedido-info">'
                    + '<p class="info-text"><i class="bx bx-store"></i>Retirada</p>'
                    + '<p class="info-text"> <i class="bx bx-money"></i> Dinheiro</p>'
                    + '</div>'
                    +'<div class="pedido-action"><button>Cancelar</div>'
                    +'</div>');
            }

            $('.pedido-content').hide();


        }
    });

    
}

function getPedidos() {
    var dados = {
        id_cliente: user_id
    };


    var dadosJson = JSON.stringify(dados);

    $.ajax({
        url: '../backend/controllers/getPedido.php',
        method: 'post',
        data: { data: dadosJson },
        dataType: 'json',
        success: function (response) {

            var length = response.length;
            $('.pedido-list .pedido-card').remove();

            for (var i = 0; i < length; i++) {
                var dataFormatada = response[i].data;
                var partesData = dataFormatada.split('-');
                var ano = partesData[0];
                var mes = partesData[1];
                var dia = partesData[2];

                var dataReformatada = dia + '-' + mes + '-' + ano;

                $('.pedido-list').append('<div class="pedido-card" id="pedido-card' + response[i].id_pedido + '">'
                    + '<div class="more-btn" id="more-pedido" onclick="getPedidoItens(' + response[i].id_pedido + ')">'
                    + '<i class="bx bx-expand-vertical"></i>'
                    + '</div>'
                    + '<div class="pedido-header">'
                    + '<p class="pedido-id"><i class="bx bx-purchase-tag-alt"></i> Pedido #' + response[i].id_pedido + '</p>'
                    + '<p>Subtotal: R$ ' + response[i].subtotal +'</p>'
                    + '</div>'
                    + '<div class="datatime">'
                    + '<p>' +dataReformatada+ '</p>'
                    + '<p>' + response[i].hora + '</p>'
                    + '</div>'
                    + '<div class="pedido_status">'
                    + '<p>' + response[i].status+ '</p>'
                    + '</div>'
                    +'<div class="pedido-content" id="pedido-content'+response[i].id_pedido+'">'
                    + '<p class="pedido-title"><i class="bx bx-basket"></i>Itens</p>'
                    +'<div class="itens-list" id="itens-list'+response[i].id_pedido+'"></div>'
                    +'<div class="pedido-info">'
                    + '<p class="info-text"><i class="bx bx-store"></i>Retirada</p>'
                    + '<p class="info-text"> <i class="bx bx-money"></i> Dinheiro</p>'
                    + '</div>'
                    +'<div class="pedido-action"><button>Cancelar</div>'
                    +'</div>');
            }

            $('.pedido-content').hide();

        }, error: function (status, error) {
            console.log(error);
        }
    });
}

function getPedidoItens(_id_pedido) {
   
    $('#pedido-content'+_id_pedido).slideToggle('slow');

    $.ajax({
        url: '../backend/controllers/getPedidoItem.php',
        method: 'post',
        data: { id_pedido: _id_pedido },
        dataType: 'json',
        success: function (response) {
            var length = response.length;
            $('#itens-list'+ _id_pedido+' .item-pedido').remove();

            for (var i = 0; i < length; i++) {
                $('#itens-list' + _id_pedido).append('<div class="item-pedido">'
                + '<p>'+response[i].quantidade+'x '+response[i].nome_comercial+'</p>'
                + '<p>R$ '+response[i].preco+'</p>'
                + '</div>');
            }
        }   
    });
   

}