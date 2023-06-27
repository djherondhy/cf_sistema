
$('.email-message').hide();
$('.senha-message').hide();
$('.confirma-message').hide();
$('#email').keyup(function () {

    var dados = {
        id: $('#email').val(),
        coluna: 'email',
        tabela: 'user'
    };
    console.log(dados.id);
    var dadosJson = JSON.stringify(dados);

    $.ajax({
        url: '../backend/controllers/validation.php',
        method: 'post',
        data: { data: dadosJson },
        dataType: 'json',
        success: function (response) {
            if (response.result == 1) {
                $('.email-message').slideDown('slow');
                $('#salvar').prop('disabled', true);
                $('#salvar').css('background', '#7a7a7a');
            } else {
                $('.email-message').slideUp('slow');
                $('#salvar').prop('disabled', false);
                $('#salvar').css('background', 'var(--main-color)');
            }
        },
        error: function (status, error) {
            console.log(error);
        }
    })

})

$('#senha').keyup(function () {

    var senha = $('#senha').val();

    if (senha != '') {
        if (senha.length < 8) {
            $('.senha-message').slideDown('slow');
            $('#salvar').prop('disabled', true);
            $('#salvar').css('background', '#7a7a7a');
        } else {
            $('.senha-message').slideUp('slow');
            $('#salvar').prop('disabled', false);
            $('#salvar').css('background', 'var(--main-color)');
        }
    } else {
        $('.senha-message').slideUp('slow');
    }

});


$('#confirma').keyup(function () {

    var senha = $('#senha').val();
    var confirma = $('#confirma').val();

    if (senha != '' && confirma != '') {
        
        if(senha === confirma){
            $('.confirma-message').slideUp('slow');
            $('#salvar').prop('disabled', false);
            $('#salvar').css('background', 'var(--main-color)');
        }else{
            $('.confirma-message').slideDown('slow');
            $('#salvar').prop('disabled', true);
            $('#salvar').css('background', '#7a7a7a');
        }
    } else {
        $('.confirma-message').slideUp('slow');
    }

});