<style>
    .fornecedores-container {
        position: fixed;
        width: 400px;
        height: 100%;
        background-color: var(--white-color);
        right: 0;
        padding: 1rem;
        gap: 1rem;
       
    }

    .action-header {
        width: 100%;
        justify-content: flex-end;
        gap: 0.5rem;
    }

    .action-header button {
        border: 0;
        border-radius: 30px;
        background-color: var(--main-color);
        color: var(--white-color);
        padding: 0.5rem 1rem;
        min-width: 100px;
    }

    .fornecedores-table {
        width: 100%;
        gap: 0.5rem;
        overflow-y: auto;
        max-height: 70%;
    }

    .fornecedor-card {
        width: 90%;
        border: 1px solid var(--main-color);
        border-radius: 6px;
        justify-content: space-between;
        padding: 0.5rem;
        font-size: 0.8rem;
     
       
    }

    .fornecedor-card button {
        padding: 0.2rem;
        display: flex;
        width: 30px;
        height: 30px;
        align-items: center;
        justify-content: center;
        border: 0;
        border-radius: 3px;
        color: var(--white-color);
        background-color: var(--main-color);
    }

    .card-action {
        display: flex;
        gap: 0.2rem;
    }



    .fornecedor-card .card-agroup{
        width: 100%;
        display: flex;
        justify-content: space-between;
    }

    .fornecedor-card .info{
        color: var(--gray-color);
    }

    .card-most{
        display: flex;
        flex-direction: column;
        gap: 0.5rem;
        padding-bottom: 1rem;
    }

    .card-most i{
        color: var(--main-color);
    }
    .card-most p{
        display: flex;
        align-items: center;
        gap: 0.5rem;
        color: var(--gray-color);
       
    }

    .card-most .card-title{
        font-weight: bold;
        color: var(--dark-gray);
    }

    .fornecedor-name{
        font-weight: bold;
        color: var(--dark-gray);
    }
    #btn-novoFornecedor{
        gap: 0.5rem;
    }
</style>

<div class="fornecedores-container v-align">
<button class="close-btn" id="close-fornecedores"><i class='bx bx-x'></i></button>
    <p class="title"> Fornecedores </p>
    <div class="action-header h-align">
        <button class="h-align vh-center" id="btn-novoFornecedor"> <i class='bx bxs-layer-plus'></i> Novo Fornecedor</button>
    </div>
    <div class="fornecedores-table v-align">
        <div class="fornecedor-card v-align">
            <div class="card-agroup h-align">
            <div class="info">
                <p class="fornecedor-name">Pereira LTDA</p>
                <p class="fornecedor-cnpj">192.168.785/0001</p>
            </div>
            <div class="card-action">
                <button class="view-fornecedor"><i class='bx bx-collapse-alt'></i></button>
                <button><i class="bx bxs-edit"></i></button>
                <button class="delete"><i class="bx bxs-trash-alt"></i></button>
            </div>
            </div>
            <div class="card-most">
                <p class="card-title"> Informações</p>
                <p> <i class='bx bxs-envelope'></i> pereiraltda@gmail.com</p>
                <p><i class='bx bxs-phone'></i> (97)99140-5568</p>
                <p><i class='bx bxs-location-plus'></i> Rua das Dores, 1789, Bairro da Fonte</p>
            </div>
        </div>

    </div>
</div>