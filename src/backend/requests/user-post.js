
$('#user-form').submit(function(e){
    e.preventDefault();

    var dados = {
        nome_completo: $('#nome').val(),
        username: $('#username').val(),
        email: $('#email').val(),
        senha: $('#senha').val()
    };

    var dadosJson = JSON.stringify(dados);

    $.ajax({
        url: '../backend/controllers/newUser.php',
        method: 'POST',
        data: {data: dadosJson},
        dataType: 'json',
        success: function(response){
         window.location.href = "login-user.php?user="+response.result;
        },
        error: function(status, error){
            console.log(error);
        }
    })

   
});
