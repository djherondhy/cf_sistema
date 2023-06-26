
function compararDatas(data1, data2) {
  const partesData1 = data1.split('/');
  const partesData2 = data2.split('/');
  
  const dia1 = parseInt(partesData1[0], 10);
  const mes1 = parseInt(partesData1[1], 10) - 1;
  const ano1 = parseInt(partesData1[2], 10);
  
  const dia2 = parseInt(partesData2[0], 10);
  const mes2 = parseInt(partesData2[1], 10) - 1;
  const ano2 = parseInt(partesData2[2], 10);

  const dataObjeto1 = new Date(ano1, mes1, dia1);
  const dataObjeto2 = new Date(ano2, mes2, dia2);
  
  if (dataObjeto1 > dataObjeto2) {
    return 1;
  } else if (dataObjeto1 < dataObjeto2) {
    return 2;
  } else {
    return 3;
  }
}

function converterDataHoje(data) {
    const partes = data.split('-');
    const ano = partes[0];
    const mes = partes[1];
    const dia = partes[2];

    return `${dia}/${mes}/${ano}`;
}

function adicionarDias(data, dias) {
    const partes = data.split('/');
    const dia = parseInt(partes[0]);
  const mes = parseInt(partes[1]) - 1; // Os meses no objeto Date começam em zero (janeiro é 0)
  const ano = parseInt(partes[2]);

    const dataObjeto = new Date(ano, mes, dia);
    dataObjeto.setDate(dataObjeto.getDate() - dias);

    const diaNovo = dataObjeto.getDate().toString().padStart(2, '0');
    const mesNovo = (dataObjeto.getMonth() + 1).toString().padStart(2, '0');
    const anoNovo = dataObjeto.getFullYear();


    return `${diaNovo}/${mesNovo}/${anoNovo}`;
}

function MHistorico() {
    var dados = {
        tabela: 'pedido',
        status: 'Entregue',
        forma_recebimento: 'Entrega'
    }
    var dadosJson = JSON.stringify(dados);
    var dataa = new Date();
    var nova = dataa.toLocaleDateString();
    nova =adicionarDias(nova,30);
    


    $.ajax({
        url: '../backend/controllers/getPedidosHistoricoEntregador.php',
        method: 'post',
        data: {
            data: dadosJson
        },
        dataType: 'json',
        success: function (response) {
            console.log(response);
            var length = response.length;

            $('.historico-list .historico-card').remove();
            $('.historico-filter').empty();
            $('.historico-filter').append('' +
                '<button onclick="getPedidosEntregadorHistorico()">Hoje</button>' +
                '<button onclick="SemanaHistorico()">Semana</button>' +
                '<button class="filter-active onclick="MHistorico()" >Mês</button>' +
                '');
                
            for (var i = 0; i < length; i++) {
                 
                if (compararDatas(nova,converterDataHoje(response[i].data))==2) {

                    $('#list-pedidos-history').append('<div class="historico-card" id="historico-card-id">' +
                        '<div class="historico-header">' +
                        '<p class="historico-id"><i class="bx bx-purchase-tag-alt"></i> Pedido #' + response[i].id_pedido + '</p>' +
                        '<p>Subtotal: R$ ' + response[i].subtotal + '</p>' +
                        '</div>' +
                        '' +
                        '<div class="datatime">' +
                        '<p>' + response[i].data + '</p> <p>' + response[i].hora + '</p>' +
                        '</div>' +
                        '' +
                        '<div class="div-esconder' + response[i].id_pedido + '" >' +
                        '<div class="historico-content" >' +
                        '  <p class="historico-title"><i class="bx bx-basket"></i>Itens</p>' +
                        '     <div class="itens-list" id="info-medicamentos-historico' + response[i].id_pedido + '">' +
                        '     </div>' +
                        '</div>' +
                        '' +
                        '<p class="historico-title"><i class="bx bx-home"></i> Endereço</p>' +
                        '<div class="endereco" id="enderecoHistorico' + response[i].id_pedido + '">' +
                        '</div>' +
                        '' +
                        '<div class="pedido-info">' +
                        ' <p class="info-text"> <i class="bx bx-money"></i> ' + response[i].forma_pagamento + '</p>' +
                        '</div>' +
                        '</div>' +
                        '  <div class="more-btn" id="more-pedido" onclick="showMorePedido(' + response[i].id_pedido + ')">' +
                        '  <i class="bx bx-expand-vertical"></i>' +
                        ' </div>' +
                        '</div>' +
                        '</div>');
                    $('.div-esconder' + response[i].id_pedido + '').hide();

                    MedicamentosInfo(response[i].id_pedido, 'info-medicamentos-historico' + response[i].id_pedido + '');

                    for (var e = 0; e < length; e++) {
                        if (response[i].cod_endereco == response[e].id_endereco) {
                            $('#enderecoHistorico' + response[i].id_pedido + '').append('' +
                                ' <p>Bairro ' + response[e].bairro + '</p>' +
                                ' <p>' + response[e].logradouro + '</p>' +
                                ' <p>Nº ' + response[e].numero + '</p>' +
                                ' <p>' + response[e].complemento + '</p>'

                            );
                            break;
                        }
                    }
                }
            }
        }
    });
}


