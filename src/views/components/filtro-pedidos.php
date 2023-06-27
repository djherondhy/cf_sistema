<?php ?>
<style>
    .filtro-container {
        position: fixed;
        width: 100vw;
        height: 100vh;
        background: rgba(65, 63, 63, 0.25);
        box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37);
        backdrop-filter: blur(4px);
        -webkit-backdrop-filter: blur(4px);
        width: 100vw;
        height: 100vh;
        z-index: 2000;
    }

    .filtro-modal {
        background-color: var(--white-color);
        padding: 2rem 2rem;
        position: relative;
        width: 300px;
        border-radius: 30px;
        gap: 1rem;
    }
    .agroup{
        justify-content: space-between;
        font-size: 0.9rem;
        color: var(--gray-color);
    }

    .agroup select{
        padding: 0.3rem;
        border-radius: 30px;
        border: 0;
        outline: 0;
     
    }
    .agroup select option{
        outline: 0;
    }

    .filtro-modal .close-btn{
        top: 1rem;
        right: 1rem;
    }

   
</style>
<div class="filtro-container h-align vh-center">
    
    <div class="filtro-modal v-align">
    <button class="close-btn" id="close-filtroPedidos"><i class='bx bx-x'></i></button>

        <p class="title">Filtrar por</p>
        <div class="agroup h-align">
        <label for="pagamento-select">Forma de Pagamento</label>
            <select id="pagamento-select">
                <option value="">Todos</option>
                <option value="Dinheiro">Dinheiro</option>
                <option value="Pix">Pix</option>
            </select>
        </div>
        <div class="agroup h-align">
        <label for="recebimento-select">Forma de Recebimento</label>
            <select id="recebimento">
            <option value="">Todos</option>
            <option value="Retirada">Retirada</option>
            <option value="Entrega">Entrega</option>
            </select>
        </div>
    </div>
</div>

<?php ?>