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
        width: 50%;
        background-color: none;
        flex-direction: column;
    }

    .detalhes-imagem h1{
        margin-bottom: 1rem;
    }

    .detalhes-imagem img{
        width: 15rem;
        object-fit: contain;
    } 
    .detalhes-imagem h1{
        font-size:1rem;
        text-align: center;
        margin-bottom: 1rem;
    }

    .detalhes-info h1{
        font-size:1rem;
        text-align: center;
        margin-bottom: 1rem;
    }
    .detalhes-info p{
        font-size:0.8rem;
        text-align: justify;
    }

    .card-category{
        display: flex;
        align-items: center;
        background-color: rgb(239, 239, 239);
        padding: 0.5rem;
        width: 100%;
        margin-top: 1rem;
        border-radius: 1rem;
        gap: 0.5rem;
    } 

    
    .card-info{
        display: flex;
        align-items: center;
        background-color: rgb(239, 239, 239);
        padding: 0.5rem;
        margin-top: 1rem;
        border-radius: 1rem;
        width: 100%;
    }

 
    i{
        color: var(--main-color);
        width: 30px;
        font-size: 22px;
    }

    .cad-group{
        display: flex;
        flex-direction: row;
        width: 100%;
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
            <h1 id="detalhes-nome">Omeprazol - 100 MG</h1>
            <img src="pictures/remedios/omeprazol.png" id="detalhes-imagem">
        </div>

        <div class="detalhes-info">
            <h1>Informações</h1>
            <p id="detalhe-descricao">
                Omeprazol é um medicamento protótipo da classe dos inibidores da bomba de protões, que
                diminuem a secreção gástrica alterando a atividade da H⁺/K⁺-ATPase.
            </p>
            <div class="card-group">
                <div class="card-category">
                    <i class='bx bx-category'></i>
                    <p id="detalhe_categoria">Genérico</p>
                </div>
                <div class="card-info">
                    <i class='bx bx-money-withdraw'></i>
                    <p id="detalhe_preco">R$ 12.00</p>
                </div>
                <div class="card-buttons">    
                    <div class="add">
                        <a href="#" onclick="" id='ad-carrinho'>
                            <i class='bx bxs-cart-add'></i>
                            <p>Carrinho</p>
                        </a>
                    </div>
                    

                </div>
            </div>

            
        </div>

    </div>
</div>

<script>
    $('.detalhes-container').hide();
</script>