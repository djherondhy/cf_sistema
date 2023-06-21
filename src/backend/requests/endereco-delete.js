
function deleteEndereco(id_endereco){
    var dados = {
        id: id_endereco,
        tabela: 'endereco',
        coluna: 'id_endereco'
    }

    $('.confirm-container').fadeIn('slow');
    $('#cancelar').click(function(){
        $('.confirm-container').fadeOut('slow');
    });
    $('#confirmar').click(function(){

    $.ajax({
        url: '../backend/controllers/delete.php',
        method: 'post',
        data: {id: dados.id, tabela: dados.tabela, coluna: dados.coluna},
        dataType: 'json',
        success: function(response){
            $('.confirm-container').fadeOut('slow');
           

        },
        error: function(status, error){

        }
    })
    getEndereco(user_id);

    });
}