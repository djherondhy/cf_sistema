<?php
  header("Content-Type: application/json; charset=UTF-8");
  header("Access-Control-Allow-Origin: *");

  require_once '../config/connection.php';

  $dadosJson = $_POST['data'];
  $data = json_decode($dadosJson, true);

 
  
  if($data['tabela'] == 'medicamentos'){
    $categoria = $data['categoria'];
    $secao = $data['secao'];
    $order = $data['order'];
    $sql = "SELECT * FROM `medicamentos` WHERE categoria Like '%$categoria%' AND secao LIKE '%$secao%' ORDER BY nome_comercial $order";
    $stmt = $conn->prepare($sql);

    if($stmt->execute()){
         echo json_encode($stmt->fetchAll(PDO::FETCH_ASSOC));
    }
    
  }



?>