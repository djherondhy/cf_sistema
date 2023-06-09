
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
            getSecao();
            populateProdutos();
        },
        error: function(status, error){
            console.log(error);
        }
    })

    
})