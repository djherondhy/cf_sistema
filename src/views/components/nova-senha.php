<style>
    .senha-container {
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
        display: flex;
        align-items: center;
        justify-content: center;

    }

    .senha-form {
        background-color: var(--white-color);
        padding: 1rem;
        border-radius: 30px;
        min-width: 350px;
        display: flex;
        flex-direction: column;
        gap: 0.5rem;
        position: relative;

    }

    .senha-form form {
        display: flex;
        flex-direction: column;
        gap: 0.5rem;
    }

    .senha-form .input-agroup {
        display: flex;
        flex-direction: column;
        gap: 0.3rem;
    }

    .input-agroup label {
        font-size: 0.8rem;
    }

    .input-agroup input[type="password"] {
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
        margin-top: 1rem;
    }

    .input-agroup label {
        font-weight: 700;
        font-size: 0.8rem;
    }

    .senha-form .close-btn {
        color: var(--dark-color);
        top: 1rem;
        right: 1rem;
    }

    .message {
        font-size: 0.8rem;
        margin-top: 0.2rem;
        margin-bottom: 0.2rem;
        color: var(--red-color);
    }

    @keyframes tremida {
        0% {
            transform: translate(0);
        }

        20% {
            transform: translate(-5px, -5px) rotate(-5deg);
        }

        40% {
            transform: translate(5px, -5px) rotate(5deg);
        }

        60% {
            transform: translate(-5px, 5px) rotate(-5deg);
        }

        80% {
            transform: translate(5px, 5px) rotate(5deg);
        }

        100% {
            transform: translate(0);
        }
    }
</style>
<div class="senha-container">
    <div class="senha-form">
        <button class="close-btn" id="close-nvSenha"><i class='bx bx-x'></i></button>
        <p class="title">Nova Senha</p>
        <form action="" id="senha-form">
            <div class="input-agroup">
                <label for="">Confirme a Senha Atual</label>
                <input type="password" placeholder="Senha Atual" id="input-senha-atual" required>
                <span class="senha-atual-message message">Senha errada</span>
            </div>
            <div class="input-agroup">
                <label for="">Nova Senha </label>
                <input type="password" placeholder="Nova Senha" id="input-nv-senha" required>
                <span class="senha-message message">Deve conter 8 dígitos</span>
            </div>
            <div class="input-agroup">
                <label for="">Confirme a Nova Senha</label>
                <input type="password" placeholder="Confirme Nova Senha" id="confirm-senha" required>
                <span class="confirm-senha-message message">As senhas não são iguais</span>
            </div>

            <div class="input-agroup">
                <input type="submit" value="Salvar" id="nv-senha">
            </div>
        </form>
    </div>
</div>
<script>
    $('.senha-container').hide();
    $('.message').hide();
    $('#close-nvSenha').click(function(){
        $('.senha-container').fadeOut('slow');
    });
</script>