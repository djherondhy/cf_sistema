//Fecha Historico de Pedidos entregador

$('#close-historico').click(function () {
        $('.historico-pedido').delay('300').slideToggle('slow');
})

$('#bnt-historico').click(function () {
        $('.historico-pedido').delay('300').slideToggle('slow');
})

$('#close-detalhe').click(function () {
        $('.detalhe-pedido').delay('300').slideToggle('slow');
})

$('#pedido-info').click(function () {
        $('.detalhe-pedido').delay('300').slideToggle('slow');
})



//mostrar mais pedido Home Cliente
function showMorePedido(pedidoid) {
        $('#pedido-content' + pedidoid).delay('300').slideToggle('slow');
}
//exibe pedidos na lateral

//fecha carrinho
$('#close-pedidos').click(function () {
        $('.side-pedido').delay('300').slideToggle('slow');
})

//fecha carrinho
$('#close-carrinho').click(function () {
        $('.carrinho').delay('300').fadeOut('slow');
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

$('#close-prodcad').click(function () {
        $('.cadastro-container').fadeOut('slow');
});

$('#close-secaocad').click(function () {
        $('.secao-container').fadeOut('slow');
});

$('#btn-novasecao').click(function () {
        $('.secao-container').fadeIn('slow');
})
$('#btn-novoproduto').click(function () {
        $('.cadastro-container').fadeIn('slow');
})

$('#btn-filtroProdutos').click(function () {
        $('.filtro-container').fadeIn('slow');
})

$('#close-filtroProd').click(function () {
        $('.filtro-container').fadeOut('slow');
})

$('#close-detalhes').click(function () {
        $('.produto-detalhes').fadeOut('slow');
})

$('#close-fornecedores').click(function () {
        $('.fornecedores-container').fadeOut('slow');
})

$('#btn-fornecedores').click(function () {
        $('.fornecedores-container').fadeIn('slow');
})

$('#btn-novoFornecedor').click(function () {
        $('.fornecedor-cadastro').fadeIn('slow');
})

$('#close-fornCad').click(function () {
        $('.fornecedor-cadastro').fadeOut('slow');
})

$('.add-endereco').click(function () {
        $('.endereco-container').fadeIn('slow');
});

$('#close-endereco').click(function () {
        $('.endereco-container').fadeOut('slow');
});


$('#close-pedidoForm').click(function () {
        $('.pedido-container').fadeOut('slow');
});

function closePopup() {
        $('.popup').fadeOut('slow');
}

function showCarrinho(lock) {
        if (lock) {
                $('.popup').fadeIn('slow');
                $('.popup-message').remove();
                $('.popup').prepend('<p class="popup-message">Faça login para acessar o carrinho!</p>');
        } else {
                $('.carrinho').fadeToggle('slow');
        }

}


function showPedido(lock) {
        if (lock) {
                $('.popup').fadeIn('slow');
                $('.popup-message').remove();
                $('.popup').prepend('<p class="popup-message">Faça login para acessar os pedidos!</p>');
        } else {
                $('.side-pedido').fadeToggle('slow');
        }

}