<?php

header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Origin: *");

require_once '../config/connection.php';


$data = json_decode($_POST['data'], true);




$sql = "SELECT p.*, u.username FROM `pedido` as p JOIN `user` as u ON u.id = p.id_cliente WHERE p.status = 'Esperando Confirmação' ORDER BY p.id_pedido DESC LIMIT 3";

$stmt = $conn->prepare($sql);

if($stmt->execute()){
    echo json_encode($stmt->fetchAll(PDO::FETCH_ASSOC));
}
    

?>