function SemanaHistorico() {
    var dados = {
        tabela: 'pedido',
        status: 'Entregue',
        forma_recebimento: 'Entrega'
    }
    var dadosJson = JSON.stringify(dados);
    var dataa = new Date();
    var nova = dataa.toLocaleDateString();
    nova =adicionarDias(nova,7);
    
    
   

    $.ajax({
        url: '../backend/controllers/getPedidosHistoricoEntregador.php',
        method: 'post',
        data: {
            data: dadosJson
        },
        dataType: 'json',
        success: function (response) {
            console.log(response);
            var length = response.length;

            $('.historico-list .historico-card').remove();
            $('.historico-filter').empty();
            $('.historico-filter').append('' +
                '<button " onclick="getPedidosEntregadorHistorico()">Hoje</button>' +
                ' <button class="filter-active onclick="SemanaHistorico()">Semana</button>' +
                ' <button onclick="MHistorico()" >Mês</button>' +
                '');

            for (var i = 0; i < length; i++) {

                if (compararDatas(nova,converterDataHoje(response[i].data))==2) {

                    $('#list-pedidos-history').append('<div class="historico-card" id="historico-card-id">' +
                        '<div class="historico-header">' +
                        '<p class="historico-id"><i class="bx bx-purchase-tag-alt"></i> Pedido #' + response[i].id_pedido + '</p>' +
                        '<p>Subtotal: R$ ' + response[i].subtotal + '</p>' +
                        '</div>' +
                        '' +
                        '<div class="datatime">' +
                        '<p>' + response[i].data + '</p> <p>' + response[i].hora + '</p>' +
                        '</div>' +
                        '' +
                        '<div class="div-esconder' + response[i].id_pedido + '" >' +
                        '<div class="historico-content" >' +
                        '  <p class="historico-title"><i class="bx bx-basket"></i>Itens</p>' +
                        '     <div class="itens-list" id="info-medicamentos-historico' + response[i].id_pedido + '">' +
                        '     </div>' +
                        '</div>' +
                        '' +
                        '<p class="historico-title"><i class="bx bx-home"></i> Endereço</p>' +
                        '<div class="endereco" id="enderecoHistorico' + response[i].id_pedido + '">' +
                        '</div>' +
                        '' +
                        '<div class="pedido-info">' +
                        ' <p class="info-text"> <i class="bx bx-money"></i> ' + response[i].forma_pagamento + '</p>' +
                        '</div>' +
                        '</div>' +
                        '  <div class="more-btn" id="more-pedido" onclick="showMorePedido(' + response[i].id_pedido + ')">' +
                        '  <i class="bx bx-expand-vertical"></i>' +
                        ' </div>' +
                        '</div>' +
                        '</div>');
                    $('.div-esconder' + response[i].id_pedido + '').hide();

                    MedicamentosInfo(response[i].id_pedido, 'info-medicamentos-historico' + response[i].id_pedido + '');

                    for (var e = 0; e < length; e++) {
                        if (response[i].cod_endereco == response[e].id_endereco) {
                            $('#enderecoHistorico' + response[i].id_pedido + '').append('' +
                                ' <p>Bairro ' + response[e].bairro + '</p>' +
                                ' <p>' + response[e].logradouro + '</p>' +
                                ' <p>Nº ' + response[e].numero + '</p>' +
                                ' <p>' + response[e].complemento + '</p>'

                            );
                            break;
                        }
                    }
                }
            }
        }
    });
}




