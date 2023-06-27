<?php
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Origin: *");

require_once '../config/connection.php';

$dataJson = $_POST['data'];
$data = json_decode($dataJson, true);

$id = $data['id'];
$senha = md5($data['senha']);

$sql = "SELECT * FROM `user` WHERE `id` = '$id' AND `password` = '$senha'";
$stmt = $conn->prepare($sql);

if ($stmt->execute()) {
   if($stmt->rowCount()!=0){
    echo json_encode(1);
   }else{
    echo json_encode(0);
   }
}


?>