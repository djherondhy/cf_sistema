<?php
  header("Content-Type: application/json; charset=UTF-8");
  header("Access-Control-Allow-Origin: *");

  require_once '../config/connection.php';

  $tabela = $_POST['tabela'];
 
  
   
   $stmt = $conn->prepare("SELECT * FROM `$tabela`");

   if($stmt->execute()){
    echo json_encode($stmt->fetchAll(PDO::FETCH_ASSOC));
   }else{
    echo json_encode('erro');
   }
    
    
   
 

?>