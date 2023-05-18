<?php

?>
<style>
    .sidebar {
        position: fixed;
        background-color: var(--main-color);
        top: 1rem;
        left: 0;
        border-radius: 0px 20px 20px 0px;
        display: flex;
        flex-direction: column;
        padding: 10px;
        gap: 1rem;
        justify-content: center;
        height: 90%;
    }

    .sidebar-active {
        background-color: var(--sub-color);
    }

    .sidebar-item {
        display: flex;
        flex-direction: column;
        border-radius: 20px;
        align-items: center;
        justify-content: center;
        color: var(--white-color);
        width: 50px;
        height: 50px;
        padding: 10px;
        gap: 2px;
        font-family: 'Poppins';
        font-size: 0.8rem;
        transition: all 0.5s ease-out;
        cursor: pointer;

    }

    .sidebar-item:hover {
        background-color: var(--sec-color);
    }

    .sidebar-active:hover {
        background-color: var(--sub-color);
    }

    .sidebar-item svg {
        fill: var(--white-color);
    }
</style>

<div class="sidebar">
    <div class="sidebar-item sidebar-active">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
            <path
                d="M12.71 2.29a1 1 0 0 0-1.42 0l-9 9a1 1 0 0 0 0 1.42A1 1 0 0 0 3 13h1v7a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-7h1a1 1 0 0 0 1-1 1 1 0 0 0-.29-.71zM6 20v-9.59l6-6 6 6V20z">
            </path>
        </svg>
        <p>Home</p>
    </div>
    <div class="sidebar-item">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
            <path
                d="M21 11h-3V4a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v14c0 1.654 1.346 3 3 3h14c1.654 0 3-1.346 3-3v-6a1 1 0 0 0-1-1zM5 19a1 1 0 0 1-1-1V5h12v13c0 .351.061.688.171 1H5zm15-1a1 1 0 0 1-2 0v-5h2v5z">
            </path>
            <path d="M6 7h8v2H6zm0 4h8v2H6zm5 4h3v2h-3z"></path>
        </svg>
        <p>Pedidos</p>
    </div>
    <div class="sidebar-item" id="menu-carrinho">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
            <path
                d="M21.822 7.431A1 1 0 0 0 21 7H7.333L6.179 4.23A1.994 1.994 0 0 0 4.333 3H2v2h2.333l4.744 11.385A1 1 0 0 0 10 17h8c.417 0 .79-.259.937-.648l3-8a1 1 0 0 0-.115-.921zM17.307 15h-6.64l-2.5-6h11.39l-2.25 6z">
            </path>
            <circle cx="10.5" cy="19.5" r="1.5"></circle>
            <circle cx="17.5" cy="19.5" r="1.5"></circle>
        </svg>
        <p>Carrinho</p>
    </div>
    <div class="sidebar-item">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
            <path
                d="M12 4.595a5.904 5.904 0 0 0-3.996-1.558 5.942 5.942 0 0 0-4.213 1.758c-2.353 2.363-2.352 6.059.002 8.412l7.332 7.332c.17.299.498.492.875.492a.99.99 0 0 0 .792-.409l7.415-7.415c2.354-2.354 2.354-6.049-.002-8.416a5.938 5.938 0 0 0-4.209-1.754A5.906 5.906 0 0 0 12 4.595zm6.791 1.61c1.563 1.571 1.564 4.025.002 5.588L12 18.586l-6.793-6.793c-1.562-1.563-1.561-4.017-.002-5.584.76-.756 1.754-1.172 2.799-1.172s2.035.416 2.789 1.17l.5.5a.999.999 0 0 0 1.414 0l.5-.5c1.512-1.509 4.074-1.505 5.584-.002z">
            </path>
        </svg>
        <p>Favoritos</p>
    </div>
    <div class="sidebar-item">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
            <path
                d="M12 2a5 5 0 1 0 5 5 5 5 0 0 0-5-5zm0 8a3 3 0 1 1 3-3 3 3 0 0 1-3 3zm9 11v-1a7 7 0 0 0-7-7h-4a7 7 0 0 0-7 7v1h2v-1a5 5 0 0 1 5-5h4a5 5 0 0 1 5 5v1z">
            </path>
        </svg>
        <p>Profile</p>
    </div>
</div>
<?php

?>