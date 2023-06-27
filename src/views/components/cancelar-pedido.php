<?php ?>
<style>
    .cancelar-container {
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

    .cancelar-modal {
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

    .cancelar-modal .close-btn{
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
<div class="cancelar-container h-align vh-center">
    
    <div class="cancelar-modal v-align">
    <button class="close-btn" id="close-cancelar"><i class='bx bx-x'></i></button>

        <p class="title"><i class='bx bx-lock-open-alt' ></i> Cancelar Pedido</p>
        <div class="agroup h-align">
        <form action="" id="cancelar-pedido">
        <label for="acesso-select">Escolha o acesso</label>
            <input type="text" id="">
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
    $('#close-cancelar').click(function(){$('.cancelar-container').fadeOut('slow');});
</script>
<?php ?>