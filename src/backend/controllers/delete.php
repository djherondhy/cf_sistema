<?php
  header("Content-Type: application/json; charset=UTF-8");
  header("Access-Control-Allow-Origin: *");

  require_once '../config/connection.php';

  $tabela = $_POST['tabela'];
  $id = $_POST['id'];
  if($tabela == 'medicamentos'){

    $sql = "DELETE FROM `medicamentos` WHERE `id_medicamento` = $id";
    $stmt = $conn->prepare($sql);

    if($stmt->execute()){
        $response = array(
            'error'=> false,
            'message'=> 'Produto Removido'
        );
        echo json_encode($response);
    }else{
        $response = array(
            'error'=> true,
            'message'=> 'Produto Não Removido'
        );
        echo json_encode($response);
    }
  }
 

?>