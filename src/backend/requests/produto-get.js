
function getProdutos(){
    $.ajax({
        url : '../backend/controllers/get.php',
        method : 'POST',
        data: {tabela : 'medicamentos'},
        dataType: 'json',
        success: function(response){
            console.log(response);
            $('.produtos-table .produto-card').remove();
            var length = response.length;

            if(length == 0){
                $('.produtos-table').append('<div class="produto-card">'
                +'<div class="text-agroup">'
                +'<p class="produto-id"> <i class="bx bxs-basket"></i>Nenhum Produto Registrado</p>'
                +'</div>'
                +'</div>');
            }

           

            for(var i = 0; i< length; i++){

             
              

                $('.produtos-table').append('<div class="produto-card">'
                +'<div class="text-agroup">'
                +'<p class="produto-id"> <i class="bx bxs-basket"></i> Produto #'+response[i].id_medicamento+'</p>'
                +'<p class="produto-nome">'+response[i].nome_comercial+'</p>'
                +'<div class="tags">'
                +'<p class="tag-card">'
                +'<i class="bx bxs-capsule"></i>'
                +''+response[i].categoria+''
                +'</p>'
                +'<p class="tag-card">'
                +'x'+response[i].quantidade+''
                +'</p>'
                +'<p class="tag-card">'
                +'R$ '+response[i].preco+''
                +'</p>'
                +'<p class="tag-card">'
                +''+response[i].secao+''
                +'</p>'
                +'</div>'
                +'<div class="onCatalogo">'
                +'<p>Disponível no Catálogo</p>'
                +' <div class="checkbox" id="checkbox'+response[i].id_medicamento+'" onclick="ativarCatalogo('+response[i].id_medicamento+')">'
                +'<span id="slider'+response[i].id_medicamento+'" class="">.</span>'
                +'</div>'
                +'</div>'
                +'</div>'
                +'<div class="produto-card-buttons">'
                +'<button class="view-produto" onclick="getMedicamento('+response[i].id_medicamento+')">'
                +'<i class="bx bx-chevron-left"></i>'
                +'</button>'
                +'<button onclick="getUpdateProduto('+response[i].id_medicamento+')"><i class="bx bxs-edit"></i></button>'
                +'<button class="delete" onclick="deleteProdutos('+response[i].id_medicamento+')"><i class="bx bxs-trash-alt"></i></button>'
                +'</div>'
                +'</div>');

                if(response[i].onCatalogo == 1){
                    $('#slider'+response[i].id_medicamento).addClass('check');
                    $('#checkbox'+response[i].id_medicamento).addClass('purple');
                }else{
                    $('#slider'+response[i].id_medicamento).removeClass('check');
                    $('#checkbox'+response[i].id_medicamento).removeClass('purple');
                }

               
            }
             
        },
        error: function(status, error){
            console.log(error);
        }
    });
}

getProdutos();

