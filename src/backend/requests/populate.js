function populateProdutos(){
    $.ajax({
        url: '../backend/controllers/get.php',
        method: 'POST',
        data:{tabela: 'secao'},
        dataType:'json',
        success: function(response){
            $('#p-secao option').remove();
            
            var length = response.length;

            for(var i = 0; i< length; i++){
                $('#p-secao').append('<option value="'+response[i].codigo+'">'+response[i].codigo+'</option>');

            }

        },
        error: function(status, error){
            console.log(error);
        }
     })

}

populateProdutos();