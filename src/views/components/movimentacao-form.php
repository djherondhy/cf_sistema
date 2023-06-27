<style>
    .movimentacao-cadastro {
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

    .movimentacao-modal {
        background-color: var(--white-color);
        padding: 1.5rem;
        padding-bottom: 2rem;
        border-radius: 30px;
        gap: 1rem;
        width: 350px;
        position: relative;
    }

    .movimentacao-modal form {
        display: flex;
        flex-direction: column;
        gap: 1rem;
        font-size: 0.9rem;
    }

    .movimentacao-modal .title {
        gap: 0.5rem;
    }

    .movimentacao-modal .close-btn {
        top: 1rem;
        right: 1rem;


    }

    #quantidade-atual{
        display: none;
    }

    .nova-quantidade button{
        width: 30px;
        height: 30px;
        border: 0;
        border-radius: 6px;
    }

    .nova-quantidade input{
        width: 50px;
    }
</style>
<div class="movimentacao-cadastro h-align vh-center">
    <div class="movimentacao-modal v-align">
        <button class="close-btn" id="close-formMov"><i class='bx bx-x'></i></button>
        <p class="title h-align v-center"> <i class='bx bx-transfer-alt'></i> Nova Movimentação</p>
        <form action="" id="form-movimentacao">
            <div class="input-agroup v-align">
                <label for="tipo-movimentacao">Tipo de Movimentação</label>
                <select name="" id="tipo-movimentacao" required>
                    <option value="1">Entrada</option>
                    <option value="0">Saida</option>
                </select>
            </div>
            <div class="input-agroup v-align">
                <label for="produto">Produto</label>
                <select name="" id="produto" required>
                    <option value="1">Produto #12 - Advil</option>
                    <option value="1">Produto #12 - Advil</option>
                </select>

            </div>
            <div class="input-agroup v-align">
                <label for="movimentacaoes-quantidade">Quantidade</label>
                <input type="number" id="quantidade-atual">
                <div class="nova-quantidade">
                    <button class='btn-menos'> - </button>
                    <button class='btn-mais'> + </button>
                <input type="number" id="nova-quantidade" placeholder="0" min="20">
                  
                </div>
            </div>
           
            <div class="input-agroup v-align">
                <label for="mov-descricao">Desrição</label>
                <input type="text" id="mov-descricao" placeholder="Insira uma descrição" required>
            </div>

            <div class="input-agroup v-align">
                <input type="submit" value="Salvar Movimentacao">
            </div>
        </form>
    </div>
</div>