
function deleteProdutos(id_produto){
    $('.confirm-container').fadeIn('slow');
    $('#cancelar').click(function(){
        $('.confirm-container').fadeOut('slow');
    });
    $('#confirmar').click(function(){
        $.ajax({
            url: '../backend/controllers/delete.php',
            data: {
                id: id_produto,
                tabela: 'medicamentos',
                coluna: 'id_medicamento'
            },
            method: 'POST',
            dataType: 'json',
            success: function(response){
              
                $('.confirm-container').fadeOut('slow');
               
            },
            error: function(status, error){
                console.log(error);
            }
        });
        getProdutos();

        
    });
    
}