<?php



header("Access-Control-Allow-Origin: *");
     require_once '../config/connection.php';
    
    if(isset($_POST['senha']) && isset($_POST['email'])){
       
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        $query = "SELECT * FROM `colaborador` WHERE `email` = '$email'";
        $stmt = $conn->prepare($query);

        if($stmt->execute()){
           if($stmt->rowCount() == 1){
                $dados = $stmt->fetch(PDO::FETCH_ASSOC);
                 $permissao = $dados['permissao'];
                 $tipo = $dados['tipo'];
                 $id = $dados['id'];
                 $cpf = $dados['cpf'];
                 $cpf = str_replace('.','', $cpf);
                 $cpf = str_replace('-','', $cpf);
                
                 if($cpf == $senha && $permissao != 0){
                    session_name('entregador');
                    session_start();
                    $_SESSION['active'] = true;
                    $_SESSION['permissao'] = $permissao;
                    $_SESSION['id'] = $id;
                    $_SESSION['tipo'] = $tipo;
                    
                    header('Location: ../../views/painel-entregador.php');
                 }else{
                    header('Location: ../../views/login-entregador.php?permissao=0');
                 }
           }else{
         
            header('Location: ../../views/login-entregador.php?invalid=1');
           }
        }else{
           
            header('Location: ../../views/login-entregador.php?invalid=1');  
        }

    }else{
        
        header('Location: ../../views/login-entregador.php?invalid=1');
    }
?>