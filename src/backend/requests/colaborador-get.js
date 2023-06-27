
function getOneColaborador(_id_colaborador) {


    var dados = {
        tabela: 'colaborador',
        id: _id_colaborador,
        coluna: 'id'
    }
    var dadosJson = JSON.stringify(dados);
    $.ajax({
        url: '../backend/controllers/getOne.php',
        method: 'POST',
        data: { data: dadosJson },
        dataType: 'json',
        success: function (response) {
            $('.view-container').fadeIn('slow');

            $('.nome-completo span').empty();
            $('.nome-completo span').append(response.nome_completo);

            $('.tipo span').empty();
            $('.tipo span').append(response.tipo);


            if(response.permissao == 0){
                $('.view-acesso span').empty();
                $('.view-acesso span').append('Não Permitido');
            }

            if(response.permissao == 1){
                $('.view-acesso span').empty();
                $('.view-acesso span').append('Acesso Permitido');
            }

            if(response.permissao == 2){
                $('.view-acesso span').empty();
                $('.view-acesso span').append('Acesso Total');
            }


            $('.view-situacao span').empty();
            $('.view-situacao span').append(response.situacao);

            $('.cpf span').empty();
            $('.cpf span').append(response.cpf);

            $('.cnh span').empty();
            $('.cnh span').append(response.cnh);


            $('.ctps span').empty();
            $('.ctps span').append(response.ctps);

            $('.telefone span').empty();
            $('.telefone span').append(response.telefone);

            $('.email span').empty();
            $('.email span').append(response.email);

            if (response.permissao == 0) {
                $('.view-acesso span').css('background','var(--red-color)');
            } 

            if (response.permissao == 1) {
                $('.view-acesso span').css('background','#2da854');
            } 

            if (response.permissao == 2) {
               
                $('.view-acesso span').css('background','#cb1fd1');
            } 

        }
    });


}

function getColaborador() {
    var dados = {
        tabela: 'colaborador'
    }

    var dadosJson = JSON.stringify(dados);

    $.ajax({
        url: '../backend/controllers/getColaborador.php',
        method: 'post',
        data: { data: dadosJson },
        dataType: 'json',
        success: function (response) {
            console.log(response);

            var tam = response.length;
            $('.funcionarios-table').empty();

            for (var i = 0; i < tam; i++) {
                if (response[i].permissao == 0) {
                    var acesso = 'Não Permitido';
                    
                } 
                if (response[i].permissao == 1) {
                    var acesso = 'Permitido';
                } 

                if (response[i].permissao == 2) {
                    var acesso = 'Acesso Total';
                } 

                

                $('.funcionarios-table').append('<div class="col-card">'
                    + '<div class="col-dados">'
                    + '<div class="colaborador">'
                    + '<div class="perfil">'
                    + '<p>' + response[i].nome_completo[0] + '</p>'
                    + '</div>'
                    + '<div class="name-info-text">'
                    + '<p class="col-name">' + response[i].nome_completo + '</p>'
                    + '<p class="col-tipo">' + response[i].tipo + '</p>'
                    + '</div>'
                    + '</div>'
                    + '<div class="situacao">'
                    + '<p>Situação: <span>' + response[i].situacao + '</span></p>'
                    + '</div>'
                    + '<div class="acesso">'
                    + '<p>Acesso: <span id="acesso'+response[i].id+'">' + acesso + '</span></p>'
                    + '</div>'
                    + '</div>'
                    + '<div class="col-action">'
                    + '<div class="actions">'
                    + '<button class="view-produto" onclick="getOneColaborador(' + response[i].id + ')">'
                    + '<i class="bx bx-chevron-left"></i></button>'
                    + '<button onclick= "getUpdateColaborador(' + response[i].id + ')"><i class="bx bxs-edit"></i></button>'
                    + '<button class="delete" onclick="deleteColaborador(' + response[i].id + ')"><i class="bx bxs-trash-alt"></i></button>'
                    + '</div>'
                    + '<div class="select-agroup">'
                    + '<label class="action-btn" onclick="updateAcesso('+response[i].id+','+response[i].permissao+')">Alterar Acesso <i class="bx bxs-chevron-down"></i> </label>'
                    + '</div>'
                    + '</div>'
                    + '</div>');

                    if (response[i].permissao == 0) {
                        $('#acesso'+response[i].id).css('background','var(--red-color)');
                    } 

                    if (response[i].permissao == 1) {
                        $('#acesso'+response[i].id).css('background','#2da854');
                    } 

                    if (response[i].permissao == 2) {
                       
                        $('#acesso'+response[i].id).css('background','#cb1fd1');
                    } 



            }
        }

    })
}

getColaborador();