
function updateStatus(_id_pedido, _id_cliente, _status){
    var dados = {
        id_pedido: _id_pedido,
        id_cliente: _id_cliente,
        status: '',
        message: ''
    }

    if (_status == 1){
        dados.status = 'Confirmado'
    }

    if (_status == 2){
        dados.status = 'Apto para Entrega'
    }

    if (_status == 3){
        dados.status = 'Entregue'
    }

    if (_status == 4){
        dados.status = 'Cancelado'
    }


    var dadosJson = JSON.stringify(dados);

    $.ajax({
        url: '../backend/controllers/updateStatus.php',
        method: 'post',
        data: {data: dadosJson},
        dataType: 'json',
        success: function(response){
            console.log(response);
            getPedidos();
        }
    });
}