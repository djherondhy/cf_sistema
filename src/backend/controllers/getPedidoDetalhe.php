<?php

header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Origin: *");

require_once '../config/connection.php';



$data = json_decode($_POST['data'], true);

$id_pedido = $data['id_pedido'];


$sql = "SELECT pedido.*, user.username FROM `pedido` AS pedido JOIN `user` as user ON pedido.id_cliente = user.id WHERE pedido.id_pedido = '$id_pedido'";

$stmt = $conn->prepare($sql);

if($stmt->execute()){
    echo json_encode($stmt->fetchAll(PDO::FETCH_ASSOC));
}
    

?>