function getPedidosEntregadorHistorico() {
    var dados = {
        tabela: 'pedido',
        status: 'Entregue',
        forma_recebimento: 'Entrega'
    }
    var dadosJson = JSON.stringify(dados);
    var dataa = new Date();

    $.ajax({
        url: '../backend/controllers/getPedidosHistoricoEntregador.php',
        method: 'post',
        data: {
            data: dadosJson
        },
        dataType: 'json',
        success: function (response) {
            console.log(response);
            var length = response.length;

            $('.historico-list .historico-card').remove();
            $('.historico-filter').empty();
            $('.historico-filter').append('' +
                '<button class="filter-active" onclick="getPedidosEntregadorHistorico()">Hoje</button>' +
                ' <button onclick="SemanaHistorico()"> Semana </button>' +
                ' <button onclick="MHistorico()" >Mês</button>' +
                '');

            for (var i = 0; i < length; i++) {

                if (dataa.toLocaleDateString() == converterDataHoje(response[i].data)) {

                    $('#list-pedidos-history').append('<div class="historico-card" id="historico-card-id">' +
                        '<div class="historico-header">' +
                        '<p class="historico-id"><i class="bx bx-purchase-tag-alt"></i> Pedido #' + response[i].id_pedido + '</p>' +
                        '<p>Subtotal: R$ ' + response[i].subtotal + '</p>' +
                        '</div>' +
                        '' +
                        '<div class="datatime">' +
                        '<p>' + response[i].data + '</p> <p>' + response[i].hora + '</p>' +
                        '</div>' +
                        '' +
                        '<div class="div-esconder' + response[i].id_pedido + '" >' +
                        '<div class="historico-content" >' +
                        '  <p class="historico-title"><i class="bx bx-basket"></i>Itens</p>' +
                        '     <div class="itens-list" id="info-medicamentos-historico' + response[i].id_pedido + '">' +
                        '     </div>' +
                        '</div>' +
                        '' +
                        '<p class="historico-title"><i class="bx bx-home"></i> Endereço</p>' +
                        '<div class="endereco" id="enderecoHistorico' + response[i].id_pedido + '">' +
                        '</div>' +
                        '' +
                        '<div class="pedido-info">' +
                        ' <p class="info-text"> <i class="bx bx-money"></i> ' + response[i].forma_pagamento + '</p>' +
                        '</div>' +
                        '</div>' +
                        '  <div class="more-btn" id="more-pedido" onclick="showMorePedido(' + response[i].id_pedido + ')">' +
                        '  <i class="bx bx-expand-vertical"></i>' +
                        ' </div>' +
                        '</div>' +
                        '</div>');
                    $('.div-esconder' + response[i].id_pedido + '').hide();

                    MedicamentosInfo(response[i].id_pedido, 'info-medicamentos-historico' + response[i].id_pedido + '');

                    for (var e = 0; e < length; e++) {
                        if (response[i].cod_endereco == response[e].id_endereco) {
                            $('#enderecoHistorico' + response[i].id_pedido + '').append('' +
                                ' <p>Bairro ' + response[e].bairro + '</p>' +
                                ' <p>' + response[e].logradouro + '</p>' +
                                ' <p>Nº ' + response[e].numero + '</p>' +
                                ' <p>' + response[e].complemento + '</p>'

                            );
                            break;
                        }
                    }
                }
            }
        }
    });
}

function showMorePedido(pedidoid) {
    $('.div-esconder' + pedidoid).delay('300').slideToggle('slow');
}


//FUNÇÃO PARA MOSTRAR OS PEDIDOS APTOS PARA ENTREGA
function getPedidosEntregadorProntoEntrega() {
    var dados = {
        tabela: 'pedido',
        status: 'Apto para entrega'
    }

    var dadosJson = JSON.stringify(dados);


    $.ajax({
        url: '../backend/controllers/getPedidosEntregador.php',
        method: 'post',
        data: {
            data: dadosJson
        },
        dataType: 'json',
        success: function (response) {
            console.log(response);

            $('#list-pronto-entrega').empty();
            var length = response.length;

            for (var i = 0; i < length; i++) {



                $('#list-pronto-entrega').append('<div class="list" id="pronto-entreg" onclick="openPedidoDetalhe(' + response[i].id_pedido + ',1,1)">' +
                    '<div class="info-list">' +
                    ' <h4><i class="bx bxs-shopping-bag"></i>&ensp;Pedido ' + response[i].id_pedido + '&ensp;</h4>' +
                    '<p>' + response[i].hora + ' h</p>' +
                    '</div>' +
                    '<h4><i class="bx bxs-user"></i>&ensp;' + response[i].username + '</h4>' +
                    '<div class="info-list2">' +
                    '<h4>R$     ' + response[i].subtotal + '&ensp;</h4><p>(' + response[i].forma_pagamento + ')</p>' +
                    '</div>' +

                    '</div>');
            }
        }
    });

}




