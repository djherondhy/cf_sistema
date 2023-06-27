<?php
    session_name('user');
    session_start();
    header("Access-Control-Allow-Origin: *");
    require_once '../config/connection.php';

    if(isset($_GET['type'])){
        $email = $_POST['email'];
        $senha = md5($_POST['senha']);

        $sql = "SELECT * FROM `user` WHERE email = '$email' AND password = '$senha'";
        $stmt = $conn->prepare($sql);

        if($stmt->execute()){
            if($stmt->rowCount() != 0){

               $data = $stmt->fetch(PDO::FETCH_ASSOC);

               $_SESSION['active'] = 1;
               $_SESSION['user_id'] = $data['id'];

               if($data['tipo'] == 1){
                header('Location: ../../views/cliente-home.php');
               }

            }else{
              
               header('Location: ../../views/login-user.php?invalid=1');

            }
        }
    }
?>