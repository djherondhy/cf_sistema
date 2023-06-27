
$('#form-endereco').submit(function(e){
    e.preventDefault();

    var dados = {
        nome_completo : $('#nome_completo').val(),
        cep : $('#cep').val(),
        cidade : $('#cidade').val(),
        estado : $('#estado').val(),
        logradouro : $('#logradouro').val(),
        bairro : $('#bairro').val(),
        numero : $('#numero').val(),
        complemento : $('#complemento').val(),
        id_cliente: user_id,
        tabela: 'endereco'
    }

    var dadosJson = JSON.stringify(dados);

    $.ajax({
        url: '../backend/controllers/post.php',
        method: 'post',
        data: {data: dadosJson},
        dataType: 'json',
        success: function(response){
            $('.endereco-container').fadeOut('slow');
            getEndereco(user_id);
            populatePedido();
        },error: function(status, error){
            console.log(error);
        }
    });
});


$('#edit-form-endereco').submit(function(e){
    e.preventDefault();

    var dados = {
        nome_completo : $('#edit-nome_completo').val(),
        cep : $('#edit-cep').val(),
        cidade : $('#edit-cidade').val(),
        estado : $('#edit-estado').val(),
        logradouro : $('#edit-logradouro').val(),
        bairro : $('#edit-bairro').val(),
        numero : $('#edit-numero').val(),
        complemento : $('#edit-complemento').val(),
        id_cliente: user_id,
    }

    var dadosJson = JSON.stringify(dados);

    $.ajax({
        url: '../backend/controllers/updateEndereco.php',
        method: 'post',
        data: {data: dadosJson},
        dataType: 'json',
        success: function(response){
            $('.edit-endereco-container').fadeOut('slow');
            getEndereco(user_id);
            populatePedido();
        },error: function(status, error){
            console.log(error);
        }
    });
});