//FUNÇÃO PARA MOSTRAS OS PEDIDOS EM ENTREGA
function getPedidosEntregadorEmEntrega() {

    var dados = {
        tabela: 'pedido',
        status: 'Em entrega'
    }

    var dadosJson = JSON.stringify(dados);

    $.ajax({
        url: '../backend/controllers/getPedidosEntregador.php',
        method: 'post',
        data: {
            data: dadosJson
        },
        dataType: 'json',
        success: function (response) {
            console.log(response);

            $('#list-em-entrega').empty();

            var length = response.length;

            for (var i = 0; i < length; i++) {
                var minutos = response[i].horas

                $('#list-em-entrega').append('<div class="list" id="pronto-entreg" onclick="openPedidoDetalhe(' + response[i].id_pedido + ',2,1)">' +
                    '<div class="info-list">' +
                    ' <h4><i class="bx bxs-shopping-bag"></i>&ensp;Pedido ' + response[i].id_pedido + '&ensp;</h4>' +
                    '<p> ' + response[i].hora + ' h</p>' +
                    '</div>' +
                    '<h4><i class="bx bxs-user"></i>&ensp;' + response[i].username + '</h4>' +
                    '<div class="info-list2">' +
                    '<h4>R$ ' + response[i].subtotal + '&ensp;</h4><p>(' + response[i].forma_pagamento + ')</p>' +
                    '</div>' +
                    '</div>');



            }


        }
    });

}

//FUNÇÃO PARA ATUALIZAR STATUS DE PEDIDO
function updateStatus(_id_pedido, _id_cliente, _status) {
    var dados = {
        id_pedido: _id_pedido,
        id_cliente: _id_cliente,
        status: '',
        message: ''
    }

    if (_status == 1) {
        dados.status = 'Confirmado'
    }

    if (_status == 2) {
        dados.status = 'Apto para Entrega'
    }

    if (_status == 3) {
        dados.status = 'Entregue'
    }

    if (_status == 4) {
        dados.status = 'Cancelado'
    }

    if (_status == 5) {
        dados.status = 'Em Entrega'
    }



    var dadosJson = JSON.stringify(dados);

    $.ajax({
        url: '../backend/controllers/updateStatus.php',
        method: 'post',
        data: {
            data: dadosJson
        },
        dataType: 'json',
        success: function (response) {
            console.log(response);


            getPedidosEntregadorProntoEntrega();
            getPedidosEntregadorEmEntrega();

            $('.detalhe-pedido').delay('300').slideToggle('slow');

        }
    });
}


