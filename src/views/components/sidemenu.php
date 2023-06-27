<style>
.sidemenu {
    min-width: 300px;
    height: 95%;
    border-radius: 30px;
    background: #ffffff;
    margin: 0.5rem;
    
}

.action-btns {
    padding: 1rem;
    justify-content: space-between;
    padding: 0.5rem;
}

.action-btns button {
    width: 40px;
    height: 40px;
    background-color: var(--main-color);
    border-radius: 50%;
    border: 0;
    color: #fff;
}

.perfil-area{
   gap: 0.2rem;
}

.perfil-area .perfil-img{
    width:100px;
    height: 100px;
    border-radius: 50%;
    background-color: var(--main-color);
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 2rem;
}

.perfil-img p{
    color: var(--white-color) !important;
}

.perfil-area .username{
    color:var(--sub-color);
    font-weight: bold;
}
.perfil-area .welcome{
    color: var(--gray-color)
}

.sidemenu .menu{
    padding: 1rem !important;
    gap: 0.5rem;
}

.menu a{
  width: 90%;
  border-radius: 10px;
  text-decoration: none;
  display: flex;
  padding: 0.5rem;
  align-items: center;
  gap: 20px;
  color: var(--dark-gray);
  font-size: 0.9rem;

}

.menu-active{
    background-color: var(--main-color);
    color: var(--white-color) !important;
}

@media screen and (max-width: 1050px){
    .sidemenu{
        min-width: 40px;
        display: flex;
        align-items: center;
    }
    .content{
        overflow-y: auto;
    }

    .menu a{
       justify-content: center;
       padding: 0;
       width: 40px;
       height: 40px;
    }
    .perfil-area .perfil-img{
        width:40px;
        height: 40px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 0.8rem;
    }


    .perfil-area .username{
        display: none;
    }
    .perfil-area .welcome{
        display: none;
    }


    .menu a p{
        display: none;
    }

    .action-btns p{
        display: none;
    }

    
}

</style>
<div class="sidemenu v-align neomorphism">
    <div class="action-btns h-align v-center">
        <p>ConnectFarma</p>
        <div>
            <button onclick="window.location.href='../backend/controllers/logout-adm.php'"><i class='bx bx-log-out'></i></button>
        </div>
    </div>
    <div class="perfil-area v-align vh-center">
        <div class="perfil-img">
           <p></p>
        </div>
        <p class="username">Administrador</p>
        <p class="welcome">Bem Vindo</p>
    </div>
    <div class="menu v-align h-center">
        <a href="painel-administrador.php" id="menu-painel"><i class='bx bxs-dashboard'></i> <p>Painel de Dados</p></a>
        <a href="painel-pedido.php" id="menu-pedidos"><i class='bx bx-receipt'></i>  <p>Pedidos</p></a>
        <a href="painel-produtos.php" id="menu-produtos"><i class='bx bxs-capsule'></i> <p>Produtos</p></a>
        <a href="painel-movimentacao.php" id="menu-movimentacao"><i class='bx bx-store-alt'></i> <p>Movimentações</p></a>
        <a href="painel-rh.php" id="menu-recursos"><i class='bx bx-body'></i><p>Recursos Humanos</p></a>
    </div>
</div>

<script src="../backend/requests/get-user-adm.js"></script>
<script>
    getAdm(<?php echo $id_user; ?>);
</script>