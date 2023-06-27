function getNotificacoes() {

    var dados = {
        id_cliente: user_id
    }

    var dadosJson = JSON.stringify(dados);

    $.ajax({
        url: '../backend/controllers/getNotificacao.php',
        method: 'post',
        data: { data: dadosJson },
        dataType: 'json',
        success: function (response) {
            $('.notificacao-modal .notificacao-item').remove();
            for (var i = 0; i < response.length; i++) {
                $('.notificacao-list').append('<div class="notificacao-item">'
                    + '<div class="notificacao-icon">'
                    + '<i class="bx bxs-shopping-bag"></i>'
                    + '</div>'
                    + '<div class="notificacao-text">'
                    + '<p>'+response[i].mensagem+'</p>'
                    + '<p>10/05/2023 14:30 </p>'
                    + '</div>'
                    + '</div>')
            };
        }
    });
}

$('#btn-limpar').click(function(){
    $('.confirm-container').fadeIn('slow');
    $('#cancelar').click(function(){
        $('.confirm-container').fadeOut('slow');
    });


    $('#confirmar').click(function(){
        $.ajax({
            url: '../backend/controllers/delete.php',
            data: {
                id: user_id,
                tabela: 'notificacao',
                coluna: 'id_cliente'
            },
            method: 'POST',
            dataType: 'json',
            success: function(response){
              
                $('.confirm-container').fadeOut('slow');
                getNotificacoes();
            },
            error: function(status, error){
                console.log(error);
            }
        });
        $('.confirm-container').fadeOut('slow');
      
        
    });
})
