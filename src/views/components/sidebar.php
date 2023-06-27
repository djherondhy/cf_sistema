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

    .sidemenu-btn{
        position: fixed;
        top:1rem;
        left:0;
        padding: 1rem;
        z-index: 500;
        background-color: var(--main-color);
        border-radius: 0px 10px 10px 0px;
        cursor: pointer;
        display: none;
    }
    .sidemenu-btn i{
        color: var(--white-color);
    }
    @media screen and (max-width: 660px){
        .sidebar{
            z-index: 400;
             width: 150px;
             display: none;
             transition: all 0.5s ease-out;
        }

        .sidebar-item{
            display: flex;
            flex-direction: row;
            width: 90%;
            justify-content: flex-start;
        }
        .sidemenu-btn{
            display: inline;
        }
    }



</style>
<div class="sidemenu-btn">
    <i class='bx bx-menu'></i>
</div>
<div class="sidebar">
    <div class="sidebar-item sidebar-active" onclick="window.location.href='cliente-home.php'">
    <i class='bx bxs-dashboard'></i>
        <p>Home</p>
    </div>
    <div class="sidebar-item" id="menu-pedidos" onclick="showPedido(<?php if (isset($_SESSION['active'])){ echo 0;}else{echo 1;} ?>)">
        <i class='bx bx-receipt'></i>
        <p>Pedidos</p>
    </div>
    <div class="sidebar-item" id="menu-carrinho" onclick="showCarrinho(<?php if (isset($_SESSION['active'])){ echo 0;}else{echo 1;} ?>)">
    <i class='bx bx-cart-alt' ></i>
        <p>Carrinho</p>
    </div>
    <?php if (isset($_SESSION['active'])){ ?>
    <div class="sidebar-item" onclick="window.location.href='profile-user.php'">
        <i class='bx bx-user'></i>
        <p>Profile</p>
    </div>
    <?php }?>
</div>
<script>
    $('.sidemenu-btn').click(function(){
      
        if($('.sidemenu-btn i').hasClass('bx-menu')){
            $('.sidebar').delay(300).css('display', 'flex');
            $('.sidemenu-btn i').removeClass('bx-menu');
            $('.sidemenu-btn i').addClass('bx-x');
        }else{
            if($('.sidemenu-btn i').hasClass('bx-x')){
            $('.sidebar').delay(300).css('display', 'none');
            $('.sidemenu-btn i').addClass('bx-menu');
            $('.sidemenu-btn i').removeClass('bx-x');
            }
        }        
    })
</script>
