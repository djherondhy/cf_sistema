


$('#form-produto').submit(function(e){
    e.preventDefault();

    
      var dados = {
        'tabela': 'medicamentos',
        'nome_comercial': $('#p-nome-comercial').val(),
        'categoria': $('#p-categoria').val(),
        'secao': $('#p-secao').val(),
        'descricao': $('#p-descricao').val(),
        'preco': $('#p-preco').val(),
        'quantidade': $('#p-quantidade').val(),
        'validade': $('#p-validade').val()
    };

    var formData = new FormData();
    var arquivo = $('#imagem')[0].files[0];
    formData.append('imagem',arquivo);
    formData.append('tabela', dados.tabela);
    formData.append('nome_comercial', dados.nome_comercial);
    formData.append('secao', dados.secao);
    formData.append('categoria', dados.categoria);
    formData.append('descricao', dados.descricao);
    formData.append('preco', dados.preco);
    formData.append('quantidade', dados.quantidade);
    formData.append('validade', dados.validade);
    

    $.ajax({
        url: '../backend/controllers/postProduto.php',
        method: 'POST',
        data: formData,
        processData: false,
        contentType: false,
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