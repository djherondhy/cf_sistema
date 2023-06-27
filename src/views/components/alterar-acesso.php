<?php ?>
<style>
    .acesso-container {
        position: fixed;
        width: 100vw;
        height: 100vh;
        background: rgba(65, 63, 63, 0.25);
        box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37);
        backdrop-filter: blur(4px);
        -webkit-backdrop-filter: blur(4px);
        width: 100vw;
        height: 100vh;
        z-index: 999;
    }

    .acesso-modal {
        background-color: var(--white-color);
        padding: 2rem 2rem;
        position: relative;
        width: 300px;
        border-radius: 30px;
        gap: 1rem;
    }
    .agroup{
        justify-content: space-between;
        font-size: 0.9rem;
        color: var(--gray-color);
    }

    .agroup select{
        padding: 0.3rem;
        border-radius: 30px;
        border: 0;
        outline: 0;
     
    }
    .agroup select option{
        outline: 0;
    }

    .acesso-modal .close-btn{
        top: 1rem;
        right: 1rem;
    }

    .agroup input{
    background-color: var(--main-color);
    border-radius: 30px;
    padding: 0.5rem 1.5rem;
    border: 0;
    color: var(--white-color);  
}
#id-colaborador{
    display: none;
}
</style>
<div class="acesso-container h-align vh-center">
    
    <div class="acesso-modal v-align">
    <button class="close-btn" id="close-acesso"><i class='bx bx-x'></i></button>

        <p class="title"><i class='bx bx-lock-open-alt' ></i> Alterar Acesso</p>
        <div class="agroup h-align">
        <form action="" id="update-acesso">
        <label for="acesso-select">Escolha o acesso</label>
            <select id="acesso-select">
                <option value="1">Permitir Acesso</option>
                <option value="0">Negar Acesso</option>
                <option value="2">Acesso Total</option>
            </select>
        </div>
        <div class="agroup h-align">
            <input type="text" id="id-colaborador">
            <input type="submit" value="Confirmar">
        </div>
        </form>
    </div>
</div>
<script>
    $('.acesso-container').hide();
    $('#close-acesso').click(function(){$('.acesso-container').fadeOut('slow');});
</script>
<?php ?>