//FUNÇÃO PARA MOSTRAR DETALHE DOS PEDIDOS
function openPedidoDetalhe(_id_pedido, tipo, state) {

    if (tipo == 1) {
        var dados = {
            tabela: 'pedido',
            status: 'Apto para entrega'
        }
    } else if (tipo == 2) {
        var dados = {
            tabela: 'pedido',
            status: 'Em entrega'
        }
    }
    var id = _id_pedido;
    var dadosJson = JSON.stringify(dados);

    $.ajax({
        url: '../backend/controllers/getPedidosEntregador.php',
        method: 'post',
        data: {
            data: dadosJson
        },
        dataType: 'json',
        success: function (response) {
            console.log(response);

            $('#detalhe-info-pedido .detalhe-card').remove();

            if (state == 1) {
                $('.detalhe-pedido').delay('300').slideToggle('slow');
            }

            var length = response.length;
            for (var i = 0; i < length; i++) {

                if (id == response[i].id_pedido) {
                    $('#detalhe-info-pedido').append('<div class="detalhe-card">' +
                        '' +
                        '<div class="detalhe-header">' +
                        '<p class="detalhe-id"><i class="bx bx-purchase-tag-alt"></i> Pedido #' + response[i].id_pedido + '</p>' +
                        '<p>Subtotal: R$ ' + response[i].subtotal + '</p>' +
                        '</div>' +
                        '' +
                        '<div class="datatime">' +
                        '<p>' + response[i].data + '</p> <p>' + response[i].hora + '</p>' +
                        '</div>' +
                        '' +
                        '<div class="detalhe-content" >' +
                        '  <p class="detalhe-title"><i class="bx bx-basket"></i>Itens</p>' +
                        '     <div class="itens-list" id="info-medicamentos-list">' +
                        '     </div>' +
                        '</div>' +
                        '' +
                        '<p class="detalhe-title"><i class="bx bx-home"></i> Endereço</p>' +
                        '<div class="endereco" id="enderecoid' + response[i].id_pedido + '">' +
                        '</div>' +
                        '<div class="pedido-info">' +
                        ' <p class="info-text"> <i class="bx bx-money"></i> ' + response[i].forma_pagamento + '</p>' +
                        '</div>' +
                        '' +
                        '<div id="bnts-config">' +
                        '<div class="bnt-pronto" id="bnt-entregador-status">' +
                        ' </div>' +
                        '' +
                        '<div class="bnt-pronto" id="bnt-entregador-confirm">' +
                        ' </div>' +
                        '</div>' +
                        '</div>'

                    );
                    $('#bnt-entregador-confirm').hide();

                    MedicamentosInfo(id, 'info-medicamentos-list');
                    for (var e = 0; e < length; e++) {
                        if (response[i].cod_endereco == response[e].id_endereco) {
                            $('#enderecoid' + response[i].id_pedido + '').append('' +
                                ' <p>Bairro ' + response[e].bairro + '</p>' +
                                ' <p>' + response[e].logradouro + '</p>' +
                                ' <p>Nº ' + response[e].numero + '</p>' +
                                ' <p>' + response[e].complemento + '</p>'

                            );
                            break;
                        }
                    }
                    //IDENTIFICA SE ESTÁ APTO PARA ENTREGA OU EM ENTREGA
                    if (tipo == 1) {
                        $('#bnt-entregador-status').append('' +
                            ' <input type="button" value="Colocar em Entrega" onclick="updateStatus(' + response[i].id_pedido + ',' + response[i].id + ',5)">'
                        );
                    }
                    //STATE É PRA VER SE O BOTÃO FINALIZAR ENTREGA FOI APERTADO 
                    if (tipo == 2 && state == 1 || tipo == 2 && state == 3) {
                        $('#bnt-entregador-status').append('' +
                            ' <input type="button" value="Finalizar Entrega" id="bnt-finalizar " onclick="Finalizar(' + response[i].id_pedido + ')">'
                        );
                    } else if (tipo == 2 && state == 2) {
                        $('bnt-confirm').hide();
                        $('bnt-confirm').fadeIn();
                        $('#bnt-entregador-status').append('' +
                            ' <input type="button" value="Confirmar" id="bnt-confirm" onclick="updateStatus(' + response[i].id_pedido + ',' + response[i].id + ',3)">'

                        );
                        $('#bnt-entregador-confirm').show();
                        $('#bnt-entregador-confirm').append('' +
                            '<input type="button" value="Cancelar" id="bnt-canceel" onclick="openPedidoDetalhe(' + response[i].id_pedido + ',2,3)">'
                        );
                    }



                }
            }

        }
    })



}

//FUNÇÃO BOTÃO FINALIZAR
function Finalizar(id_pedido) {

    openPedidoDetalhe(id_pedido, 2, 2);

}



//FUNÇÃO PARA MSOTRAR OS MEDICAMENTOS COMPRADOS
function MedicamentosInfo(_id_pedido, tipo) {
    var dados = {
        tabela: 'pedido',
        status: 'Apto para entrega'
    }
    var id = _id_pedido;
    var dadosJson = JSON.stringify(dados);

    $.ajax({
        url: '../backend/controllers/getPedidosMedicamento.php',
        method: 'post',
        data: {
            data: dadosJson
        },
        dataType: 'json',
        success: function (response) {
            console.log(response);
            var length = response.length;

            for (var s = 0; s < length; s++) {
                if (id == response[s].id_pedido) {
                    $('#' + tipo + '').append('' +
                        '' +
                        '<div class="item-pedido">' +
                        '<div class="list-medicamentos"'+
                        '<p>' + response[s].quantidade + 'x ' + response[s].nome_comercial + '</p>' +
                        '</div>'+
                        '<p>R$ ' + response[s].preco + '</p>' +
                        '</div>'



                    );
                }
            }
        }
    })
}

getPedidosEntregadorProntoEntrega()

getPedidosEntregadorEmEntrega()

getPedidosEntregadorHistorico()
