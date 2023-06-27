function getAdm(_id){
    var dados = {
        tabela: 'colaborador',
        id: _id,
        coluna: 'id'
    }
    var dadosJson = JSON.stringify(dados);
    $.ajax({
        url: '../backend/controllers/getOne.php',
        method: 'POST',
        data: { data: dadosJson },
        dataType: 'json',
        success: function (response) {
            console.log(response);
            $('.perfil-img p').empty();
            $('.perfil-img p').append(response.nome_completo[0]);
            $('.username').empty();
            var username = response.nome_completo.split(' ');
            $('.username').append(username[0]);

            if(response.permissao == 2){
                $('#menu-recursos').show();
            }else{
                $('#menu-recursos').hide();
            }
        }
    });
}