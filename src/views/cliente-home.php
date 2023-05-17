<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width= , initial-scale=1.0">
    <title>A Farmácia ao Seu Alcance</title>
    <link rel="stylesheet" href="cliente-home.css">
</head>

<body>

    <div class="container">
        <div class="topbar">
            <div class="search-input">
                <input type="text" placeholder="Pesquisar por medicamento">
                <div class="search-button">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        style="fill: rgba(255, 255, 255, 1);transform: ;msFilter:;">
                        <path
                            d="M19.023 16.977a35.13 35.13 0 0 1-1.367-1.384c-.372-.378-.596-.653-.596-.653l-2.8-1.337A6.962 6.962 0 0 0 16 9c0-3.859-3.14-7-7-7S2 5.141 2 9s3.14 7 7 7c1.763 0 3.37-.66 4.603-1.739l1.337 2.8s.275.224.653.596c.387.363.896.854 1.384 1.367l1.358 1.392.604.646 2.121-2.121-.646-.604c-.379-.372-.885-.866-1.391-1.36zM9 14c-2.757 0-5-2.243-5-5s2.243-5 5-5 5 2.243 5 5-2.243 5-5 5z">
                        </path>
                    </svg>
                </div>
            </div>
            <div class="notificacao">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                    <circle cx="18" cy="6" r="3"></circle>
                    <path
                        d="M18 19H5V6h8c0-.712.153-1.387.422-2H5c-1.103 0-2 .897-2 2v13c0 1.103.897 2 2 2h13c1.103 0 2-.897 2-2v-8.422A4.962 4.962 0 0 1 18 11v8z">
                    </path>
                </svg>
            </div>
            <div class="user-perfil">
                <img src="pictures/perfil-mockup.jpg" alt="" srcset="">
            </div>
        </div>
        
        <?php
            include "components/sidebar.php";
        ?>

        <div class="section">
            <h2 class="section-title">Categorias</h2>
            <div class="categoria-list">
                <div class="categoria-card">
                    <p>Alopáticos</p>
                </div>
                <div class="categoria-card">
                    <p>Genéricos</p>
                </div>
                <div class="categoria-card">
                    <p>Similar</p>
                </div>
                <div class="categoria-card">
                    <p>Fitoterápicos</p>
                </div>
                <div class="categoria-card">
                    <p>Homeopáticos</p>
                </div>
                <div class="categoria-card">
                    <p>Manipulados</p>
                </div>
                <div class="categoria-card">
                    <p>Biológicos</p>
                </div>
                <div class="categoria-card">
                    <p>Fracionados</p>
                </div>
                <div class="categoria-card">
                    <p>Outros</p>
                </div>
            </div>
        </div>

        <div class="section">
            <h2 class="section-title">Produtos Recomendados</h2>

            <div class="product-list">

                <div class="product-card">
                    <div class="action-button">
                        <button>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <path
                                    d="M12 4.595a5.904 5.904 0 0 0-3.996-1.558 5.942 5.942 0 0 0-4.213 1.758c-2.353 2.363-2.352 6.059.002 8.412l7.332 7.332c.17.299.498.492.875.492a.99.99 0 0 0 .792-.409l7.415-7.415c2.354-2.354 2.354-6.049-.002-8.416a5.938 5.938 0 0 0-4.209-1.754A5.906 5.906 0 0 0 12 4.595zm6.791 1.61c1.563 1.571 1.564 4.025.002 5.588L12 18.586l-6.793-6.793c-1.562-1.563-1.561-4.017-.002-5.584.76-.756 1.754-1.172 2.799-1.172s2.035.416 2.789 1.17l.5.5a.999.999 0 0 0 1.414 0l.5-.5c1.512-1.509 4.074-1.505 5.584-.002z">
                                </path>
                            </svg>
                        </button>

                        <button>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <path
                                    d="M21.822 7.431A1 1 0 0 0 21 7H7.333L6.179 4.23A1.994 1.994 0 0 0 4.333 3H2v2h2.333l4.744 11.385A1 1 0 0 0 10 17h8c.417 0 .79-.259.937-.648l3-8a1 1 0 0 0-.115-.921zM17.307 15h-6.64l-2.5-6h11.39l-2.25 6z">
                                </path>
                                <circle cx="10.5" cy="19.5" r="1.5"></circle>
                                <circle cx="17.5" cy="19.5" r="1.5"></circle>
                            </svg>
                        </button>
                    </div>
                    <div class="product-img">
                        <img src="pictures/remedio.png" alt="">
                    </div>
                    <div class="card-text">
                        <p class="nome">Metronidazol</p>
                        <p class="categoria">Antibiótico</p>
                        <p class="preco">R$ 15.75</p>
                    </div>
                </div>
                <?php
                for ($i = 0; $i < 1; $i++) {


                    ?>
                   <div class="product-card">
                    <div class="action-button">
                        <button>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <path
                                    d="M12 4.595a5.904 5.904 0 0 0-3.996-1.558 5.942 5.942 0 0 0-4.213 1.758c-2.353 2.363-2.352 6.059.002 8.412l7.332 7.332c.17.299.498.492.875.492a.99.99 0 0 0 .792-.409l7.415-7.415c2.354-2.354 2.354-6.049-.002-8.416a5.938 5.938 0 0 0-4.209-1.754A5.906 5.906 0 0 0 12 4.595zm6.791 1.61c1.563 1.571 1.564 4.025.002 5.588L12 18.586l-6.793-6.793c-1.562-1.563-1.561-4.017-.002-5.584.76-.756 1.754-1.172 2.799-1.172s2.035.416 2.789 1.17l.5.5a.999.999 0 0 0 1.414 0l.5-.5c1.512-1.509 4.074-1.505 5.584-.002z">
                                </path>
                            </svg>
                        </button>

                        <button>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <path
                                    d="M21.822 7.431A1 1 0 0 0 21 7H7.333L6.179 4.23A1.994 1.994 0 0 0 4.333 3H2v2h2.333l4.744 11.385A1 1 0 0 0 10 17h8c.417 0 .79-.259.937-.648l3-8a1 1 0 0 0-.115-.921zM17.307 15h-6.64l-2.5-6h11.39l-2.25 6z">
                                </path>
                                <circle cx="10.5" cy="19.5" r="1.5"></circle>
                                <circle cx="17.5" cy="19.5" r="1.5"></circle>
                            </svg>
                        </button>
                    </div>
                    <div class="product-img">
                        <img src="pictures/remedios/omeprazol.png" alt="">
                    </div>
                    <div class="card-text">
                        <p class="nome">Omeprazol</p>
                        <p class="categoria">Antibiótico</p>
                        <p class="preco">R$ 15.75</p>
                    </div>
                </div>

                    <?php
                }
                ?>

            </div>


        </div>
    </div>
</body>

</html>