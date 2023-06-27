function getUpdateProduto(id_produto){

    var dados = {
        tabela: 'medicamentos',
        id: id_produto,
        coluna: 'id_medicamento'
    }
    var dadosJson = JSON.stringify(dados);
    $.ajax({
        url: '../backend/controllers/getOne.php',
        method: 'POST',
        data: { data: dadosJson },
        dataType: 'json',
        success: function (response) {
          $('.edit-produto-container').fadeIn('slow');
          $('#edit-nome-comercial').val(response.nome_comercial);
          $('#edit-descricao').val(response.descricao);
          $('#edit-preco').val(response.preco);
          $('#edit-quantidade').val(response.quantidade);
          $('#edit-validade').val(response.validade);
          $('#edit-categoria').val(response.categoria);
          $('#edit-secao').val(response.secao);
          $('#edit-codigo').val(response.id_medicamento);
          $('#edit-qtd-atual').val(response.quantidade);

          if(response.fornecedor == 0){
            $('#edit-fornecedor').val('Não Cadastrado');
          }
          $('#imagem-edit').prepend('<img src="'+response.imagem+'" id="previewEditProduto"/>');

          $('#previewEditProduto').attr('src', '../backend/upload/'+response.imagem);
          $('#new-edit-image').remove();
        }
    });

   
}

$('#foto-edit').change(function(){
    var file = this.files[0];
    var reader = new FileReader();
    $('#previewEditProduto').remove();

    $('#imagem-edit').prepend('<img src="" id="new-edit-image"/>');

    reader.onload = function(e){
        $('#new-edit-image').attr('src', e.target.result);
    }
    
    
    reader.readAsDataURL(file);
});











$('#edit-produto').submit(function(e){
    e.preventDefault();
    var dados = {
        'nome_comercial': $('#edit-nome-comercial').val(),
        'categoria': $('#edit-categoria').val(),
        'secao': $('#edit-secao').val(),
        'descricao': $('#edit-descricao').val(),
        'preco': $('#edit-preco').val(),
        'quantidade': $('#edit-quantidade').val(),
        'validade': $('#edit-validade').val(),
        'fornecedor': $('#edit-fornecedor').val(),
        'id_produto':  $('#edit-codigo').val()
    };

    var formData = new FormData();
    var arquivo = $('#foto-edit')[0].files[0];
    formData.append('imagem',arquivo);
    formData.append('tabela', dados.tabela);
    formData.append('nome_comercial', dados.nome_comercial);
    formData.append('secao', dados.secao);
    formData.append('categoria', dados.categoria);
    formData.append('descricao', dados.descricao);
    formData.append('preco', dados.preco);
    formData.append('quantidade', dados.quantidade);
    formData.append('validade', dados.validade);
    formData.append('fornecedor', dados.fornecedor);
    formData.append('id_produto', dados.id_produto);
    

    $.ajax({
        url: '../backend/controllers/updateProduto.php',
        method: 'POST',
        data: formData,
        processData: false,
        contentType: false,
        success: function(response){
            $('.edit-produto-container').fadeOut('slow');
            console.log(response);
            getProdutos();
            
        },
        error: function(xhr, status, error){
            console.log(error);
        }
    });

})