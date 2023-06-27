function populateProdutos(){
    $.ajax({
        url: '../backend/controllers/get.php',
        method: 'POST',
        data:{tabela: 'secao'},
        dataType:'json',
        success: function(response){
            $('#p-secao option').slice(1).remove();
            
            var length = response.length;

            for(var i = 0; i< length; i++){
                $('#p-secao').append('<option value="'+response[i].id_secao+'">'+response[i].codigo+'</option>');
                $('#secao-select').append('<option value="'+response[i].id_secao+'">'+response[i].codigo+'</option>');
                $('#edit-secao').append('<option value="'+response[i].id_secao+'">'+response[i].codigo+'</option>');
            }

        },
        error: function(status, error){
            console.log(error);
        }
     })

}

function populateFornecedores(){
    $.ajax({
        url: '../backend/controllers/get.php',
        method: 'POST',
        data:{tabela: 'fornecedores'},
        dataType:'json',
        success: function(response){
            $('#p-fornecedor option').slice(1).remove();
            
            var length = response.length;

            for(var i = 0; i< length; i++){
                $('#p-fornecedor').append('<option value="'+response[i].codigo+'">#'+response[i].codigo+' '+response[i].nome_fantasia+'</option>');
                $('#edit-fornecedor').append('<option value="'+response[i].id_secao+'">'+response[i].codigo+'</option>');
            }

        },
        error: function(status, error){
            console.log(error);
        }
     })

}

populateFornecedores();
populateProdutos();