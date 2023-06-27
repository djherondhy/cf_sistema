
// formata telefone
$('#edit-col-tel').on('input', function () {
    var telefone = $(this).val();
    telefone = telefone.replace(/\D/g, '');
    telefone = telefone.replace(/^(\d{2})(\d)/g, '($1) $2');
    telefone = telefone.replace(/(\d)(\d{4})$/, '$1-$2');
    $(this).val(telefone);



});

$('#edit-col-cpf').on('input', function () {
    var cpf = $(this).val();
    cpf = cpf.replace(/\D/g, ''); // Remove todos os caracteres não numéricos
    cpf = cpf.replace(/^(\d{3})(\d)/g, '$1.$2'); // Adiciona um ponto após os primeiros 3 dígitos
    cpf = cpf.replace(/^(\d{3})\.(\d{3})(\d)/g, '$1.$2.$3'); // Adiciona um ponto após os próximos 3 dígitos
    cpf = cpf.replace(/(\d{3})(\d{1,2})$/, '$1-$2'); // Adiciona um hífen antes dos últimos 2 dígitos
    $(this).val(cpf);
});

$('#edit-col-cnh').on('input', function () {
    var cnh = $(this).val();
    cnh = cnh.replace(/\D/g, ''); // Remove todos os caracteres não numéricos
    $(this).val(cnh);
});

$('#edit-col-ctps').on('input', function () {
    var ctps = $(this).val();
    ctps = ctps.replace(/\D/g, ''); // Remove todos os caracteres não numéricos
    ctps = ctps.replace(/^(\d{2})(\d)/g, '$1.$2'); // Adiciona um ponto após os primeiros 2 dígitos
    ctps = ctps.replace(/^(\d{2})\.(\d{3})(\d)/g, '$1.$2.$3'); // Adiciona um ponto após os próximos 3 dígitos
    ctps = ctps.replace(/(\d{2})\.(\d{3})\.(\d{3})(\d)/g, '$1.$2.$3-$4'); // Adiciona um hífen antes do último dígito
    $(this).val(ctps);
});




function getUpdateColaborador(_id_colaborador) {

    var dados = {
        id: _id_colaborador,
        tabela: 'colaborador',
        coluna: 'id'
    }

    var dadosJson = JSON.stringify(dados);

    $.ajax({
        url: '../backend/controllers/getOne.php',
        method: 'POST',
        data: { data: dadosJson },
        dataType: 'json',
        success: function (response) {
            $('.edit-colaborador-container').fadeIn('slow');
            $('#edit-col-nome').val(response.nome_completo);
            $('#edit-col-tipo').val(response.tipo);
            $('#edit-col-situacao').val(response.situacao);
            $('#edit-col-email').val(response.email);
            $('#edit-col-tel').val(response.telefone);
            $('#edit-col-cpf').val(response.cpf);
            $('#edit-col-cnh').val(response.cnh);
            $('#edit-col-ctps').val(response.ctps);
            $('#edit-col-id').val(response.id);
        }
    });

}

$('#edit-colaborador-form').submit(function (e) {
    e.preventDefault();

    var dados = {
        id_colaborador: $('#edit-col-id').val(),
        nome_completo: $('#edit-col-nome').val(),
        tipo: $('#edit-col-tipo').val(),
        situacao: $('#edit-col-situacao').val(),
        email: $('#edit-col-email').val(),
        telefone: $('#edit-col-tel').val(),
        cpf: $('#edit-col-cpf').val(),
        cnh: $('#edit-col-cnh').val(),
        ctps: $('#edit-col-ctps').val()
    }

    var dadosJson = JSON.stringify(dados);

    $.ajax({
        url: '../backend/controllers/updateColaborador.php',
        method: 'post',
        data: { data: dadosJson},
        dataType: 'json',
        success: function (response) {
            console.log(response);
            $('.edit-colaborador-container').fadeOut('slow');
        }
    });



})

function updateAcesso(_id_colaborador,_acesso_atual){
    $('.acesso-container').fadeIn('slow');
    $('#acesso-select').val(_acesso_atual);
    $('#id-colaborador').val(_id_colaborador);
}

$('#update-acesso').submit(function(e){
    e.preventDefault();

    var dados = {
        id: $('#id-colaborador').val(),
        permissao:  $('#acesso-select').val()
    }

    var dadosJson = JSON.stringify(dados);

    $.ajax({
        url: '../backend/controllers/updateAcesso.php',
        method: 'post',
        data: {data: dadosJson},
        dataType: 'json',
        success: function(response){
            $('.acesso-container').fadeOut('slow');
            getColaborador();
            console.log(response);
        }
    });


})