
$('.side-cart').hide();//esconde carrinho
$('.pedido-content').hide();
$('.side-pedido').hide();
$('.notificacao-modal').hide();

//fecha carrinho
$('#close-pedidos').click(function(){
    $('.side-pedido').delay('300').slideToggle('slow');
})

//fecha carrinho
$('#close-carrinho').click(function(){
    $('.side-cart').delay('300').slideToggle('slow');
})

//abre e fecha notificacao
$('#notificacao-btn').click(function(){
    $('.notificacao-modal').delay('300').slideToggle('slow');
})

//fecha notificacao se clicar fora



  $('.left-btn').click(function(){
    $('.product-list').animate({
        scrollLeft: "-=200px"
    }, "slow");
  })

    
  $('.right-btn').click(function(){
   
    $('.product-list').animate({
        scrollLeft: "+=200px"
    }, "slow");
  })
