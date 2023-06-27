<?php
session_name('colaborador');
session_start();
unset($_SESSION['active']);
unset($_SESSION['id']);
session_destroy();
header('Location: ../../views/login-administrador.php');
?>