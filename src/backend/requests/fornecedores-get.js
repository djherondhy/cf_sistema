
function moreFornecedor(id){
    $('#fornecedor'+id).slideToggle('slow');
}
function getFornecedores(){
    
    $.ajax({
        url: '../backend/controllers/get.php',
        method: 'post',
        data: {tabela: 'fornecedores'},
        dataType: 'json',
        success: function(response){
           $('.fornecedores-table .fornecedor-card').remove();

           var length = response.length;
            if(length == 0){
                $('.fornecedores-table').append(''
                +'<div class="fornecedor-card v-align">'
                +'<p><i class="bx bxs-truck"></i> Nenhum Fornecedor Cadastrado</p>'
                +'</div>');
           }
            
           for(var i = 0; i< length; i++){
            $('.fornecedores-table').append(''
                +'<div class="fornecedor-card v-align">'
                +'<div class="card-agroup h-align">'
                +'<div class="info">'
                +'<p class="fornecedor-name">'+response[i].nome_fantasia+'</p>'
                +'<p class="fornecedor-cnpj">'+response[i].cnpj+'</p>'
                +'</div>'
                +'<div class="card-action">'
                +'<button class="view-fornecedor" onclick="moreFornecedor('+response[i].codigo+')"><i class="bx bx-expand-vertical"></i></button>'
                +'<button><i class="bx bxs-edit"></i></button>'
                +'<button class="delete" onclick="deleteFornecedor('+response[i].codigo+')"><i class="bx bxs-trash-alt"></i></button>'
                +'</div>'
                +'</div>'
                +'<div class="card-most hidden" id="fornecedor'+response[i].codigo+'">'
                +'<p class="card-title"> Informações</p>'
                +'<p> <i class="bx bxs-envelope"></i> '+response[i].email+'</p>'
                +'<p><i class="bx bxs-phone"></i>'+response[i].telefone+'</p>'
                +'<p><i class="bx bxs-location-plus"></i> '+response[i].endereco+'</p>'
                +'</div>'
                +'</div>');
           }

           $('.hidden').hide();
          
        }
       
       
    });
    
}



getFornecedores();
