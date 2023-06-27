<style>
    .pedido-container {
        position: fixed;
        background: rgba(65, 63, 63, 0.25);
        box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37);
        backdrop-filter: blur(4px);
        -webkit-backdrop-filter: blur(4px);
        width: 100vw;
        height: 100vh;
        z-index: 2000;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .pedido-form {
        background-color: var(--white-color);
        width: 60%;
        display: flex;
        padding: 0;
        border-radius: 30px;
        overflow: hidden;
        position: relative;
    }

    .pedido-form .info {
        width: 50%;
        background-color: var(--dark-color);
        color: #fff;
    }

    .pedido-dados {
        padding: 1rem;
        display: flex;
        flex-direction: column;
        gap: 0.5rem;
    }

    .pedido-itens p {
        font-size: 0.8rem;
        gap: 0.1rem;
        display: flex;
    }

    .pedido-itens {
        display: flex;
        flex-direction: column;
        gap: 1rem;
        align-items: center;
        overflow: auto;
        max-height: 300px;
        padding: 1rem;
    }

    .pedido-itens::-webkit-scrollbar {
        width: 3px;
    }

    .pedido-itens::-webkit-scrollbar-thumb {
        border-radius: 20px;
        border: 3px solid var(--sec-color);
        /* creates padding around scroll thumb */
    }

    .item-agroup .tags {
        display: flex;
        justify-content: space-between;
    }

    .item-agroup .tags .tag {
        background: none;
        color: var(--sub-color);

    }

    .title-item {
        align-self: flex-start;
    }

    .item-agroup {
        display: flex;
        flex-direction: column;
        gap: 0.3rem;
        width: 80%;
        border-bottom: 2px dashed var(--sec-color);
        padding-bottom: 0.5rem;
    }

    .item-delete {
        background: 0;
        border: 0;
        color: var(--red-color);
        align-self: flex-end;

    }

    .item-delete i {
        font-size: 1.5rem;
        color: var(--red-color)
    }

    .pedido-dados p {
        display: flex;
        align-items: center;
    }

    .pedido-dados p i {
        font-size: 0.9rem;
        color: var(--white-color);
    }

    .item-agroup .item {
        word-break: break-all;
    }

    .info .sub {
        font-size: 0.9rem;
        align-self: flex-end;
        margin-top: 1rem;
    }

    .pedido-form form {

        display: flex;
        flex-direction: column;
        gap: 0.5rem;
        width: 50%;
        overflow-y: auto;
        overflow-x: hidden;
    }

    .pedido-form form::-webkit-scrollbar {
        width: 3px;
    }

    .pedido-form form::-webkit-scrollbar-thumb {
        border-radius: 20px;
        border: 3px solid var(--min-gray);
    }


    .pedido-form form p {
        display: flex;
        align-items: center;
        padding: 1rem;
    }

    .pedido-form .input-agroup {
        padding-left: 1rem;
        padding-right: 1rem;
        display: flex;
        flex-direction: column;
        gap: 0.5rem;

    }

    .pedido-form .input-agroup input[type="text"] {
        border-radius: 6px;
        padding: 0.5rem;
        border: 1px solid var(--gray-color);
        outline-color: var(--main-color);
        max-width: 100px;
    }

    .pedido-form .input-agroup select {
        border-radius: 6px;
        padding: 0.4rem;
        border: 1px solid var(--gray-color);
        outline: 1px;
        outline-color: var(--main-color);
        max-width: 150px;

    }

    .pedido-form .input-agroup select:focus {
        border: 1px solid var(--main-color);
    }

    .input-agroup label {
        font-weight: 500;
        font-size: 0.8rem;
        ;
    }

    .input-agroup .radio-agroup {
        display: flex;
        align-items: center;
        gap: 0.5rem;
        padding: 0.5rem;

        border-radius: 10px;
    }

    .input-agroup button {
        padding: 0.5rem;
        background: 0;
        border: 1px dashed var(--main-color);
        border-radius: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: var(--main-color)
    }

    .input-agroup button i {
        font: 0.8rem;
        color: var(--main-color)
    }

    .pedido-form .action-row{
        width: 100%;
        padding: 1rem;
    }

    .action-row input {
        background-color: var(--main-color);
        border-radius: 30px;
        padding: 0.5rem 1.5rem;
        border: 0;
        color: var(--white-color);
    }

    @media screen and (max-width: 1000px) {
        .pedido-form {
            width: 80%;
        }
    }

    @media screen and (max-width: 700px) {
        .pedido-form {
            width: 90%;
        }

        .pedido-form .close-btn {
            top: 0.5rem;
            right: 0.5rem;
            background-color: var(--sec-color);
        }

        .pedido-form .close-btn:hover {
            background-color: var(--subsec-color);
        }

        .pedido-form .close-btn i {
            color: var(--main-color) !important;
        }


    }

    @media screen and (max-width: 600px) {

        .pedido-container {
            align-items: baseline;
            justify-content: baseline;
            flex: auto;
        }

        .pedido-form {
            width: 100%;
            height: 100%;
            overflow-y: auto;
            flex-direction: column;
            border-radius: 0;
        }

        .pedido-form form {
            width: 100%;
            min-height: 100%;
            overflow-y: auto;
        }

        .pedido-form .info {
            width: 100%;
            height: 100%;
            align-items: center;
        }
    }

    .pedido-form .close-btn {
        top: 0.5rem;
        right: 0.5rem;

    }

    .pedido-form .close-btn i {
        color: var(--dark-color);
    }
