$('#alterar-senha').click(function(){
   
    $('.senha-container').fadeIn('slow');
})

$('#input-senha-atual').on('input', function(){
   
    var dados = {
        id: user_id,
        senha: $('#input-senha-atual').val()
    }
    var dadosJson = JSON.stringify(dados);

    $.ajax({
        url: '../backend/controllers/getSenha.php',
        method: 'post',
        data: {data: dadosJson},
        dataType: 'json',
        success: function(response){
          if(response == 1){
            $('.senha-atual-message').slideUp('slow');
            $('#nv-senha').prop('disabled', false);
          }else{
            $('.senha-atual-message').slideDown('slow');
            $('#nv-senha').prop('disabled', true);
          }
        }
    })

})

$('#input-senha-atual').blur(function(){
    if($('#input-nv-senha').val() == ''){
        $('.senha-atual-message').slideUp('slow');
    }
})


$('#input-nv-senha').blur(function(){
    if($('#input-nv-senha').val() == ''){
        $('.senha-message').slideUp('slow');
    }
})

$('#confirm-senha').blur(function(){
    if($('#input-senha-atual').val() == ''){
        $('.confirm-senha-message').slideUp('slow');
    }
})

$('#input-nv-senha').on('input', function(){
   
    if($('#input-nv-senha').val().length < 8){
        $('.senha-message').slideDown('slow');
        $('#nv-senha').prop('disabled', true);
    }else{
        $('.senha-message').slideUp('slow'); 
        $('#nv-senha').prop('disabled', false);
    }

})

$('#confirm-senha').on('input', function(){
   
   var confirma = $('#confirm-senha').val();
   var senha = $('#input-nv-senha').val();

   if(confirma === senha){
    $('.confirm-senha-message').slideUp('slow');
    $('#nv-senha').prop('disabled', false);
   }else{
    $('.confirm-senha-message').slideDown('slow');
    $('#nv-senha').prop('disabled', true);
   }

})

$('#senha-form').submit(function(e){
    e.preventDefault();

    var dados = {
        senha: $('#input-nv-senha').val(),
        id: user_id
    }

    var dadosJson = JSON.stringify(dados);

    $.ajax({
        url: '../backend/controllers/updateSenha.php',
        method: 'post',
        data: {data: dadosJson},
        dataType: 'json',
        success: function(response){
            console.log(response);
            $('.senha-container').fadeOut('slow');
            $('#input-nv-senha').val('');
            $('#input-senha-atual').val('');
            $('#confirm-senha').val('');
        }
    
       });

})