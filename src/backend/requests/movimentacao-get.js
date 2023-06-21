

function getMovimentacao(){
  

    var dados = {
       data: '%%',
       status: '%%'
    }
   
    var dadosJson = JSON.stringify(dados);



    $.ajax({
        url: '../backend/controllers/getMovimentacao.php',
        method: 'POST',
        data: {data: dadosJson},
        dataType: 'json',
        success: function(response){
            var tam = response.length;

            for(var i = 0; i<tam; i++){
                if(response[i].tipo == 1){
                    var mov = '+'
                }else{
                    var mov = '-'
                }

                $('.mov-list').append('<div class="mov-card">'
                +'<div class="mov-card-info">'
                    +'<p class="mov-cod"><i class="bx bx-transfer-alt"></i>Movimentação #'+response[i].id_movimentacao+'</p>'
                    +'<p class="mov-data">'+response[i].data+'</p>'
                    +'<p class="mov-produto"><i class="bx" id="mov'+response[i].id_movimentacao+'"></i> Produto #'+response[i].id_produto+' '+mov+''+response[i].quantidade+' Unidades - '+response[i].nome_comercial+' </p>'
                    +'<p class="mov-descricao"><i class="bx bx-detail"></i>'+response[i].descricao+'</p>'
                +'</div>'
                +'<div class="mov-card-action">'
                    +'<button><i class="bx bx-trash-alt"></i></button>'
                    +'<button><i class="bx bxs-edit"></i></button>'
                +'</div>'
            +'</div>');

            if(response[i].tipo == 1){
                $('#mov'+response[i].id_movimentacao).addClass('bx-right-arrow-alt entrada');
            }else{
                $('#mov'+response[i].id_movimentacao).addClass('bx-left-arrow-alt saida');
            }

            }
        },
        error: function(status, error){
            console.log(error);
        }
    })
}


getMovimentacao();