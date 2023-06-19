//home-cliente
$('.side-cart').hide();//esconde carrinho
$('.pedido-content').hide();
$('.side-pedido').hide();
$('.notificacao-modal').hide();

//painel-produtos
$('.secoes').hide();
$('.cadastro-container').hide();
$('.carrinho').hide();

$('.confirm-container ').hide();
$('.filtro-container').hide();
$('.produto-detalhes').hide();
$('.secao-container').hide();

$('.fornecedores-container').hide();
$('.fornecedor-cadastro').hide();
$('.detalhes-container').hide();


$('.endereco-container').hide();
//fecha notificacao se clicar fora
$('#pedido-enderecos').hide();

$('.pedido-container').hide();

//scroll produtos home
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


//Painel do entregador

$('.historico-pedido').hide();
$('.detalhe-pedido').hide();


  $('.popup').hide();


  
