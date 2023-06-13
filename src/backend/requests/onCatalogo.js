
function ativarCatalogo(_id){

    var dados = {
        tabela: 'medicamentos',
        id: _id
    }

    var dadosJson = JSON.stringify(dados);

    $.ajax({
        url: '../backend/controllers/getOne.php',
        method: 'POST',
        data: {data: dadosJson},
        dataType: 'json',
        success: function(response){
            console.log(response.onCatalogo);
            //caso já esteja no catálogo
            if(response.onCatalogo){
                $('#slider'+response.id_medicamento).removeClass('check');
                $('#checkbox'+response.id_medicamento).removeClass('purple');

                var dados = {
                    id: _id,
                    valor: 0
                }
                var dadosJson = JSON.stringify(dados);

                $.ajax({
                    url: '../backend/controllers/updateCatalogo.php',
                    method: 'POST',
                    data:{data: dadosJson},
                    dataType: 'json',
                    success: function(response){
                        console.log(response);
                    }
                });


            }else{
                $('#slider'+response.id_medicamento).addClass('check');
                $('#checkbox'+response.id_medicamento).addClass('purple');

                var dados = {
                    id: _id,
                    valor: 1
                }
                var dadosJson = JSON.stringify(dados);

                $.ajax({
                    url: '../backend/controllers/updateCatalogo.php',
                    method: 'POST',
                    data:{data: dadosJson},
                    dataType: 'json',
                    success: function(response){
                        console.log(response);
                    }
                });

            }
        },
        error: function(status, error){
            console.log(error);
        }
    });
}