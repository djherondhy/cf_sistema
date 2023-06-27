<style>
    .edit-colaborador-container {
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

    .edit-colaborador-form {
        background-color: var(--white-color);
        padding: 1.5rem;
        padding-bottom: 2rem;
        border-radius: 30px;
        gap: 1rem;
        position: relative;
    }

    .edit-colaborador-form form {
        display: flex;
        flex-direction: column;
        gap: 1rem;
        font-size: 0.9rem;
        margin-top: 1rem;
    }

    .edit-colaborador-form .input-row {
        display: flex;
        width: 100%;
    }



    .input-row input[type="text"] {
        border-radius: 6px;
        padding: 0.5rem;
        border: 1px solid var(--gray-color);
        outline-color: var(--main-color);
    }


    .input-row input[type="email"] {
        border-radius: 6px;
        padding: 0.5rem;
        border: 1px solid var(--gray-color);
        outline-color: var(--main-color);
    }

    .input-row input[type="date"] {
        border-radius: 6px;
        padding: 0.3rem;
        border: 1px solid var(--gray-color);
        outline-color: var(--main-color);

    }

    .img-input input {
        display: none;
    }

    .input-row select {
        border-radius: 6px;
        padding: 0.4rem;
        border: 1px solid var(--gray-color);
        outline: 1px;
        outline-color: var(--main-color);
        min-width: 150px;
    }

    .input-row select:focus {
        border: 1px solid var(--main-color);
    }

    .input-agroup {
        display: flex;
        flex-direction: column;
        flex: auto;
        gap: 0.2rem;
    }

    .action-row input {
        background-color: var(--main-color);
        border-radius: 30px;
        padding: 0.5rem 1.5rem;
        border: 0;
        color: var(--white-color);

    }

    .edit-colaborador-form .close-btn{
        top: 1rem;
        right: 1rem;
    }
    #edit-col-id{
        display: none;
    }
</style>
<div class="edit-colaborador-container h-align vh-center">
    <div class="edit-colaborador-form">
    <button class="close-btn" id="close-edit-colCad"><i class='bx bx-x'></i></button>
        <p class="title h-align v-center"> <i class='bx bx-user-circle'></i> Editar Colaborador</p>
        <form action="" id="edit-colaborador-form">
            <div class="input-row">
                <div class="input-agroup">
                    <label for="">Nome Completo</label>
                    <input type="text" id="edit-col-nome" required>
                    <input type="text" id="edit-col-id">
                </div>
            </div>
            <div class="input-row">
                <div class="input-agroup">
                    <label for="">Tipo</label>
                    <select name="col-tipo" id="edit-col-tipo">
                        <option value="Gerenciador">Gerenciador</option>
                        <option value="Entregador">Entregador</option>
                    </select>
                </div>
                <div class="input-agroup">
                    <label for="">Situação</label>
                    <select name="col-situacao" id="edit-col-situacao">
                        <option value="Ativo">Ativo</option>
                        <option value="Inativo">Inativo</option>
                    </select>
                </div>
            </div>
            <div class="input-row">
                <div class="input-agroup">
                    <label for="">Email</label>
                    <input type="email" id="edit-col-email" required>
                </div>
                <div class="input-agroup">
                    <label for="">Telefone</label>
                    <input type="text" id="edit-col-tel">
                </div>
            </div>

            <div class="input-row">
                <div class="input-agroup">
                    <label for="">CPF</label>
                    <input type="text" id="edit-col-cpf" required>
                </div>
                <div class="input-agroup">
                    <label for="">CNH</label>
                    <input type="text" id="edit-col-cnh">
                </div>
                <div class="input-agroup">
                    <label for="">CTPS</label>
                    <input type="text" id="edit-col-ctps">
                </div>
            </div>

            <div class="action-row h-align">
                <input type="submit" value="Salvar Alteração">
            </div>

        </form>
    </div>
</div>
<script>
    $('#close-edit-colCad').click(function() {
        $('.edit-colaborador-container').fadeOut('slow');
    });
    $('.edit-colaborador-container').hide();

</script>