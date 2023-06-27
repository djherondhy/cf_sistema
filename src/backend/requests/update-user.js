$('#edit-nome').click(function(){
    $('.nome_completo').prop('disabled', false);
    $('.nome_completo').css('border-bottom', '1px solid #ccc');
    $('.nome_completo').focus();
    $('#ok-edit-nome').css('display','inline');
})

$('#edit-username').click(function(){
    $('.username-input').prop('disabled', false);
    $('.username-input').css('border-bottom', '1px solid #ccc');
    $('.username-input').focus();
    $('#ok-edit-username').css('display','inline');
})


$('#edit-email').click(function(){
    $('.email').prop('disabled', false);
    $('.email').css('border-bottom', '1px solid #ccc');
    $('.email').focus();
    $('#ok-edit-email').css('display','inline');
})



$('#ok-edit-nome').click(function(){
   
   var dados = {
        coluna: 'nome_completo',
        valor: $('.nome_completo').val(),
        id: user_id
   };

   var dadosJson = JSON.stringify(dados);


   $.ajax({
    url: '../backend/controllers/updateUser.php',
    method: 'post',
    data: {data: dadosJson},
    dataType: 'json',
    success: function(response){
        console.log(response);
        $('.nome_completo').prop('disabled', true);
        $('.nome_completo').css('border-bottom', '0');
        $('#ok-edit-nome').css('display','none');
    }

   });
  
})

$('#ok-edit-username').click(function(){
   
    var dados = {
         coluna: 'username',
         valor: $('.username-input').val(),
         id: user_id
    };
    
    console.log(dados.valor);
    var dadosJson = JSON.stringify(dados);
 
 
    $.ajax({
     url: '../backend/controllers/updateUser.php',
     method: 'post',
     data: {data: dadosJson},
     dataType: 'json',
     success: function(response){
         console.log(response);
         $('.username-input').prop('disabled', true);
         $('.username-input').css('border-bottom', '0');
         $('#ok-edit-username').css('display','none');
         getUser(user_id);
     }
 
    });
   
 })

 $('#ok-edit-email').click(function(){
   
    var dados = {
         coluna: 'email',
         valor: $('.email').val(),
         id: user_id
    };
 
    var dadosJson = JSON.stringify(dados);
 
 
    $.ajax({
     url: '../backend/controllers/updateUser.php',
     method: 'post',
     data: {data: dadosJson},
     dataType: 'json',
     success: function(response){
         console.log(response);
         $('.email').prop('disabled', true);
         $('.email').css('border-bottom', '0');
         $('#ok-edit-email').css('display','none');
     }
 
    });
   
 })