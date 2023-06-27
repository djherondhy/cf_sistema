
function deleteMovimentacao(_id){

    var dados = {
        id: _id,
        tabela: 'movimentacao',
        coluna: 'id_movimentacao'
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
            getMovimentacao();
        },
        error: function(status, error){

        }
    })

    getMovimentacao();

    });
}