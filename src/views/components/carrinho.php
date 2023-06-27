<style>
    .carrinho {
        position: fixed;
        width: 400px;
        height: 100vh;
        right: 0;
        background-color: var(--dark-color);
        z-index: 2000;
        gap: 1rem;
    }

    .carrinho .close-btn{
        color: var(--main-color)!important;
        background-color: var(--sec-color);
    }

    .carrinho .title {
        padding: 1rem;
        padding-bottom: 0;
    }

    .finalizar {
        padding: 1rem;
    }

    .carrinho .title {
        color: #fff;
    }

    .carrinho-list {
        padding: 1rem;
        height: 60%;
        overflow-y: auto;
        gap: 0.5rem;
    }

    .carrinho-list .carrinho-card {
        color: var(--white-color);
    }

    .carrinho-card {
        border: 1px solid var(--main-color);
        justify-content: space-between;
        padding: 0.5rem;
        border-radius: 10px;
    }

    .carrinho-card p {
        font-size: 0.8rem;
    }

    .carrinho-card img {
        width: 40px;
        height: 40px;
        object-fit: contain;
    }

    .finalizar {
        color: var(--white-color);
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        gap: 0.5rem
    }

    .finalizar button {
        padding: 0.5rem 1rem;
        color: #fff;
        background-color: var(--red-color);
        border: 0;
        border-radius: 30px;
    }

    .carrinho-card .info {
        gap: 0.5rem;
    }
    .informacoes{
        display: flex;
        flex-direction: column;
        gap: 0.5rem;
    }
    .informacoes .produto-nome{
        font-weight: bold;
        word-break: break-all;
        width: 80%;
    }

    .informacoes .tags{
        display: flex;
        gap: 0.5rem;
    }

    .tags .tag{
        padding: 0.2rem 0.5rem;
        background-color: var(--sec-color);
        border-radius: 6px;
    }
    .action{
        display: flex;
        gap: 0.2rem;
    }
    .action button{
        width: 20px;
        height: 20px;
        background-color: var(--main-color);
        border: 0;
        border-radius: 6px;
    }

    @media screen and (max-width: 650px){
        .carrinho{
            width: 100%;
        }
    }
</style>
<div class="carrinho v-align">
    <button class="close-btn" id="close-carrinho"> <i class='bx bx-x'></i> </button>
    <p class="title">Carrinho</p>
    <div class="carrinho-list v-align">
        <div class="carrinho-card h-align v-center">
            <div class="info h-align">
                <div class="image">
                    <img src="pictures/remedios/omeprazol.png" alt="">
                </div>
                <div class="informacoes">
                    <p class="produto-nome">Omeprazol</p>
                    <div class="tags">
                        <p class="tag">x0</p>
                        <p class="tag">R$ 12.75</p>
                    </div>
                </div>

            </div>
            <div class="action">
                <button> + </button>
                <button> - </button>
            </div>
        </div>
    </div>
    <div class="finalizar">
        <p id="carrinho-subtotal"></p>
        <button id="finalizar-pedido">Finalizar Pedido</button>
    </div>
</div>

<script>
    $('#close-carrinho').click(function(){
        $('.carrinho').fadeIn('slow');
    })
</script>