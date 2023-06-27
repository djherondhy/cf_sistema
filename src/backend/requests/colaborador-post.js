
// formata telefone
$('#col-tel').on('input', function () {
    var telefone = $(this).val();
    telefone = telefone.replace(/\D/g, '');
    telefone = telefone.replace(/^(\d{2})(\d)/g, '($1) $2');
    telefone = telefone.replace(/(\d)(\d{4})$/, '$1-$2');
    $(this).val(telefone);

   

});

$('#col-cpf').on('input', function () {
    var cpf = $(this).val();
    cpf = cpf.replace(/\D/g, ''); // Remove todos os caracteres não numéricos
    cpf = cpf.replace(/^(\d{3})(\d)/g, '$1.$2'); // Adiciona um ponto após os primeiros 3 dígitos
    cpf = cpf.replace(/^(\d{3})\.(\d{3})(\d)/g, '$1.$2.$3'); // Adiciona um ponto após os próximos 3 dígitos
    cpf = cpf.replace(/(\d{3})(\d{1,2})$/, '$1-$2'); // Adiciona um hífen antes dos últimos 2 dígitos
    $(this).val(cpf);
});

$('#col-cnh').on('input', function () {
    var cnh = $(this).val();
    cnh = cnh.replace(/\D/g, ''); // Remove todos os caracteres não numéricos
    $(this).val(cnh);
});

$('#col-ctps').on('input', function() {
    var ctps = $(this).val();
    ctps = ctps.replace(/\D/g, ''); // Remove todos os caracteres não numéricos
    ctps = ctps.replace(/^(\d{2})(\d)/g, '$1.$2'); // Adiciona um ponto após os primeiros 2 dígitos
    ctps = ctps.replace(/^(\d{2})\.(\d{3})(\d)/g, '$1.$2.$3'); // Adiciona um ponto após os próximos 3 dígitos
    ctps = ctps.replace(/(\d{2})\.(\d{3})\.(\d{3})(\d)/g, '$1.$2.$3-$4'); // Adiciona um hífen antes do último dígito
    $(this).val(ctps);
  });


$('#colaborador-form').submit(function (e) {
    e.preventDefault();

    var dados = {
        nome_completo: $('#col-nome').val(),
        tipo: $('#col-tipo').val(),
        situacao: $('#col-situacao').val(),
        email: $('#col-email').val(),
        telefone: $('#col-tel').val(),
        cpf: $('#col-cpf').val(),
        cnh: $('#col-cnh').val(),
        ctps: $('#col-ctps').val(),
    }
    var dadosJson = JSON.stringify(dados);

    $.ajax({
        url: '../backend/controllers/postColaborador.php',
        method: 'post',
        data: {data: dadosJson},
        dataType: 'json',
        success: function(response){
           $('.colaborador-container').fadeOut('slow');
           getColaborador();
        }
    })
})