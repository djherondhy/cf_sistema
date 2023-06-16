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

    .sidebar p{
        font-size: 0.8rem;
    }

    .sidebar-active {
        background-color: var(--sub-color);
        box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37)
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
    .sidebar-item i{
        color: #fff;
        justify-self: center;
    }

    .sidebar-item:hover {
        background-color: var(--sub-color);
        box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37)
    }

    .sidebar-active:hover {
        background-color: var(--sub-color);
        box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37)
    }

    .sidebar-item svg {
        fill: var(--white-color);
    }

    @media screen and (max-width: 650px){
    .sidebar{
        width: 95%;
        flex-direction: row;
        height: auto;
        top: auto;
        justify-content: space-between;
        padding: 1rem;
        bottom: 0;
        left: 0;
        border-radius: 30px 30px 0px 0px;
        z-index: 999;

    }


   
}

@media screen and (max-width: 450px){
    .sidebar-item{
        width: 35px;
        height: 35px;
    }

    .sidebar{
        width: 93%;
        justify-content: space-between;
        padding: 1rem;
        bottom: 0;
        border-radius: 30px 30px 0px 0px;
    }
}

@media screen and (max-width: 450px){
 

    .sidebar{
        width: 92%;
        justify-content: space-between;
        padding: 1rem;
        bottom: 0;
        border-radius: 30px 30px 0px 0px;
    }
}

</style>

<div class="sidebar">
    <div class="sidebar-item sidebar-active">
    <i class='bx bxs-dashboard'></i>
        <p>Home</p>
    </div>
    <div class="sidebar-item" id="menu-pedidos">
        <i class='bx bx-receipt'></i>
        <p>Pedidos</p>
    </div>
    <div class="sidebar-item" id="menu-carrinho">
    <i class='bx bx-cart-alt' ></i>
        <p>Carrinho</p>
    </div>
    <div class="sidebar-item">
    <i class='bx bx-heart' ></i>
        <p>Favoritos</p>
    </div>
    <div class="sidebar-item" onclick="window.location.href='profile-user.php'">
        <i class='bx bx-user'></i>
        <p>Profile</p>
    </div>
</div>
<?php

?>