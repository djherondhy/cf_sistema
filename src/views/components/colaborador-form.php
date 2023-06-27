<style>
    .colaborador-container {
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

    .colaborador-form {
        background-color: var(--white-color);
        padding: 1.5rem;
        padding-bottom: 2rem;
        border-radius: 30px;
        gap: 1rem;
        position: relative;
    }

    .colaborador-form form {
        display: flex;
        flex-direction: column;
        gap: 1rem;
        font-size: 0.9rem;
        margin-top: 1rem;
    }

    .colaborador-form .input-row {
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

    .colaborador-form .close-btn{
        top: 1rem;
        right: 1rem;
    }
</style>
<div class="colaborador-container h-align vh-center">
    <div class="colaborador-form">
    <button class="close-btn" id="close-colCad"><i class='bx bx-x'></i></button>
        <p class="title h-align v-center"> <i class='bx bx-user-circle'></i> Novo Colaborador</p>
        <form action="" id="colaborador-form">
            <div class="input-row">
                <div class="input-agroup">
                    <label for="">Nome Completo</label>
                    <input type="text" id="col-nome" required>
                </div>
            </div>
            <div class="input-row">
                <div class="input-agroup">
                    <label for="">Tipo</label>
                    <select name="col-tipo" id="col-tipo">
                        <option value="Gerenciador">Gerenciador</option>
                        <option value="Entregador">Entregador</option>
                    </select>
                </div>
                <div class="input-agroup">
                    <label for="">Situação</label>
                    <select name="col-situacao" id="col-situacao">
                        <option value="Ativo">Ativo</option>
                        <option value="Inativo">Inativo</option>
                    </select>
                </div>
            </div>
            <div class="input-row">
                <div class="input-agroup">
                    <label for="">Email</label>
                    <input type="email" id="col-email" required>
                </div>
                <div class="input-agroup">
                    <label for="">Telefone</label>
                    <input type="text" id="col-tel">
                </div>
            </div>

            <div class="input-row">
                <div class="input-agroup">
                    <label for="">CPF</label>
                    <input type="text" id="col-cpf" required>
                </div>
                <div class="input-agroup">
                    <label for="">CNH</label>
                    <input type="text" id="col-cnh">
                </div>
                <div class="input-agroup">
                    <label for="">CTPS</label>
                    <input type="text" id="col-ctps">
                </div>
            </div>

            <div class="action-row h-align">
                <input type="submit" value="Salvar Colaborador">
            </div>

        </form>
    </div>
</div>