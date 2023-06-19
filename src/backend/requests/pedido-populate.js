$('#finalizar-pedido').click(function(){
    $('.pedido-container').fadeIn('slow');

});

$('#add-endereco').click(function(e){
    e.preventDefault();
    $('.endereco-container').fadeIn('slow');
})

function populatePedido(){

   var dados = {
        id_cliente: user_id
    }

    var dadosJson = JSON.stringify(dados);

    $.ajax({
        url: '../backend/controllers/getEndereco.php',
        method: 'post',
        data: { data: dadosJson },
        dataType: 'json',
        success: function (response) {
            console.log(response)
            $('#pedido-enderecos .radio-agroup').remove();
            var lenght = response.length;
            for (var i = 0; i < lenght; i++) {
             $('#pedido-enderecos').append('<div class="radio-agroup">'
            +'<input type="radio" name="endereco" id="endereco" value="'+response[i].id_endereco+'"><label for="endereco">'
            +response[i].nome_completo+', '+response[i].logradouro+', '+response[i].numero+', '+response[i].bairro+', '+response[i].cidade+'-'+response[i].estado+', '+response[i].cep+'</label>'
            +'</div>');
            }

        }, error: function (status, error) {
            console.log(error);
        }
    })
   

}