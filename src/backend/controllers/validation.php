<?php
  header("Content-Type: application/json; charset=UTF-8");
  header("Access-Control-Allow-Origin: *");

  require_once '../config/connection.php';

  $dataJson = $_POST['data'];
  $data = json_decode($dataJson, true);

  $tabela = $data['tabela'];
  $id = $data['id'];
  $coluna = $data['coluna'];

  
    $sql = "SELECT * FROM `$tabela` WHERE `$coluna`= '$id'";
    $stmt = $conn->prepare($sql);

    if($stmt->execute()){
        if($stmt->rowCount() !=0){
            $message = array(
                'error'=> false,
                'result' => 1
            );

            echo json_encode($message);
        }else{
            $message = array(
                'error'=> false,
                'result' => 0
            );

            echo json_encode($message);
        }
    }else{
        $message = array(
            'error'=> true
        );

        echo json_encode($message);
    }
  

?>