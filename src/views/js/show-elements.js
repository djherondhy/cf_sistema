
function showCarrinho(){
    $('#menu-carrinho').click(function(){
        $('.side-cart').delay('300').slideToggle('slow');
    })
}

function showMorePedido(pedidoid){
  
        $('#pedido-content'+pedidoid).delay('300').slideToggle('slow');
       
}

showCarrinho();
