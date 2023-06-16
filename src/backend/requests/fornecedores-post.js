
$('#form-fornecedores').submit(function(e){
    e.preventDefault();

    var dados = {
        tabela: 'fornecedores',
        nome_fantasia : $('#fornecedores-nome').val(),
        cnpj : $('#fornecedores-cnpj').val(),
        email : $('#fornecedores-email').val(),
        telefone : $('#fornecedores-telefone').val(),
        endereco : $('#fornecedores-endereco').val()
    }

    var dadosJson = JSON.stringify(dados);

    $.ajax({
        url: '../backend/controllers/post.php',
        method: 'post',
        data: {data: dadosJson},
        dataType: 'json',
        success: function(response){
            console.log(response);

            if(!response.error){
               $('.fornecedor-cadastro').fadeOut('slow');
               getFornecedores();
               populateFornecedores();
            }

        },error: function(status, error){
            console.log(error);
        }
    })
   

})