</style>
<div class="pedido-container">
    <div class="pedido-form">
        <button class="close-btn" id="close-pedidoForm"><i class='bx bx-x'></i></button>
        <div class="info">
            <div class="pedido-dados">
                <p>Seu pedido</p>
                <p class="title-item"> <i class='bx bxs-capsule'></i>Items</p>
                <div class="pedido-itens">

                    <div class="item-agroup">
                        <p class="item">Metronidazol 100mg 20 cápsulas</p>
                        <div class="tags">
                            <p class="tag">1x</p>
                            <p class="tag">R$ 12.75</p>
                        </div>
                        <button class="item-delete"><i class='bx bx-trash'></i> </button>
                    </div>

                </div>
                <p class="sub" id="pedido-subtotal">Subtotal: R$ 12.75</p>
            </div>

        </div>
        <form action="" id="pedido-form">
            <p>Finalizar Pedido</p>
            <div class="input-agroup">
                <label for="forma_recebimento">Forma de Recebimento</label>
                <select name="forma_recebimento" id="forma_recebimento">
                    <option value="Retirada">Retirada</option>
                    <option value="Entrega">Entrega</option>
                </select>
            </div>

            <div class="input-agroup" id="pedido-enderecos">
                <label for="endereco">Selecionar Endereço</label>
                <div class="radio-agroup">
                    <input type="radio" name="endereco" id="endereco"><label for="endereco">Djhérondhy Felipe Bezerra
                        Pinheiro, Rua Nossa Senhora do Rosário, 3164, Santa Luzia, Itacoatiara-AM, 69104570,
                        Apto1</label>
                </div>
               

                <button id="add-endereco"><i class='bx bx-plus'></i>Novo Endereço</button>
            </div>

            <div class="input-agroup">
                <label for="forma_pagamento">Forma de Pagamento</label>
                <select name="forma_pagamento" id="forma_pagamento">
                    <option value="Dinheiro">Dinheiro</option>
                    <option value="Pix">Pix</option>
                </select>
            </div>
            <div class="input-agroup" id="pedido-troco">
                <label for="forma_pagamento">Troco (se necessário)</label>
                <input type="text" id="troco">
            </div>
            <div class="action-row h-align">
                <input type="submit" value="Finalizar">
            </div>
        </form>
    </div>
</div>