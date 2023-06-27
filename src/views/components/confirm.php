<?php ?>
<style>
    .confirm-container{
        position: fixed;
        width: 100vw;
        height: 100vh;
        background: rgba( 65, 63, 63, 0.25 );
        box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
        backdrop-filter: blur( 4px );
        -webkit-backdrop-filter: blur( 4px );
        width: 100vw;
        height: 100vh;
        z-index: 2000;
    }
    .confirm-modal{
        padding: 1rem;
        background-color: var(--white-color);
        min-width: 300px;
        border-radius: 10px;
        gap: 1.5rem;
    }
    .confirm-modal p{
        color: var(--dark-gray);
        font-weight: bold;
    }

    .confirm-modal .action{
        justify-content: flex-end;
        gap: 0.5rem;
    }
    .confirm-container .action button{
        width: 100px;
        height: 30px;
        padding: 0.5rem 1rem;
        border-radius: 30px;
        border: 0;
    }
    .confirm-container #confirmar{
        background-color: var(--red-color);
        color: var(--white-color);
    }

    .confirm-container #cancelar{
        background-color: var(--gray-color);
        color: var(--white-color);
    }
</style>
<div class="confirm-container h-align vh-center">
    <div class="confirm-modal v-align vh-center">
        <p>Tem certeza que deseja remover?</p>
        <div class="action h-align">
            <button id="cancelar" class="h-align vh-center">Cancelar</button>
            <button id="confirmar" class="h-align vh-center">Confirmar</button>
        </div>
    </div>
</div>
<script>
    $('.confirm-container').hide();
</script>
<?php ?>