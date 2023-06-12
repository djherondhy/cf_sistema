<?php ?>
<style>
    .detalhes-container {
        position: fixed;
        width: 100vw;
        height: 100vh;
        background: rgba(65, 63, 63, 0.25);
        box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37);
        backdrop-filter: blur(4px);
        -webkit-backdrop-filter: blur(4px);
        width: 100vw;
        height: 100vh;
        z-index: 1000;
    }

    .detalhes-subcontaner {
        display: flex;
        background-color: var(--white-color);
        padding: 2rem 2rem;
        position: relative;
        width: 40rem;
        height: 20rem;
        border-radius: 30px;
        gap: 1rem;
        
    }

    .detalhes-imagem{
        display: flex;
        width: 20rem;
        background-color: none;
        align-items: center;
        flex-direction: column;
    }

    .detalhes-info{
        display: flex;
        width: 20rem;
        background-color: none;
        align-items: center;
        flex-direction: column;
    }

    .detalhes-imagem h1{
        margin-bottom: 1rem;
    }

    .detalhes-imagem img{
        width: 15rem;
    } 
    h1{
        font-size:1.5rem;
        text-align: center;
        margin-bottom: 1rem;
    }
    p{
        font-size:1rem;
        text-align: justify;
    }

    .card-category, .card-info{
        display: flex;
        align-items: center;
        background-color: rgb(239, 239, 239);
        padding: 0.5rem;
        padding-right: 13rem;
        margin-top: 1rem;
        border-radius: 1rem;
        
    }
    i{
        color: var(--main-color);
        width: 30px;
        font-size: 22px;
        font-weight: bold;
        
    }
    .cad-group{
        display: flex;
        justify-content: space-between;
        flex-direction: row;
    }

    .card-buttons a{
        text-decoration: none;
        color: black;   
        font-weight: bold;
    }

    .card-buttons{
        display: flex;
        justify-content: space-around;
        margin-top: 2rem;
        align-items: center;
    }

    .add{
        display:flex;
        align-items: center;
        border: 2px solid var(--main-color); 
        border-radius: 10rem;
        padding:0.6rem
    }
    
    .favorito{
        display:flex;
        align-items: center;
        border: 2px solid var(--main-color); 
        border-radius: 10rem;
        padding:0.6rem
    }
    .close-btn{
        margin-right: 0.4rem;
        margin-top: 0.3rem;
    }

</style>

<div class="detalhes-container h-align vh-center">
    <div class="detalhes-subcontaner h-align">
        <button class="close-btn" id="close-secoes"><i class='bx bx-x'></i></button>

        <div class="detalhes-imagem">
            <h1>Omeprazol - 100 MG</h1>
            <img src="pictures/remedios/omeprazol.png">
        </div>

        <div class="detalhes-info">
            <h1>Informações</h1>
            <p>
                Omeprazol é um medicamento protótipo da classe dos inibidores da bomba de protões, que
                diminuem a secreção gástrica alterando a atividade da H⁺/K⁺-ATPase.
            </p>
            <div class="card-group">
                <div class="card-category">
                    <i class='bx bx-category'></i>
                    <p  id="detalhe_categoria">Genérico</p>
                </div>
                <div class="card-info">
                    <i class='bx bx-money-withdraw'></i>
                    <p id="detalhe_preco">R$ 12.00</p>
                </div>
                <div class="card-buttons">
                    <div class="add">
                        <i class='bx bxs-cart-add'></i>
                        <a href="">Carrinho</a>
                    </div>
                    
                    <div class="favorito">
                        <i class='bx bxs-heart'></i>
                        <a href="">Favorito</a>
                    </div>
                </div>
            </div>

            
        </div>

    </div>
</div>