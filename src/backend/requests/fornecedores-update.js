
function getFornecedor(id_fornecedor){

    var dados = {
        tabela: 'fornecedores',
        coluna: 'codigo',
        id: id_fornecedor
    }

    var dadosJson = JSON.stringify(dados);

   $('.fornecedor-edit').fadeIn('slow');

   $.ajax({
    url: '../backend/controllers/getOne.php',
    method: 'post',
    data: {data: dadosJson},
    dataType: 'json',
    success: function(response){
       
        $('#edit-nome').val(response.nome_fantasia);
        $('#edit-cnpj').val(response.cnpj);
        $('#edit-email').val(response.email);
        $('#edit-telefone').val(response.telefone);
        $('#edit-endereco').val(response.endereco);
        $('#edit-codigo').val(response.codigo);
    }
   });

}

$('#edit-fornecedores').submit(function(e){

    e.preventDefault();
    var dados = {
        codigo : $('#edit-codigo').val(),
        nome: $('#edit-nome').val(),
        cnpj: $('#edit-cnpj').val(),
        email: $('#edit-email').val(),
        telefone: $('#edit-telefone').val(),
        endereco: $('#edit-endereco').val()
    }

    var dadosJson = JSON.stringify(dados);

    $.ajax({
        url: '../backend/controllers/updateFornecedor.php',
        method: 'post',
        data: {data: dadosJson},
        dataType: 'json',
        success: function(response){
        $('.fornecedor-edit').fadeOut('slow');
        getFornecedores();
        console.log(response);
        }
    });

});