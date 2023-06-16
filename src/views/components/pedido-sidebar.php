<style>
    .side-pedido {
        width: 350px;
        height: 100vh;
        position: fixed;
        z-index: 900;
        background-color: var(--dark-color);
        top: 0;
        right: 0;
        font-family: 'Poppins';
        display: flex;
        flex-direction: column;
        gap: 1rem;
        color: var(--white-color);
    }

    .pedido-filter{
        padding-left: 1rem;
    }
    .side-pedido .close-btn{
        background-color: var(--subsec-color);
    }


    .side-pedido .title {
        color: var(--white-color);
        display: flex;
    }

    .side-pedido p svg {
        fill: var(--white-color);
    }

    .filter-active {
        background-color: var(--sub-color) !important;
        color: var(--white-color) !important;
    }

    .pedido-filter button {
        border: 1px solid var(--sub-color);
        padding: 0.5rem;
        border-radius: 6px;
        color: var(--sub-color);
        background: none;
        cursor: pointer;
    }

    .pedido-list {
        display: flex;
        flex-direction: column;
        height: 60%;
        gap: 0.5rem;
        overflow-y:auto;
        align-items: center;
    }

    .pedido-list i{
        font-size: 0.8rem;
    }
    .pedido-list p{
        font-size: 0.8rem;
    }

    .pedido-card{
        border: 1px solid var(--sub-color);
        border-radius: 10px;
        position: relative;
        width: 85%;
        padding: 0.5rem;
    }

    .pedido-header {
        display: flex;
        justify-content: space-between;
       
    }

    .pedido-id {
        font-weight: bold;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .pedido-id i{
        font-size: 0.8rem;
    }

    .datatime {
        display: flex;
        font-size: 0.8rem;
        gap: 1rem;
    }

    .datatime p {
        color: var(--gray-color);

    }

    .pedido-title {
        font-weight: bold;
        display: flex;
        gap: 0.2rem;
        align-items: center;
    }

    .pedido-content {
        margin-top: 1rem;
    }

    .item-pedido {
        font-size: 0.8rem;
        display: flex;
        padding: 0.5rem;
        justify-content: space-between;
    }

    .pedido-info {
        margin-top: 1rem;
        display: flex;
        gap: 0.5rem;
    }

    .pedido-info .info-text {
        background-color: var(--subsec-color);
        padding: 0.3rem;
        border-radius: 6px;
        display: flex;
        gap: 0.2rem;
        align-items: center;
    }

    .more-btn {
        width: 20px;
        height: 20px;
        font-size: 1rem;
        position: absolute;
        border-radius: 50%;
        bottom: 0.2rem;
        right: 0.1rem;
    }

    .side-pedido .title{
        padding-top: 1rem;
        padding-left: 1rem;
    }

    @media screen and (max-width: 650px){
        .side-pedido{
            width: 100%;
            height: 100vh;
            align-items: center;
            z-index: 999;
            
        }
       .pedido-list{
            width: 90%;
            align-items: center;
            height: 60%;
       }

    }
    
</style>
<div class="side-pedido">
    <button class="close-btn" id="close-pedidos"> <i class='bx bx-x'></i> </button>
    <p class="title">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
            <path
                d="M21 11h-3V4a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v14c0 1.654 1.346 3 3 3h14c1.654 0 3-1.346 3-3v-6a1 1 0 0 0-1-1zM5 19a1 1 0 0 1-1-1V5h12v13c0 .351.061.688.171 1H5zm15-1a1 1 0 0 1-2 0v-5h2v5z">
            </path>
            <path d="M6 7h8v2H6zm0 4h8v2H6zm5 4h3v2h-3z"></path>
        </svg>
        Pedidos
    </p>
    <div class="pedido-filter">
        <button class="filter-active">Confirmados</button>
        <button>Enviados</button>
        <button>Recebidos</button>
    </div>

    <div class="pedido-list">
        <div class="pedido-card">
            <div class="more-btn" id="more-pedido" onclick="showMorePedido(1)">
                <i class='bx bx-expand-vertical'></i>
            </div>
            <div class="pedido-header">
                <p class="pedido-id"><i class='bx bx-purchase-tag-alt'></i> Pedido #1234</p>
                <p>Subtotal: R$ 13.98</p>
            </div>
            <div class="datatime">
                <p>22/10/2022</p>
                <p>18:20</p>
            </div>
            <div class="pedido-content" id="pedido-content1">
                <p class="pedido-title"><i class='bx bx-basket'></i>Itens</p>
                <div class="itens-list">
                    <div class="item-pedido">
                        <p>1x Omeprazol</p>
                        <p>R$ 8.95</p>
                    </div>
                    <div class="item-pedido">
                        <p>1x Ibrupofeno</p>
                        <p>R$ 5.75</p>
                    </div>
                </div>

                <div class="pedido-info">
                    <p class="info-text"><i class='bx bx-store'></i>Retirada</p>
                    <p class="info-text"> <i class='bx bx-money'></i> Dinheiro</p>
                </div>
            </div>
        </div>

        <div class="pedido-card">
            <div class="more-btn" id="more-pedido" onclick="showMorePedido(2)">
                <i class='bx bx-expand-vertical'></i>
            </div>
            <div class="pedido-header">
                <p class="pedido-id"><i class='bx bx-purchase-tag-alt'></i> Pedido #1554</p>
                <p>Subtotal: R$ 13.98</p>
            </div>
            <div class="datatime">
                <p>22/10/2022</p>
                <p>18:20</p>
            </div>
            <div class="pedido-content" id="pedido-content2">
                <p class="pedido-title"><i class='bx bx-basket'></i>Itens</p>
                <div class="itens-list">
                    <div class="item-pedido">
                        <p>1x Omeprazol</p>
                        <p>R$ 8.95</p>
                    </div>
                </div>

                <div class="pedido-info">
                    <p class="info-text"> <i class='bx bx-package'></i> Entrega</p>
                    <p class="info-text"> <i class='bx bx-wallet'></i> Crédito</p>
                </div>
            </div>
        </div>
        <div class="pedido-card">
            <div class="more-btn" id="more-pedido" onclick="showMorePedido(2)">
                <i class='bx bx-expand-vertical'></i>
            </div>
            <div class="pedido-header">
                <p class="pedido-id"><i class='bx bx-purchase-tag-alt'></i> Pedido #1554</p>
                <p>Subtotal: R$ 13.98</p>
            </div>
            <div class="datatime">
                <p>22/10/2022</p>
                <p>18:20</p>
            </div>
            <div class="pedido-content" id="pedido-content2">
                <p class="pedido-title"><i class='bx bx-basket'></i>Itens</p>
                <div class="itens-list">
                    <div class="item-pedido">
                        <p>1x Omeprazol</p>
                        <p>R$ 8.95</p>
                    </div>
                </div>

                <div class="pedido-info">
                    <p class="info-text"> <i class='bx bx-package'></i> Entrega</p>
                    <p class="info-text"> <i class='bx bx-wallet'></i> Crédito</p>
                </div>
            </div>
        </div>
        <div class="pedido-card">
            <div class="more-btn" id="more-pedido" onclick="showMorePedido(2)">
                <i class='bx bx-expand-vertical'></i>
            </div>
            <div class="pedido-header">
                <p class="pedido-id"><i class='bx bx-purchase-tag-alt'></i> Pedido #1554</p>
                <p>Subtotal: R$ 13.98</p>
            </div>
            <div class="datatime">
                <p>22/10/2022</p>
                <p>18:20</p>
            </div>
            <div class="pedido-content" id="pedido-content2">
                <p class="pedido-title"><i class='bx bx-basket'></i>Itens</p>
                <div class="itens-list">
                    <div class="item-pedido">
                        <p>1x Omeprazol</p>
                        <p>R$ 8.95</p>
                    </div>
                </div>

                <div class="pedido-info">
                    <p class="info-text"> <i class='bx bx-package'></i> Entrega</p>
                    <p class="info-text"> <i class='bx bx-wallet'></i> Crédito</p>
                </div>
            </div>
        </div>
        <div class="pedido-card">
            <div class="more-btn" id="more-pedido" onclick="showMorePedido(2)">
                <i class='bx bx-expand-vertical'></i>
            </div>
            <div class="pedido-header">
                <p class="pedido-id"><i class='bx bx-purchase-tag-alt'></i> Pedido #1554</p>
                <p>Subtotal: R$ 13.98</p>
            </div>
            <div class="datatime">
                <p>22/10/2022</p>
                <p>18:20</p>
            </div>
            <div class="pedido-content" id="pedido-content2">
                <p class="pedido-title"><i class='bx bx-basket'></i>Itens</p>
                <div class="itens-list">
                    <div class="item-pedido">
                        <p>1x Omeprazol</p>
                        <p>R$ 8.95</p>
                    </div>
                </div>

                <div class="pedido-info">
                    <p class="info-text"> <i class='bx bx-package'></i> Entrega</p>
                    <p class="info-text"> <i class='bx bx-wallet'></i> Crédito</p>
                </div>
            </div>
        </div>
        <div class="pedido-card">
            <div class="more-btn" id="more-pedido" onclick="showMorePedido(2)">
                <i class='bx bx-expand-vertical'></i>
            </div>
            <div class="pedido-header">
                <p class="pedido-id"><i class='bx bx-purchase-tag-alt'></i> Pedido #1554</p>
                <p>Subtotal: R$ 13.98</p>
            </div>
            <div class="datatime">
                <p>22/10/2022</p>
                <p>18:20</p>
            </div>
            <div class="pedido-content" id="pedido-content2">
                <p class="pedido-title"><i class='bx bx-basket'></i>Itens</p>
                <div class="itens-list">
                    <div class="item-pedido">
                        <p>1x Omeprazol</p>
                        <p>R$ 8.95</p>
                    </div>
                </div>

                <div class="pedido-info">
                    <p class="info-text"> <i class='bx bx-package'></i> Entrega</p>
                    <p class="info-text"> <i class='bx bx-wallet'></i> Crédito</p>
                </div>
            </div>
        </div>
        <div class="pedido-card">
            <div class="more-btn" id="more-pedido" onclick="showMorePedido(2)">
                <i class='bx bx-expand-vertical'></i>
            </div>
            <div class="pedido-header">
                <p class="pedido-id"><i class='bx bx-purchase-tag-alt'></i> Pedido #1554</p>
                <p>Subtotal: R$ 13.98</p>
            </div>
            <div class="datatime">
                <p>22/10/2022</p>
                <p>18:20</p>
            </div>
            <div class="pedido-content" id="pedido-content2">
                <p class="pedido-title"><i class='bx bx-basket'></i>Itens</p>
                <div class="itens-list">
                    <div class="item-pedido">
                        <p>1x Omeprazol</p>
                        <p>R$ 8.95</p>
                    </div>
                </div>

                <div class="pedido-info">
                    <p class="info-text"> <i class='bx bx-package'></i> Entrega</p>
                    <p class="info-text"> <i class='bx bx-wallet'></i> Crédito</p>
                </div>
            </div>
        </div>
        <div class="pedido-card">
            <div class="more-btn" id="more-pedido" onclick="showMorePedido(2)">
                <i class='bx bx-expand-vertical'></i>
            </div>
            <div class="pedido-header">
                <p class="pedido-id"><i class='bx bx-purchase-tag-alt'></i> Pedido #1554</p>
                <p>Subtotal: R$ 13.98</p>
            </div>
            <div class="datatime">
                <p>22/10/2022</p>
                <p>18:20</p>
            </div>
            <div class="pedido-content" id="pedido-content2">
                <p class="pedido-title"><i class='bx bx-basket'></i>Itens</p>
                <div class="itens-list">
                    <div class="item-pedido">
                        <p>1x Omeprazol</p>
                        <p>R$ 8.95</p>
                    </div>
                </div>

                <div class="pedido-info">
                    <p class="info-text"> <i class='bx bx-package'></i> Entrega</p>
                    <p class="info-text"> <i class='bx bx-wallet'></i> Crédito</p>
                </div>
            </div>
        </div>
    </div>

</div>