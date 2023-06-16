<?php ?>
<style>
    .detalhes-container {
        position: fixed;
        background: rgba(65, 63, 63, 0.25);
        box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37);
        backdrop-filter: blur(4px);
        -webkit-backdrop-filter: blur(4px);
        min-width: 100vw;
        height: 100vh;
        z-index: 2000;
        overflow: auto;
    }

    .detalhes-subcontaner {
        display: flex;
        background-color: var(--white-color);
        padding: 2rem 2rem;
        position: relative;
        width: 40rem;
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
        background-color:white;
    }

    .card-buttons{
        display: flex;
        justify-content: space-around;
        margin-top: 2rem;
        align-items: center;
    }

    .add a{
        display:flex;
        align-items: center;
        border: 2px solid var(--main-color); 
        border-radius: 10rem;
        padding:0.6rem
    }
    
    .favorito a{
        display:flex;
        align-items: center;
        border: 2px solid var(--main-color); 
        border-radius: 10rem;
        padding:0.6rem
    }

    .favorito a:hover{
        background-color: var(--main-color);
        color: white;
    }
   
    .favorito a:hover>i{
        background-color: var(--main-color);
        color: white;
    }

    .add a:hover{
        background-color: var(--main-color);
        color: white;
    }
   
    .add a:hover>i{
        background-color: var(--main-color);
        color: white;
    }

    .close-btn{
        margin-right: 0.4rem;
        margin-top: 0.3rem;
    }

    @media (max-width: 768px) {
        .detalhes-container{
            padding-top:5rem;
            
        }

        .detalhes-subcontaner{
            flex-wrap: wrap;
            width:80%;
            margin-bottom: 8rem;
            justify-content: center;
        }

    }
    

</style>

<div class="detalhes-container h-align vh-center">
    <div class="detalhes-subcontaner h-align">
        <button class="close-btn" id="close-detalhes"><i class='bx bx-x'></i></button>

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
                        <a href="">
                            <i class='bx bxs-cart-add'></i>
                            <p>Carrinho</p>
                        </a>
                    </div>
                    
                    <div class="favorito">
                        <a href="">
                            <i class='bx bxs-heart'></i>
                            <p>Favorito</p>
                        </a>
                    </div>

                </div>
            </div>

            
        </div>

    </div>
</div>