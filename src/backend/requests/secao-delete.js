function deleteSecao(id_secao){
    $('.confirm-container').fadeIn('slow');
    $('#cancelar').click(function(){
        $('.confirm-container').fadeOut('slow');
    });
    $('#confirmar').click(function(){
        $.ajax({
            url: '../backend/controllers/delete.php',
            data: {
                id: id_secao,
                tabela: 'secao',
                coluna: 'id_secao'
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
        getSecao();
        populateProdutos();
        
    });
    
}