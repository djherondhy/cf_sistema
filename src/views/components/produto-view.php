
<style>
    .produto-detalhes {
        width: 400px;
        position: fixed;
        min-height: 100vh;
        background-color: var(--white-color);
        right: 0;
        top: 0;
        padding: 1rem;
        gap: 1rem;
        z-index: 1000;
    }

    .produto-detalhes img {
        width: 30%;

    }

    .detalhes {
        width: 100%;
        display: flex;
        gap: 1rem;
    }

    .info {
        gap: 1rem;
    }

    .info .nome_comercial {
        font-weight: 600;
        color: var(--dark-gray);
    }

    .info .descricao {
        font-weight: 400;
        font-size: 0.9rem;
        color: var(--gray-color);
        text-align: justify;
    }

    .tag {
        gap: 0.5rem;
        font-size: 0.9rem;
        align-items: center;
        background: #e0e0e0;
        min-width: 100px;
        padding: 0.2rem;
        border-radius: 30px;
        color: var(--dark-gray);
    }

    .tag .icon {
        width: 20px;
        height: 20px;
        background-color: var(--main-color);
        color: var(--white-color);
        border-radius: 50%;
        padding: 0.1rem;
    }

    .tag-agroup {
        gap: 1rem;
    }

    .estoque-title {
        color: var(--dark-gray);
        font-weight: 500;
    }

    .estoque-info {
        gap: 0.5rem;
        border-radius: 10px;
        border: 1px solid #ccc;
        padding: 0.5rem
    }

    .secao-info {
        font-size: 0.8rem;
        gap: 0.3rem;
    }

    .secao-info p {
        color: var(--dark-gray);
        font-weight: 500;
    }

    .secao-info p span {
        color: var(--gray-color);
        font-weight: 400;
    }

    .secao-info .icon {
        width: 20px;
        height: 20px;
        background-color: var(--main-color);
        color: var(--white-color);
        border-radius: 50%;
        padding: 0.1rem;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .movimentacao-info p{
        font-weight: 500;
        color: var(--dark-gray);
    }

    .movimentacao-info{
        display: flex;
        flex-direction: column;
        gap: 1rem;
        padding: 0.5rem;
    }

    .movimentacao-btns{
        gap: 0.5rem;
    }
    .movimentacao-info button{
        padding: 0.2rem;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        width: 100px;
        border-radius: 30px;
        border: 0;
        color: var(--white-color);
        font-size: 0.8rem;
        height: 30px;
        font-weight: 400;
    }

    .movimentacao-info .entrada{
        background-color: #38ba56;
        
    }

    .movimentacao-info .saida{
        background-color: var(--red-color);
    }
   
</style>
<div class="produto-detalhes v-align">
<button class="close-btn" id="close-detalhes"><i class='bx bx-x'></i></button>
    <p class="title"><i class='bx bx-band-aid'></i>Produto #<span id="detalhe_id"></span></p>
    <div class="detalhes v-align">
        <img src="pictures/remedios/omeprazol.png" alt="" srcset="" id="produto-img">
        <div class="info v-align">
            <p class="nome_comercial" id="detalhe_nome">Omeprazol 100 MG</p>
            <p class="descricao" id="detalhe_descricao">Omeprazol é um medicamento protótipo da classe dos inibidores da bomba de protões, que
                diminuem a secreção gástrica alterando a atividade da H⁺/K⁺-ATPase.</p>
            <div class="tag-agroup h-align">
                <div class="tag h-align">
                    <span class="icon h-align vh-center"> <i class='bx bxs-injection'></i> </span>
                    <p  id="detalhe_categoria">Genérico</p>
                </div>

                <div class="tag h-align">
                    <span class="icon h-align vh-center"><i class='bx bx-coin'></i> </span>
                    <p id="detalhe_preco">R$ 12.00</p>
                </div>
            </div>
            <div class="estoque-info v-align">
                <p class="estoque-title">
                    Informações de Estoque
                </p>
                <div class="secao-info h-align v-center">
                    <span class="icon"> <i class='bx bx-current-location'></i></span>
                    <p>Quantidade: <span id="detalhe_quantidade">x12</span> </p>
                </div>
                <div class="secao-info h-align v-center">
                    <span class="icon"><i class='bx bxs-book-content'></i> </span>
                    <p>Seção: <span id="detalhe_secao">AB-123</span></p>
                </div>
                <div class="secao-info h-align v-center">
                    <span class="icon"> <i class='bx bx-current-location'></i></span>
                    <p>Localização: <span id="detalhe_localizacao">Prateleira X, Coluna N</span> </p>
                </div>
                <div class="secao-info h-align v-center">
                    <span class="icon"> <i class='bx bx-current-location'></i></span>
                    <p>Fornecedor: <span id="detalhe_fornecedor">Souza LTDA</span> </p>
                </div>
            </div>
            <div class="movimentacao-info">
               <p> Movimentação</p>
                <div class="movimentacao-btns h-align"> 
                    <button id="btn-saida" class="saida h-align vh-center">
                        Saída
                    </button>
                    <button id="btn-entrada" class="entrada h-align vh-center">
                        Entrada
                    </button>
                </div>
            </div>
        </div>
    </div>

</div>