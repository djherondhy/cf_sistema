
function deleteFornecedor(id_fornecedor){
    $('.confirm-container').fadeIn('slow');
    $('#cancelar').click(function(){
        $('.confirm-container').fadeOut('slow');
    });
    $('#confirmar').click(function(){
        $.ajax({
            url: '../backend/controllers/delete.php',
            data: {
                id: id_fornecedor,
                tabela: 'fornecedores',
                coluna: 'codigo'
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
        $('.confirm-container').fadeOut('slow');
        getFornecedores();
        populateFornecedores();
        
    });
    
}