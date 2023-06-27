
$('#perfil').mouseenter(function(){
    $('#alter-perfil').css('display', 'inline');
    $('#alter-perfil').css('z-index', '500');
})

$('#perfil').mouseleave(function(){
    $('#alter-perfil').css('display', 'none');
})

$('#previewImagem').hide();


$('#input-perfil').change(function(){
    var file = this.files[0];
    var reader = new FileReader();
   
    $('#previewImagem').show();
    reader.onload = function(e){
        $('#previewImagem').attr('src', e.target.result);
    }
   
    reader.readAsDataURL(file);
});

$('#perfil-form').submit(function(e){
    e.preventDefault();

    var formData = new FormData();
    var arquivo = $('#input-perfil')[0].files[0];

    formData.append('imagem',arquivo);
    formData.append('id',user_id);

    console.log();

    $.ajax({
        url: '../backend/controllers/updateUserPerfil.php',
        method: 'POST',
        data: formData,
        processData: false,
        contentType: false,
        success: function(response){
            console.log(response);
            $('.perfil-container').fadeOut('slow');
        },
        error: function(xhr, status, error){
            console.log(error);
        }
    });


})