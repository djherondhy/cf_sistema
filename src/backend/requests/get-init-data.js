
function getVendaDiaria(){

    var dados = {
        busca: 'diaria'
    }

    var dadosJson = JSON.stringify(dados);

    $.ajax({
        url: '../backend/controllers/getData.php',
        method: 'POST',
        data: {data: dadosJson},
        dataType: 'JSON',
        success: function(response){
            $('#venda-diaria').empty();
            $('#venda-diaria').append('R$ '+response);
        }
    })
}


function getVendaMensal(){

    var dados = {
        busca: 'mensal'
    }

    var dadosJson = JSON.stringify(dados);

    $.ajax({
        url: '../backend/controllers/getData.php',
        method: 'POST',
        data: {data: dadosJson},
        dataType: 'JSON',
        success: function(response){
            $('#venda-mensal').empty();
            $('#venda-mensal').append('R$ '+response);
        }
    })
}

function getClientes(){

    var dados = {
        busca: 'clientes'
    }

    var dadosJson = JSON.stringify(dados);

    $.ajax({
        url: '../backend/controllers/getData.php',
        method: 'POST',
        data: {data: dadosJson},
        dataType: 'JSON',
        success: function(response){
            $('#cliente-number').empty();
            $('#cliente-number').append(response);
        }
    })
}

function getMovimentacao() {

  
    var dados = {
        data: 'dataFormatada',
    }

    var dadosJson = JSON.stringify(dados);

    $.ajax({
        url: '../backend/controllers/getMovimentacaoInit.php',
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
getClientes();
getVendaMensal();
getVendaDiaria();