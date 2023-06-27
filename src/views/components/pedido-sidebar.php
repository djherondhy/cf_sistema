<style>
    .side-pedido {
        width: 400px;
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
        z-index: 2000;
    }

    .side-pedido .pedido-action{
        display: flex;
        padding-top: 1rem;
        padding-bottom: 0.5rem;
    }
    .side-pedido .pedido-action button{
        display: flex;
        padding: 0.2rem 0.5rem;
        align-items: center;
        border-radius: 6px;
        background-color: var(--red-color);
        border: 0;
        color: var(--white-color);
    }
    .pedido-filter{
        padding-left: 1rem;
        display: flex;
        gap: 0.2rem;
        flex-wrap: wrap;
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

    .side-pedido .filter-active {
        background-color: var(--sub-color) !important;
        color: var(--white-color) !important;
    }

    .side-pedido .pedido-filter label {
        border: 1px solid var(--sub-color);
        padding: 0.5rem;
        border-radius: 6px;
        color: var(--sub-color);
        background: none;
        cursor: pointer;
        font-size: 0.8rem;
    }

    
    .side-pedido .pedido-filter input[type="radio"] {
       display: none;
    }

    .side-pedido .pedido-list {
        display: flex;
        flex-direction: column;
        height: 60%;
        gap: 0.5rem;
        overflow-y:auto;
        align-items: center;
    }

    .side-pedido .pedido-list i{
        font-size: 0.8rem;
    }
    .side-pedido .pedido-list p{
        font-size: 0.8rem;
    }

    .side-pedido .pedido-card{
        border: 1px solid var(--sub-color);
        border-radius: 10px;
        position: relative;
        width: 85%;
        padding: 0.5rem;
    }

    .side-pedido .pedido-header {
        display: flex;
        justify-content: space-between;
       
    }

    .side-pedido .pedido-id {
        font-weight: bold;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .side-pedido .pedido-id i{
        font-size: 0.8rem;
    }

    .side-pedido .datatime {
        display: flex;
        font-size: 0.8rem;
        gap: 1rem;
    }

    .side-pedido .datatime p {
        color: var(--gray-color);

    }

    .side-pedido .pedido-title {
        font-weight: bold;
        display: flex;
        gap: 0.2rem;
        align-items: center;
    }

    .side-pedido .pedido-content {
        margin-top: 1rem;
    }

    .side-pedido .item-pedido {
        font-size: 0.8rem;
        display: flex;
        padding: 0.5rem;
        justify-content: space-between;
    }

    .side-pedido .pedido-info {
        margin-top: 1rem;
        display: flex;
        gap: 0.5rem;
    }

    .side-pedido .pedido-info .info-text {
        background-color: var(--subsec-color);
        padding: 0.3rem;
        border-radius: 6px;
        display: flex;
        gap: 0.2rem;
        align-items: center;
    }

    .side-pedido .more-btn {
        width: 20px;
        height: 20px;
        font-size: 1rem;
        position: absolute;
        border-radius: 50%;
        bottom: 0.2rem;
        right: 0.1rem;
    }

    .side-pedido .item-pedido p {
        width: 90%;
    }

    .side-pedido .item-pedido{
        display: flex;
        flex-direction: column;
        gap: 0.5rem;
        border-bottom: 2px dashed var(--sec-color);
    }

    .side-pedido .title{
        padding-top: 1rem;
        padding-left: 1rem;
    }

    .pedido-list::-webkit-scrollbar {
     width: 3px;
    }

    .pedido-list::-webkit-scrollbar-thumb {
        border-radius: 20px;
        border: 3px solid var(--sec-color);
        /* creates padding around scroll thumb */
    }

    #pedido-busca{
        padding: 0.2rem;
        height: 25px;
        border-radius: 6px;
        border:1px solid var(--main-color);
        outline: 0;
        color: var(---main-color);
        background: 0;
    }

    #pedido-data{
        padding: 0.2rem;
        height: 30px;
        background-color: var(--main-color);
        color: var(--white-color);
        outline: 0;
        border-radius: 6px;
        border: 0;
    }

    #pedido-data option{
        background-color: var(--sec-color);
        color: var(--white-color);
        outline: 0;
       
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
    
        <input type="text" name="pedido-busca" placeholder="Escolha uma data" id="pedido-busca">
        <select name="" id="pedido-data">
            <option value="data like '%%'">Todos</option>
            <option value="data = CURRENT_DATE">Hoje</option>
            <option value="MONTH(data) = 6">Este Mês</option>
            <option value="Year(data) = 2023">Este Ano</option>
        </select>
    </div>

    <div class="pedido-filter">
       <label for="filter-todos" class="filter-active" id='label-todos'>Todos</label>
       <label for="filter-confirmado" id='label-confirmado'>Confirmados</label>
       <label for="filter-recebidos" id='label-recebidos'>Recebidos</label>
       <label for="filter-cancelados" id='label-cancelados'>Cancelados</label>

       <input type="radio" name="filter-status" id="filter-todos" value="" checked>
       <input type="radio" name="filter-status" id="filter-confirmado" value="Confirmado" >
       <input type="radio" name="filter-status" id="filter-recebidos" value="Entregue">
       <input type="radio" name="filter-status" id="filter-cancelados" value="Cancelado">
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
    </div>
</div>

<script>
    $('#close-pedidos').click(function(){
        $('.side-pedido').fadeOut('slow');
    })

    $('#pedido-busca').datepicker();
</script>