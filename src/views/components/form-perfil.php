<style>
 .perfil-container {
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

    .perfil-form{
        display: flex;
        flex-direction: column;
        gap: 1rem;
        padding: 1rem;
        min-width: 300px;
        background-color: var(--white-color);
        border-radius: 30px;
        position: relative;
    }

    .perfil-form form{
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        gap: 1rem;
        margin-top: 1rem;
    }

    .perfil-form label{
        border-radius: 30px;
        border: 2px dashed var(--gray-color);
        width: 90%;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        gap:1rem;
        min-height: 100px;
        color: var(--gray-color);
        cursor: pointer;
        padding: 0.5rem;
    }

    .perfil-form input {
        background-color: var(--main-color);
        border-radius: 30px;
        padding: 0.5rem 1.5rem;
        border: 0;
        color: var(--white-color);

    }

    #input-perfil{
        display: none;
    }

    #previewImagem{
        width: 100px;
        height: 100px;
        aspect-ratio: 3/4;
        object-fit: cover;
        border-radius: 50%;
    }
    .perfil-form .close-btn{
        top: 0.5rem;
        right: 1rem;
        color: var(--dark-gray);
    }
</style>
<div class="perfil-container h-align vh-center">
    <div class="perfil-form">
    <button class="close-btn" id="close-alter"><i class='bx bx-x'></i></button>
        <p class="title">Foto do Perfil</p>
        <form action="" id="perfil-form"  enctype="multipart/form-data">
            <label for="input-perfil">
                <img src="" alt="" srcset="" id="previewImagem">
                <p>Upload Foto</p>
                <input type="file" name="input-perfil" id="input-perfil">
            </label>

            <input type="submit" value = "Confirmar">
        </form>
    </div>
</div>
<script>
    $('.perfil-container').hide();
</script>