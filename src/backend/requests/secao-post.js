
$('#form-secao').submit(function(e){
    e.preventDefault();

    var dados = {
        tabela: 'secao',
        codigo: $('#secao-codigo').val(),
        localizacao: $('#secao-localizacao').val()
    }

    dadosJson = JSON.stringify(dados);

    $.ajax({
        url: '../backend/controllers/post.php',
        method: 'POST',
        data: {data: dadosJson},
        dataType: 'json',
        success: function(response){
            console.log(response);
            $('.secao-container').fadeOut('slow');
            getSecao();
            populateProdutos();
            ('#secao-codigo').val('');
            $('#secao-localizacao').val('');
        },
        error: function(status, error){
            console.log(error);
        }
    })

    
})