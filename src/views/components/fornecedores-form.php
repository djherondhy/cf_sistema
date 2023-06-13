<style>
    .fornecedor-cadastro {
        position: fixed;
        width: 100vw;
        height: 100vh;
        background: rgba(65, 63, 63, 0.25);
        box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37);
        backdrop-filter: blur(4px);
        -webkit-backdrop-filter: blur(4px);
        width: 100vw;
        height: 100vh;
        z-index: 900;
    }

    .fornecedor-modal {
        background-color: var(--white-color);
        padding: 1.5rem;
        padding-bottom: 2rem;
        border-radius: 30px;
        gap: 1rem;
        width: 350px;
        position: relative;
    }

    .fornecedor-modal form {
        display: flex;
        flex-direction: column;
        gap: 1rem;
        font-size: 0.9rem;
    }

    .fornecedor-modal .title {
        gap: 0.5rem;
    }

    .fornecedor-modal .close-btn {
        top: 1rem;
        right: 1rem;
    }
</style>
<div class="fornecedor-cadastro h-align vh-center">
    <div class="fornecedor-modal v-align">
        <button class="close-btn" id="close-fornCad"><i class='bx bx-x'></i></button>
        <p class="title h-align v-center"> <i class='bx bxs-truck'></i>Novo Fornecedor</p>
        <form action="" id="form-fornecedores">
            <div class="input-agroup v-align">
                <label for="fornecedores-nome">Nome Fantasia</label>
                <input type="text" id="fornecedores-nome" placeholder="Ex.. Medicamentos LTDA">
            </div>
            <div class="input-agroup v-align">
                <label for="fornecedores-cnpj">CNPJ</label>
                <input type="text" id="fornecedores-cnpj" placeholder="Ex.. 000.000.000/0001-19">
            </div>
            <div class="input-agroup v-align">
                <label for="fornecedores-email">E-mail</label>
                <input type="text" id="fornecedores-email" placeholder="Ex.. fornecedores@email.com">
            </div>
            <div class="input-agroup v-align">
                <label for="fornecedores-telefone">Telefone</label>
                <input type="text" id="fornecedores-telefone" placeholder="Ex.. (00) 0000-0000">
            </div>
            <div class="input-agroup v-align">
                <label for="fornecedores-endereco">Endereço</label>
                <input type="text" id="fornecedores-endereco" placeholder="Ex.. Rua X, Bairro N, Nº 1234">
            </div>

            <div class="input-agroup v-align">
                <input type="submit" value="Salvar Fornecedor">
            </div>
        </form>
    </div>
</div>