function getMedicamento(id_produto) {

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
            $('.produto-detalhes').fadeIn('slow');

            $('#detalhe_id').empty().append(response.id_medicamento);
            $('#detalhe_nome').empty().append(response.nome_comercial);
            $('#detalhe_descricao').empty().append(response.descricao);
            $('#detalhe_categoria').empty().append(response.categoria);
            $('#detalhe_preco').empty().append('R$ '+response.preco);
            $('#detalhe_secao').empty().append(response.secao);
            $('#detalhe_quantidade').empty().append(response.quantidade);
            $('#produto-img').prop('src', '../backend/upload/'+response.imagem);
            if(response.codFornecedor == 0){
                $('#detalhe_fornecedor').empty().append('Não Cadastrado');
            }

            if(response.secao == 'Não Cadastrada'){
                $('#detalhe_localizacao').empty().append('Não Cadastrada');
            }
        }
    });
}