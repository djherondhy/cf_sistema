
function populateMovimentacao(){
    

    $.ajax({
        url:'../backend/controllers/get.php',
        method: 'post',
        data: {tabela: 'medicamentos'},
        dataType: 'json',
        success: function(response){
            console.log(response);
            $('#produto option').remove();
            var tam = response.length;

            for(var i = 0; i<tam; i++){
                $('#produto').append('<option value="'+response[i].id_medicamento+'">#'+response[i].id_medicamento+' - '+response[i].nome_comercial+'</option>');
            }
            $('#produto').val('');
        }
    })
}

$('.btn-menos').click(function(e){
    e.preventDefault();
    if($('#nova-quantidade').val()>0){
        var qtd = $('#nova-quantidade').val();
        qtd--;
        $('#nova-quantidade').val(qtd);
    }

   
    
})

$('.btn-mais').click(function(e){
    e.preventDefault();
    var qtd = $('#nova-quantidade').val();
    qtd++;
    $('#nova-quantidade').val(qtd);
})

$('.nova-quantidade').hide();

$('#tipo-movimentacao').change(function(){
    
    if($('#tipo-movimentacao').val() == 1){
        $('.btn-menos').hide();
        $('.btn-mais').show();
    }else{
        $('.btn-mais').hide();
        $('.btn-menos').show();
    }
    
})

$('#produto').change(function(){

    var dados = {
        coluna: 'id_medicamento',
        tabela: 'medicamentos',
        id: $('#produto').val()
    }
    var dadosJson = JSON.stringify(dados);
    $('.nova-quantidade').slideDown('slow');

    
    $.ajax({
        url: '../backend/controllers/getOne.php',
        method: 'POST',
        data: { data: dadosJson },
        dataType: 'json',
        success: function (response) {
           $('#nova-quantidade').val(response.quantidade);
           $('#quantidade-atual').val(response.quantidade);
        }
    });


    if($('#tipo-movimentacao').val() == 1){
        $('.btn-menos').hide();
        $('.btn-mais').show();

        $('#nova-quantidade').on('input', function() {
            var currentValue = parseInt($(this).val());
        
            if (currentValue < $('#quantidade-atual').val()){
              $(this).val($('#quantidade-atual').val());
            }
          });

    }else{
        $('.btn-mais').hide();
        $('.btn-menos').show();
        $('#nova-quantidade').prop('max', $('#quantidade-atual').val());

        $('#nova-quantidade').on('input', function() {
            var currentValue = parseInt($(this).val());
        
            if (currentValue > $('#quantidade-atual').val()){
              $(this).val($('#quantidade-atual').val());
            }
          });
    }

})
populateMovimentacao();