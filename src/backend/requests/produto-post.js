


$('#form-produto').submit(function(e){
    e.preventDefault();

    
      var dados = {
        'tabela': 'medicamentos',
        'nome_comercial': $('#p-nome-comercial').val(),
        'categoria': $('#p-categoria').val(),
        'secao': $('#p-secao').val(),
        'descricao': $('#p-descricao').val(),
        'preco': $('#p-preco').val(),
        'quantidade': $('#p-quanridade').val(),
        'validade': $('#p-validade').val(),
        'imagem':  ''
    };

    var dadosJson = JSON.stringify(dados);
   

    $.ajax({
        url: '../backend/controllers/post.php',
        method: 'POST',
        data: {data: dadosJson},
        dataType: 'json',
        success: function(response){
            console.log(response);
            getProdutos();
            $('.cadastro-container').fadeOut('slow');
        },
        error: function(xhr, status, error){
            console.log(error);
        }
    });


 
    

    

    
})