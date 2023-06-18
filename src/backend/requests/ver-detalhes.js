function verDetalhes(id_produto) {

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
            $('.detalhes-container').fadeIn('slow');

          
        }
    });
}