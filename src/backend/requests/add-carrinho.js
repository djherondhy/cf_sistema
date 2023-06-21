
function addCarrinho(_id_produto){
    var dados = {
        id_cliente: user_id,
        id_produto: _id_produto
    }

    var dadosJson = JSON.stringify(dados);

    if(user_id != 0){
       
        $.ajax({
            url: '../backend/controllers/addCarrinho.php',
            method: 'post',
            data: {data: dadosJson},
            dataType: 'json',
            success: function(response){
                $('.popup').fadeOut('slow');
                $('.popup').fadeIn('slow');
                $('.popup p').remove();
                $('.popup').prepend('<p class="popup-message">'+response.message+'</p>')
                getCarrinho(user_id);
            }
        })
    }
}   