
$('#secao-edit').submit(function(e){
    
    e.preventDefault();

    var dados = {
        id:  $('#edit-secao-id').val(),
        codigo: $('#edit-secao-codigo').val(),
        localizacao:  $('#edit-localizacao').val()
    }

    var dadosJson = JSON.stringify(dados);

    $.ajax({
        url: '../backend/controllers/updateSecao.php',
        method: 'post',
        data: {data: dadosJson},
        dataType: 'json',
        success: function(response){
        $('.edit-secao-container').fadeOut('slow');
        getSecao();
        console.log(response);
        }
    });


})


function getSecaoUpdate(id_secao){

    var dados = {
        tabela: 'secao',
        coluna: 'id_secao',
        id: id_secao
    }

    var dadosJson = JSON.stringify(dados);

    $('.edit-secao-container').fadeIn('slow');

   $.ajax({
    url: '../backend/controllers/getOne.php',
    method: 'post',
    data: {data: dadosJson},
    dataType: 'json',
    success: function(response){
        $('#edit-secao-codigo').val(response.codigo);
        $('#edit-secao-id').val(response.id_secao);
        $('#edit-localizacao').val(response.localizacao);
    }
   });
}

