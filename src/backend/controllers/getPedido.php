<?php

header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Origin: *");

require_once '../config/connection.php';


$data = json_decode($_POST['data'], true);

$id_cliente = $data['id_cliente'];


$sql = "SELECT id_pedido, data, hora, subtotal, forma_pagamento, forma_recebimento, status FROM `pedido` WHERE id_cliente  = '$id_cliente'";

$stmt = $conn->prepare($sql);

if($stmt->execute()){
    echo json_encode($stmt->fetchAll(PDO::FETCH_ASSOC));
}
    

?>