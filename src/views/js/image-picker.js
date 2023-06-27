$('#previewProduto').hide();

$('#imagem').change(function(){
    var file = this.files[0];
    var reader = new FileReader();
   
    $('#previewProduto').show();
    reader.onload = function(e){
        $('#previewProduto').attr('src', e.target.result);
    }
   
    reader.readAsDataURL(file);
});


