function getMedicamento(id_produto) {

    var dados = {
        tabela: 'medicamentos',
        id: id_produto
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
            $('#detalhe_secao').empty().append(response.secao);
        }
    });
}