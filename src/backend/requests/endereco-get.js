function getEndereco(user_id) {

    var dados = {
        id_cliente: user_id
    }

    var dadosJson = JSON.stringify(dados);

    $.ajax({
        url: '../backend/controllers/getEndereco.php',
        method: 'post',
        data: { data: dadosJson },
        dataType: 'json',
        success: function (response) {
            console.log(response)
            $('.endereco-user .endereco-card').remove();

            var lenght = response.length;

            for (var i = 0; i < lenght; i++) {
                $('.endereco-user').append('<div class="endereco-card">'
                    + '<p class="endereco-nome">'+response[i].nome_completo+'</p>'
                    + '<p class="endereco-logradouro">'+response[i].logradouro+'</p>'
                    + '<p><span class="bairro">'+response[i].bairro+'</span> <span class="numero">Nº '+response[i].numero+'</span> </p>'
                    + '<p><span class="cidade">'+response[i].cidade+'</span> - <span class="uf">'+response[i].estado+'</span> <span class="cep">'+response[i].cep+'</span></p>'
                    + '<div class="btn">'
                    + '<button><i class="bx bx-edit"></i>Alterar</button>'
                    + '<button class="delete" onclick="deleteEndereco('+response[i].id_endereco+')"><i class="bx bx-trash"></i> Excluir</button>'
                    + '</div>'
                    + '</div>');
            }


        }, error: function (status, error) {
            console.log(error);
        }
    })
}