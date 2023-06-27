<?php
session_name('entregador');
session_start();
unset($_SESSION['active']);
unset($_SESSION['id']);
session_destroy();
header('Location: ../../views/login-entregador.php');
?>