

$('#ordem-select').change(function(){

    var dados = {
        tabela: 'medicamentos',
        order: $('#ordem-select').val(),
        categoria: $('#categoria-select').val(),
        secao: $('#secao-select').val()
    }

    var dadosJson = JSON.stringify(dados);

    $.ajax({
        url: '../backend/controllers/filter.php',
        method: 'POST',
        data: {data: dadosJson},
        dataType: 'json',
        success: function(response){
            console.log(response);
            $('#produtos-table tr').slice(1).remove();
            var length = response.length;
            
            for(var i = 0; i< length; i++){
                $('.produtos-table table').append('<tr>'
                +'<td>'
                +'<p>#'+response[i].id_medicamento+'</p>'
                +'</td>'
                +'<td>'
                +'<p>'+response[i].nome_comercial+'</p>'
                +'</td>'
                +'<td>'
                +'<p>'+response[i].secao+'</p>'
                +'</td>'
                +'<td>'
                +'<p>'+response[i].categoria+'</p>'
                +'</td>'
                +'<td>'
                +'<p>x'+response[i].quantidade+'</p>'
                +'</td>'
                +'<td class"action">'
                +'<button><i class="bx bx-chevron-left"></i></button>'
                +'<button><i class="bx bxs-edit"></i></button>'
                +'<button class="delete" onclick="deleteProdutos('+response[i].id_medicamento+')"><i class="bx bxs-trash-alt"></i></button>'
                +'</td>'
                +'</tr>');
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
        secao: $('#secao-select').val()
    }

    var dadosJson = JSON.stringify(dados);

    $.ajax({
        url: '../backend/controllers/filter.php',
        method: 'POST',
        data: {data: dadosJson},
        dataType: 'json',
        success: function(response){
            console.log(response);
            $('#produtos-table tr').slice(1).remove();
            var length = response.length;
            
            for(var i = 0; i< length; i++){
                $('.produtos-table table').append('<tr>'
                +'<td>'
                +'<p>#'+response[i].id_medicamento+'</p>'
                +'</td>'
                +'<td>'
                +'<p>'+response[i].nome_comercial+'</p>'
                +'</td>'
                +'<td>'
                +'<p>'+response[i].secao+'</p>'
                +'</td>'
                +'<td>'
                +'<p>'+response[i].categoria+'</p>'
                +'</td>'
                +'<td>'
                +'<p>x'+response[i].quantidade+'</p>'
                +'</td>'
                +'<td class"action">'
                +'<button><i class="bx bx-chevron-left"></i></button>'
                +'<button><i class="bx bxs-edit"></i></button>'
                +'<button class="delete" onclick="deleteProdutos('+response[i].id_medicamento+')"><i class="bx bxs-trash-alt"></i></button>'
                +'</td>'
                +'</tr>');
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
        secao: $('#secao-select').val()
    }

    var dadosJson = JSON.stringify(dados);

    $.ajax({
        url: '../backend/controllers/filter.php',
        method: 'POST',
        data: {data: dadosJson},
        dataType: 'json',
        success: function(response){
            console.log(response);
            $('#produtos-table tr').slice(1).remove();
            var length = response.length;
            
            for(var i = 0; i< length; i++){
                $('.produtos-table table').append('<tr>'
                +'<td>'
                +'<p>#'+response[i].id_medicamento+'</p>'
                +'</td>'
                +'<td>'
                +'<p>'+response[i].nome_comercial+'</p>'
                +'</td>'
                +'<td>'
                +'<p>'+response[i].secao+'</p>'
                +'</td>'
                +'<td>'
                +'<p>'+response[i].categoria+'</p>'
                +'</td>'
                +'<td>'
                +'<p>x'+response[i].quantidade+'</p>'
                +'</td>'
                +'<td class"action">'
                +'<button><i class="bx bx-chevron-left"></i></button>'
                +'<button><i class="bx bxs-edit"></i></button>'
                +'<button class="delete" onclick="deleteProdutos('+response[i].id_medicamento+')"><i class="bx bxs-trash-alt"></i></button>'
                +'</td>'
                +'</tr>');
            }

        },
        error: function(status, error){
            console.log(error);
        }
    });
});