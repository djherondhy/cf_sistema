<style>
    .view-container {
        width: 400px;
        height: 100vh;
        background-color: var(--white-color);
        position: absolute;
        z-index: 2000;
        right: 0;
        font-size: 0.8rem;
        display: flex;
        flex-direction: column;

    }

    .info {
        padding: 1rem;
        display: flex;
        flex-direction: column;
        gap: 0.2rem;
    }

    .dados {
        padding: 1rem;
        display: flex;
        flex-direction: column;
        gap: 0.2rem;
    }

    .contato {
        padding: 1rem;
        display: flex;
        flex-direction: column;
        gap: 0.2rem;
    }


    .nome-completo {
        color: var(--main-color) !important;
        font-weight: bold;
    }

    .tipo {
        color: var(--gray-color);
    }

    .view-container p {
        display: flex;
        align-items: center;
        gap: 0.3rem;
        color: var(--gray-color);
    }

    .view-container p i {
        color: var(--main-color);

    }

    .view-title {
        align-self: center;
        color: var(--main-color) !important;
        font-weight: bold;
    }
</style>
<div class="view-container neomorphism">
    <button class="close-btn" id="close-view"><i class='bx bx-x'></i></button>

    <div class="info">
        <p class="nome-completo"><i class='bx bx-user'></i><span>Djherondhy Felipe Bezerra Pinheiro</span></p>
        <p class="tipo"><span></span></p>
        <p class='situacao view-situacao'><i class='bx bxs-user-check'></i><span>Ativo</span></p>
        <p class='acesso view-acesso'><i class='bx bx-lock-alt'></i><span>CPF: 052.720.312-29</span></p>
    </div>
    <div class="dados">
        <p class="view-title"><i class='bx bx-info-square'></i> Dados</p>
        <p class='cpf'><i class='bx bx-id-card'></i>CPF: <span>052.720.312-29</span></p>
        <p class='ctps'><i class='bx bx-id-card'></i>CTPS: <span>052.720.312-29</span></p>
        <p class='cnh'><i class='bx bx-id-card'></i>CNH: <span>052.720.312-29</span></p>
    </div>
    <div class="contato">
        <p class="view-title"><i class='bx bxs-phone-call'></i> Contato</p>
        <p class='telefone'><i class='bx bx-envelope'></i><span>(97) 99140-5568</span></p>
        <p class='email'><i class='bx bx-phone'></i><span>djherondhyoficial@gmail.com<span></p>
    </div>
</div>

<script>

    $('.view-container').hide();
    $('#close-view').click(function () {
        $('.view-container').fadeOut('slow');
    })
</script>