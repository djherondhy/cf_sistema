

$('#data').change('input', function () {
    getMovimentacao();
})

$('input[name="filter-movimentacao"]').change(function () {

    $('label').removeClass('active');
    if ($(this).is(':checked')) {
        var radioId = $(this).attr('id')

        var labelId = $('label[for="' + radioId + '"]').attr('id');

        $('#' + labelId).addClass('active');
    }



    getMovimentacao();
});

function getMovimentacao() {

    if ($('#data').val() != 0) {
        var partesData = $('#data').val().split("/");
        var dia = partesData[0];
        var mes = partesData[1];
        var ano = partesData[2];

        var dataFormatada = ano + "-" + dia + "-" + mes;
    } else {
        var dataFormatada = '';
    }

    console.log(dataFormatada);

    var dados = {
        data: dataFormatada,
        status: $('input[name="filter-movimentacao"]:checked').val(),
    }

    var dadosJson = JSON.stringify(dados);

    $.ajax({
        url: '../backend/controllers/getMovimentacao.php',
        method: 'POST',
        data: { data: dadosJson },
        dataType: 'json',
        success: function (response) {
            var tam = response.length;
            $('.mov-list').empty();

            if (tam == 0) {
                $('.mov-list').append('<div class="mov-card">Nehuma Movimentacao Encontrada</div>')
            }
            for (var i = 0; i < tam; i++) {

                if (response[i].tipo == 1) {
                    var mov = '+'
                } else {
                    var mov = '-'
                }

                $('.mov-list').append('<div class="mov-card">'
                    + '<div class="mov-card-info">'
                    + '<p class="mov-cod"><i class="bx bx-transfer-alt"></i>Movimentação #' + response[i].id_movimentacao + '</p>'
                    + '<p class="mov-data">' + response[i].data + '</p>'
                    + '<p class="mov-produto"><i class="bx" id="mov' + response[i].id_movimentacao + '"></i> Produto #' + response[i].id_produto + ' ' + mov + '' + response[i].quantidade + ' Unidades - ' + response[i].nome_comercial + ' </p>'
                    + '<p class="mov-descricao"><i class="bx bx-detail"></i>' + response[i].descricao + '</p>'
                    + '</div>'
                    + '<div class="mov-card-action">'
                    + '<button onclick="deleteMovimentacao(' + response[i].id_movimentacao + ')"><i class="bx bx-trash-alt"></i></button>'
                    + '</div>'
                    + '</div>');

                if (response[i].tipo == 1) {
                    $('#mov' + response[i].id_movimentacao).addClass('bx-right-arrow-alt entrada');
                } else {
                    $('#mov' + response[i].id_movimentacao).addClass('bx-left-arrow-alt saida');
                }

            }
        },
        error: function (status, error) {
            console.log(error);
        }
    })
}


getMovimentacao();