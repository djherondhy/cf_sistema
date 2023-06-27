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
          $('.topbar .username').empty();
          $('.topbar .username').append('Bem Vindo, '+response.username);
          $('.perfil-info .nome_completo').val(response.nome_completo);
          $('.perfil-info .username-input').val(response.username);
          $('.perfil-info .email').val(response.email);

          if(response.perfil == ''){
            $('.topbar .user-perfil').empty();
            $('.topbar .user-perfil').append(response.username[0]);
            $('.container-perfil  .user-perfil p').empty();
            $('.container-perfil  .user-perfil').append('<p>'+response.username[0]+'</p>');
          }else{
            $('.topbar .user-perfil').empty();
            $('.topbar .user-perfil img').empty();
            $('.topbar .user-perfil').append('<img src="../backend/upload/perfil/'+response.perfil+'"/>');

            $('.container-perfil  .user-perfil p').remove;
            $('.container-perfil  .user-perfil img').remove;
            $('.container-perfil  .user-perfil').append('<img src="../backend/upload/perfil/'+response.perfil+'"/>');
          }
        }
    });
}