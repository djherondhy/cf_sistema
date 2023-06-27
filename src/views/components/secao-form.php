<style>
    .secao-container {
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

    .secao-modal {
        background-color: var(--white-color);
        padding: 1.5rem;
        padding-bottom: 2rem;
        border-radius: 30px;
        gap: 1rem;
        width: 300px;
        position: relative;
    }

    .secao-modal form {
        display: flex;
        flex-direction: column;
        gap: 1rem;
        font-size: 0.9rem;
    }

    .input-agroup {
        gap: 0.5rem;
    }

    .input-agroup input[type="text"] {
        border-radius: 6px;
        padding: 0.5rem;
        border: 1px solid var(--gray-color);
        outline-color: var(--main-color);
    }

    .input-agroup input[type="submit"] {
        background-color: var(--main-color);
        border-radius: 30px;
        padding: 0.5rem 1.5rem;
        border: 0;
        color: var(--white-color);
        width: 150px;

    }

    .input-agroup label {
        color: var(--dark-gray);
        font-weight: 600;
    }

    .secao-modal .close-btn{
        top:1rem;
        right: 1rem;
    }
</style>
<div class="secao-container h-align vh-center">
    <div class="secao-modal v-align">
        <button class="close-btn" id="close-secaocad"><i class='bx bx-x'></i></button>
        <p class="title">Nova Seção</p>
        <form action="" id="form-secao">
            <div class="input-agroup v-align">
                <label for="secao-codigo">Código</label>
                <input type="text" id="secao-codigo" placeholder="Ex.. AB-123">
            </div>
            <div class="input-agroup v-align">
                <label for="secao-localizacao">Localização</label>
                <input type="text" id="secao-localizacao" placeholder="Ex.. Prateleira 9, Coluna 8">
            </div>
            <div class="input-agroup v-align">
                <input type="submit" value="Salvar Seção">
            </div>
        </form>
    </div>
</div>