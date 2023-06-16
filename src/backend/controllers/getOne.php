<?php
  header("Content-Type: application/json; charset=UTF-8");
  header("Access-Control-Allow-Origin: *");

  require_once '../config/connection.php';

  $dataJson = $_POST['data'];
  $data = json_decode($dataJson, true);

  $tabela = $data['tabela'];
  $id = $data['id'];
  $coluna = $data['coluna'];

  
    $sql = "SELECT * FROM `$tabela` WHERE `$coluna` = $id";
    $stmt = $conn->prepare($sql);

    if($stmt->execute()){
         echo json_encode($stmt->fetch(PDO::FETCH_ASSOC));
    }
  

?>