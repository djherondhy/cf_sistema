
$('#form-movimentacao').submit(function (e) {
    e.preventDefault();

    if ($('#produto').val() == '') {

    } else {
        var dados = {
            tipo: $('#tipo-movimentacao').val(),
            produto: $('#produto').val(),
            quantidade_atual: $('#quantidade-atual').val(),
            nova_quantidade: $('#nova-quantidade').val(),
            quantidade: 0,
            descricao: $('#mov-descricao').val()
        }

        if (dados.tipo == 1) {
            dados.quantidade = parseInt($('#nova-quantidade').val()) - parseInt($('#quantidade-atual').val());
        } else {
            dados.quantidade = parseInt($('#quantidade-atual').val()) - parseInt($('#nova-quantidade').val());
        }


        var dadosJson = JSON.stringify(dados);


        $.ajax({
            url: '../backend/controllers/postMovimentacao.php',
            method: 'POST',
            data: { data: dadosJson },
            dataType: 'json',
            success: function (response) {
                console.log(response);
                $('.movimentacao-cadastro').fadeOut('slow');
                getMovimentacao();

            }, error: function (status, error) {
                
            }
        });

    }
})