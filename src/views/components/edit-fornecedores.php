<style>
    .fornecedor-edit {
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

    #edit-codigo {
        display: none;
    }
</style>
<div class="fornecedor-edit h-align vh-center">
    <div class="fornecedor-modal v-align">
        <button class="close-btn" id="close-editFornecedores"><i class='bx bx-x'></i></button>
        <p class="title h-align v-center"> <i class='bx bxs-truck'></i>Alterar Fornecedor</p>

        <form action="" id="edit-fornecedores">
            <div class="input-agroup v-align">
                <label for="edit-nome">Nome Fantasia</label>
                <input type="text" id="edit-nome">
                <input type="text" id="edit-codigo">
            </div>
            <div class="input-agroup v-align">
                <label for="edit-cnpj">CNPJ</label>
                <input type="text" id="edit-cnpj">
            </div>
            <div class="input-agroup v-align">
                <label for="edit-email">E-mail</label>
                <input type="text" id="edit-email">
            </div>
            <div class="input-agroup v-align">
                <label for="edit-telefone">Telefone</label>
                <input type="text" id="edit-telefone">
            </div>
            <div class="input-agroup v-align">
                <label for="edit-endereco">Endereço</label>
                <input type="text" id="edit-endereco">
            </div>

            <div class="input-agroup v-align">
                <input type="submit" value="Salvar Alteração">
            </div>
        </form>
    </div>
</div>

<script>



    $('#edit-cnpj').mask('00.000.000/0000-00');
    $('#edit-telefone').mask('(00)00000-0000');
    $('.fornecedor-edit').hide();
    $('#close-editFornecedores').click(function () { $('.fornecedor-edit').fadeOut('slow'); })
</script>