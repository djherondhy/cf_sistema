

$('#ordem-select').change(function(){

    var dados = {
        tabela: 'medicamentos',
        order: $('#ordem-select').val(),
        categoria: $('#categoria-select').val(),
        secao: $('#secao-select').val(),
        busca: $('#produto-busca').val()
    }

    var dadosJson = JSON.stringify(dados);

    $.ajax({
        url: '../backend/controllers/filter.php',
        method: 'POST',
        data: {data: dadosJson},
        dataType: 'json',
        success: function(response){
            console.log(response);
            var length = response.length;
            if(length == 0){
                $('.produtos-table').append('<div class="produto-card">'
                +'<div class="text-agroup">'
                +'<p class="produto-id"> <i class="bx bxs-basket"></i>Nenhum Produto Encontrado</p>'
                +'</div>'
                +'</div>');
            }
            $('.produtos-table .produto-card').remove();
            for(var i = 0; i< length; i++){
            $('.produtos-table').append('<div class="produto-card">'
                +'<div class="text-agroup">'
                +'<p class="produto-id"> <i class="bx bxs-basket"></i> Produto #'+response[i].id_medicamento+'</p>'
                +'<p class="produto-nome">'+response[i].nome_comercial+'</p>'
                +'<div class="tags">'
                +'<p class="tag-card">'
                +'<i class="bx bxs-capsule"></i>'
                +'Genérico'
                +'</p>'
                +'<p class="tag-card">'
                +'x12'
                +'</p>'
                +'<p class="tag-card">'
                +'R$ 75.08'
                +'</p>'
                +'<p class="tag-card">'
                +'AB-123'
                +'</p>'
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
            }

        },
        error: function(status, error){
            console.log(error);
        }
    });
});


$('#secao-select').change(function(){

    var dados = {
        tabela: 'medicamentos',
        order: $('#ordem-select').val(),
        categoria: $('#categoria-select').val(),
        secao: $('#secao-select').val(),
        busca: $('#produto-busca').val()
    }

    var dadosJson = JSON.stringify(dados);

    $.ajax({
        url: '../backend/controllers/filter.php',
        method: 'POST',
        data: {data: dadosJson},
        dataType: 'json',
        success: function(response){
            console.log(response);
          

            $('.produtos-table .produto-card').remove();
            var length = response.length;
            console.log(response.length);
            if(length == 0){
                $('.produtos-table').append('<div class="produto-card">'
                +'<div class="text-agroup">'
                +'<p class="produto-id"> <i class="bx bxs-basket"></i>Nenhum Produto Encontrado</p>'
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
                +'Genérico'
                +'</p>'
                +'<p class="tag-card">'
                +'x12'
                +'</p>'
                +'<p class="tag-card">'
                +'R$ 75.08'
                +'</p>'
                +'<p class="tag-card">'
                +'AB-123'
                +'</p>'
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

            }

        },
        error: function(status, error){
            console.log(error);
        }
    });
});

$('#produto-busca').on('input', function(){
    
    var dados = {
        tabela: 'medicamentos',
        order: $('#ordem-select').val(),
        categoria: $('#categoria-select').val(),
        secao: $('#secao-select').val(),
        busca: $('#produto-busca').val()
    }

    var dadosJson = JSON.stringify(dados);

    $.ajax({
        url: '../backend/controllers/filter.php',
        method: 'POST',
        data: {data: dadosJson},
        dataType: 'json',
        success: function(response){
            console.log(response);
            $('.produtos-table .produto-card').remove();
            var length = response.length;

            console.log(response.length);
            if(length == 0){
                $('.produtos-table').append('<div class="produto-card">'
                +'<div class="text-agroup">'
                +'<p class="produto-id"> <i class="bx bxs-basket"></i>Nenhum Produto Encontrado</p>'
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
                    +'Genérico'
                    +'</p>'
                    +'<p class="tag-card">'
                    +'x12'
                    +'</p>'
                    +'<p class="tag-card">'
                    +'R$ 75.08'
                    +'</p>'
                    +'<p class="tag-card">'
                    +'AB-123'
                    +'</p>'
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
    
                
            }

        },
        error: function(status, error){
            console.log(error);
        }
    });
});

$('#categoria-select').change(function(){

    var dados = {
        tabela: 'medicamentos',
        order: $('#ordem-select').val(),
        categoria: $('#categoria-select').val(),
        secao: $('#secao-select').val(),
        busca: $('#produto-busca').val()
    }

    var dadosJson = JSON.stringify(dados);

    $.ajax({
        url: '../backend/controllers/filter.php',
        method: 'POST',
        data: {data: dadosJson},
        dataType: 'json',
        success: function(response){
            console.log(response);
            $('.produtos-table .produto-card').remove();
            var length = response.length;

            console.log(response.length);
            if(length == 0){
                $('.produtos-table').append('<div class="produto-card">'
                +'<div class="text-agroup">'
                +'<p class="produto-id"> <i class="bx bxs-basket"></i>Nenhum Produto Encontrado</p>'
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
                    +'Genérico'
                    +'</p>'
                    +'<p class="tag-card">'
                    +'x12'
                    +'</p>'
                    +'<p class="tag-card">'
                    +'R$ 75.08'
                    +'</p>'
                    +'<p class="tag-card">'
                    +'AB-123'
                    +'</p>'
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
    
                
            }

        },
        error: function(status, error){
            console.log(error);
        }
    });
});