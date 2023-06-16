
//exibe carrinho na lateral
$('#menu-carrinho').click(function () {
        $('.side-cart').delay('300').slideToggle('slow');
})

//mostrar mais pedido Home Cliente
function showMorePedido(pedidoid) {
        $('#pedido-content' + pedidoid).delay('300').slideToggle('slow');
}
//exibe pedidos na lateral
$('#menu-pedidos').click(function () {
        $('.side-pedido').delay('300').slideToggle('slow');
})
//fecha carrinho
$('#close-pedidos').click(function () {
        $('.side-pedido').delay('300').slideToggle('slow');
})

//fecha carrinho
$('#close-carrinho').click(function () {
        $('.side-cart').delay('300').slideToggle('slow');
})

//fecha detalhes
$('#close-detalhes').click(function () {
        $('.detalhes-container').delay('300').fadeOut('slow');
})

//abre e fecha notificacao
$('#notificacao-btn').click(function () {
        $('.notificacao-modal').delay('300').slideToggle('slow');
})

$('#btn-secoes').click(function () {
        $('.secoes').slideToggle('slow');
})

$('#close-secoes').click(function () {
        $('.secoes').slideToggle('slow');
})

$('#close-prodcad').click(function(){
        $('.cadastro-container').fadeOut('slow');
});

$('#close-secaocad').click(function(){
        $('.secao-container').fadeOut('slow');
});

$('#btn-novasecao').click(function(){
        $('.secao-container').fadeIn('slow');
})
$('#btn-novoproduto').click(function(){
        $('.cadastro-container').fadeIn('slow');
})

$('#btn-filtroProdutos').click(function(){
        $('.filtro-container').fadeIn('slow');
})

$('#close-filtroProd').click(function(){
        $('.filtro-container').fadeOut('slow');
})

$('#close-detalhes').click(function(){
        $('.produto-detalhes').fadeOut('slow');
})