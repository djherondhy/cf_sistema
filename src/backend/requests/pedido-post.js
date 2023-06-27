


$('#pedido-form').submit(function(e){
    e.preventDefault();
    var dataAtual = new Date();
    var ano = dataAtual.getFullYear();
    var mes = ('0' + (dataAtual.getMonth() + 1)).slice(-2); // Os meses começam em zero, por isso é adicionado +1
    var dia = ('0' + dataAtual.getDate()).slice(-2);
    

    // Formatação com zeros à esquerda (exemplo: 17/06/2023)
    var dataFormatada = ano + '-' + mes + '-' + dia;


    var horas = dataAtual.getHours();
    var minutos = dataAtual.getMinutes();

    var horaFormatada = ("0" + horas).slice(-2) + ":" + ("0" + minutos).slice(-2);


    var dados = {
        hora: horaFormatada.toString(),
        dataFormatada: dataFormatada.toString(),
        id_cliente : user_id,
        forma_pagamento: $('#forma_pagamento').val(),
        forma_recebimento: $('#forma_recebimento').val(),
        troco: $('#troco').val(),
        cod_endereco: $('input[name="endereco"]:checked').val(),
        status: 'Esperando Confirmação',
        itens: itensPedido
    }
    var dadosJson = JSON.stringify(dados);

    $.ajax({
        url:'../backend/controllers/postPedido.php',
        method: 'post',
        data:{data: dadosJson},
        dataType: 'json',
        success: function(response){
            $('.pedido-container').fadeOut('slow');
            $('.popup').fadeOut('slow');
            $('.popup').fadeIn('slow');
            $('.popup p').remove();
            $('.popup').prepend('<p class="popup-message">'+response.message+'</p>')
            $('.carrinho').fadeOut('slow');
            $('.side-pedido').fadeIn('slow');
            getPedidos();
            getCarrinho(user_id);
           
            console.log(response);
        },
        error: function(response){

        }
    })
})