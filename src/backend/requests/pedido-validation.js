
$('#forma_recebimento').change(function(){
    
    var valor = $('#forma_recebimento').val();

    if(valor === 'Entrega'){
        $('#pedido-enderecos').slideDown('slow');
    }else{
        $('#pedido-enderecos').slideUp('slow');
    }
    
})


$('#forma_pagamento').change(function(){
    
    var valor = $('#forma_pagamento').val();

    if(valor === 'Dinheiro'){
        $('#pedido-troco').slideDown('slow');
    }else{
        $('#pedido-troco').slideUp('slow');
    }
    
})