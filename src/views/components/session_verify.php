<?php
    session_name('colaborador');
    session_start();
    
    if (isset($_SESSION['active'])) {
        $id_user = $_SESSION['id'];
        
        if($_SESSION['permissao'] == 0){
            session_destroy();
            header('Location: login-administrador.php');
        }

        if($_SESSION['tipo'] != 'Gerenciador'){
            session_destroy();
            header('Location: login-administrador.php');
        }
    
    } else {
        session_destroy();
        header('Location: login-administrador.php');
    }
?>