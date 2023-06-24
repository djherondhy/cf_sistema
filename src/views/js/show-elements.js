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

$('#setaR').click(function () {
        $('#title-painel-pronto').delay('100').fadeToggle();
        $('#setaR').delay('100').fadeToggle();
        $('#list-pronto-entrega').delay('100').fadeToggle();

        $('#title-painel-entrega').delay('400').fadeToggle('slow');
        $('#setaL').delay('400').fadeToggle('slow');
        $('#list-em-entrega').delay('400').fadeToggle('slow');

  $('#setaR').css('display', 'flex');
        $('#setaL').css('display', 'none');
        
})

$('#setaL').click(function () {
        $('#title-painel-entrega').delay('100').fadeToggle();
        $('#setaL').delay('100').fadeToggle();
        $('#list-em-entrega').delay('100').fadeToggle();

        $('#title-painel-pronto').delay('400').fadeToggle('slow');
        $('#setaR').delay('400').fadeToggle('slow');   
        $('#list-pronto-entrega').delay('400').fadeToggle('slow');

        $('#setaR').css('display', 'none');
        $('#setaL').css('display', 'flex');

        
})

$(window).resize(function() {
       
        var ementrega = document.getElementById('list-em-entrega');
        var pronto = document.getElementById('list-pronto-entrega');
        var setaR  = document.getElementById('setaR');
        var setaL  = document.getElementById('setaL');
        var tamanhoAtual = $(window).width();
      
        // Verifica se o tamanho atual da tela corresponde ao tamanho desejado
        if (tamanhoAtual > 660) {
                        $('#list-em-entrega').css('display', 'flex');
                        $('#list-pronto-entrega').css('display', 'flex');
                        $('#title-painel-pronto').css('display', 'flex');
                        $('#title-painel-entrega').css('display', 'flex');
                        $('#setaR').css('display', 'none');
                        $('#setaL').css('display', 'none');             
        }
         else{
                $('#list-em-entrega').css('display', 'none');
                $('#title-painel-entrega').css('display', 'none');
                $('#setaR').css('display', 'flex');

         }
        
        
      });
          
          
          
                      
         



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