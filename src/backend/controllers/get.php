<?php
  header("Content-Type: application/json; charset=UTF-8");
  header("Access-Control-Allow-Origin: *");

  require_once '../config/connection.php';

  $tabela = $_POST['tabela'];
  
  if($tabela == 'medicamentos'){
    $sql = "SELECT * FROM `medicamentos`";
    $stmt = $conn->prepare($sql);

    if($stmt->execute()){
         echo json_encode($stmt->fetchAll(PDO::FETCH_ASSOC));
    }
  }

  if($tabela == 'secao'){
    $sql = "SELECT * FROM `secao`";
    $stmt = $conn->prepare($sql);

    if($stmt->execute()){
         echo json_encode($stmt->fetchAll(PDO::FETCH_ASSOC));
    }
  }

?>