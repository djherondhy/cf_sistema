function getSecao(){
     $.ajax({
        url: '../backend/controllers/get.php',
        method: 'POST',
        data:{tabela: 'secao'},
        dataType:'json',
        success: function(response){
            $('#secao-table tr').slice(1).remove();
            
            var length = response.length;

            for(var i = 0; i< length; i++){
                $('#secao-table').append('<tr>'
                +'<td>'+response[i].codigo+'</td>'
                +'<td>'+response[i].localizacao+'</td>'
                +'<td>'
                +'<button onclick="getSecaoUpdate('+response[i].id_secao+')"><i class="bx bxs-edit"></i></button>  '
                +'<button class="delete" id="delete-secao" onclick="deleteSecao('+response[i].id_secao+')"><i class="bx bxs-trash-alt"></i></button>'
                +'</td>'
                +'</tr>')
            }

        },
        error: function(status, error){
            console.log(error);
        }
     })
}

getSecao();