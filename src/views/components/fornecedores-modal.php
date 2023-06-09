
<style>
.fornecedores-container{
    position: fixed;
    width: 400px;
    height: 100%;
    background-color: var(--white-color);
    right: 0;
    padding: 1rem;
    gap: 1rem;
}

.action-header{
    width: 100%;
    justify-content: flex-end;
    gap: 0.5rem;
}

.action-header button{
    border: 0;
    border-radius: 30px;
    background-color: var(--main-color);
    color: var(--white-color);
    padding: 0.5rem 1rem;
    min-width: 100px;
}

.fornecedores-table{
    width: 100%;
    gap: 0.5rem;
}

.fornecedor-card{
    width: 98%;
    border: 1px solid var(--main-color);
    border-radius: 6px;
    justify-content: space-between;
    padding: 0.5rem;
    font-size: 0.8rem;
}

.fornecedor-card button{
    padding: 0.2rem;
    display: flex;
    width: 30px;
    height: 30px;
    align-items:center;
    justify-content: center;
    border: 0;
    border-radius: 3px;
    color: var(--white-color);
    background-color: var(--main-color);
}

.card-action{
    display: flex;
    gap: 0.2rem;
}

</style>

<div class="fornecedores-container v-align">
    <p class="title"> Fornecedores </p>
    <div class="action-header h-align">
    <button class="h-align vh-center" id="btn-filtroFornecedor">Todos</button>
    <button class="h-align vh-center" id="btn-novoFornecedor">Novo Fornecedor</button>
    </div>
    <div class="fornecedores-table v-align">
        <div class="fornecedor-card h-align v-center">
            <div class="info">
                <p>Pereira LTDA</p>
                <p>192.168.785/0001</p>
            </div>
            <div class="card-action">
                <button> x </button>
                <button> x </button>
                <button> x </button>
            </div>
        </div>

        <div class="fornecedor-card">
            
            </div>
    </div>
</div>