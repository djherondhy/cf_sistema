<style>
    .detalhes-pedidos {
        position: fixed;
        width: 400px;
        height: 100vh;
        background-color: var(--white-color);
        z-index: 2000;
        right: 0;
    }

    .detalhes-pedidos .pedido-info {
        font-size: 0.8rem;
        padding: 1rem;
        gap: 0.5rem;
    }

    .detalhes-pedidos .pedido-tags {
        flex-wrap: wrap;
    }

    .pedido-item-title {
        font-weight: bold;
        color: var(--main-color);
    }

    .quantidade-info {
        display: flex;
        justify-content: space-between;
        color: var(--gray-color);
    }

    .pedido-items {
        display: flex;
        flex-direction: column;
        gap: 0.5rem;
        align-items: center;
        margin-top: 1rem;
    }

    .detalhes-pedidos i {
        color: var(--main-color);
    }

    .detalhes-pedidos .pedido-info p {
        display: flex;
        gap: 0.3rem;
        align-items: center;
        color: var(--dark-gray);
    }

    .detalhes-pedidos .pedido-info .pedido-id {
        color: var(--main-color);
    }

    .item-card {
        display: flex;
        flex-direction: column;
        gap: 0.5rem;
        width: 90%;
        border-bottom: 2px dashed var(--main-color);
        padding-bottom: 1rem;
    }

    .endereco-section {
        display: flex;
        flex-direction: column;
        font-size: 0.8rem;
        gap: 0.5rem;
        align-items: center;
        margin-top: 1rem;
    }

    .pedido-endereco {
        background-color: #ededed;
        border-radius: 6px;
        gap: 0.3rem;
        padding: 0.5rem;
    }

    .pedido-subtotal{
        margin-top: 0.5rem;
        align-self: center;
        font-weight: bold;
        display: flex;
        gap: 0.3rem;
    }

    .detalhes-pedidos .close-btn i{
        color: var(--dark-gray);
    }
</style>
<div>
    <div class="detalhes-pedidos neomorphism">
    <button class="close-btn" id="close-detalhes"><i class='bx bx-x'></i></button>
        <div class="pedido-info">
            <p class="pedido-id"><i class="bx bx-package"></i>Pedido #1234</p>
            <p class="pedido-cliente"><i class="bx bx-user-circle"></i>Marcos</p>
            <p class="pedido-status"><i class="bx bx-tag"></i> Esperando Confirmação</p>
            <div class="pedido-tags">
                <p class="pedido-data"><i class="bx bx-calendar-alt"></i> 19-06-2023 14:75</p>
                <p class="pedido-pagamento"><i class="bx bx-wallet"></i> Pix</p>
                <p class="pedido-recebimento"><i class="bx bx-shopping-bag"></i>Retirada</p>
            </div>
            <div class="endereco-section">
                <p><i class='bx bx-home-alt-2'></i> Endereço de Entrega</p>
                <p class="pedido-endereco">Rua Nossa Senhora do Rosário, nº3164, Santa Luzia, Itacoatiara-AM, 69104570
                </p>
            </div>

            <div class="pedido-items">
                <p class="pedido-item-title"><i class='bx bxs-basket'></i> Itens do Pedido</p>
                <div class="item-card">
                    <p>Produto 7 400ml 250 capsulas confort pro</p>
                    <div class="quantidade-info">
                        <p>1x</p>
                        <p>R$ 12.75</p>
                    </div>
                </div>
                <div class="item-card">
                    <p>Produto 7 400ml 250 capsulas confort pro</p>
                    <div class="quantidade-info">
                        <p>1x</p>
                        <p>R$ 12.75</p>
                    </div>
                </div>
                <div class="item-card">
                    <p>Produto 7 400ml 250 capsulas confort pro</p>
                    <div class="quantidade-info">
                        <p>1x</p>
                        <p>R$ 12.75</p>
                    </div>
                </div>
            </div>
            <p class="pedido-subtotal"><i class='bx bx-purchase-tag-alt' ></i> Total: R$ 12.75</p>
        </div>
    </div>
</div>