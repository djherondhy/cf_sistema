
$('.side-cart').hide();//esconde carrinho
$('.pedido-content').hide();
$('.side-pedido').hide();

$('#close-pedidos').click(function(){
    $('.side-pedido').delay('300').slideToggle('slow');
})

$('#close-carrinho').click(function(){
    $('.side-cart').delay('300').slideToggle('slow');
})
