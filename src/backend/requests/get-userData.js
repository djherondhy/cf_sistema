function getUser(_id){

    var dados = {
        tabela: 'user',
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
          $('.topbar .username').append('Bem Vindo, '+response.username);
          $('.perfil-info .nome_completo').append(response.nome_completo);
          $('.perfil-info .username').append(response.username);
          $('.perfil-info .email').append(response.email);
          if(response.perfil == ''){
            $('.topbar .user-perfil').append(response.username[0]);
            $('.container-perfil  .user-perfil').append(response.username[0]);
          }
        }
    });
}