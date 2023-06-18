<?php
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Origin: *");

require_once '../config/connection.php';


$data = json_decode($_POST['data'], true);
$filtro = $data['filtro'];
$status = $data['status'];
$id_cliente = $data['id_cliente'];




$sql = "SELECT * FROM `pedido` WHERE $filtro AND status LIKE '%$status%' AND id_cliente = '$id_cliente';";

//echo json_encode($sql);
$stmt = $conn->prepare($sql);

if ($stmt->execute()) {
    echo json_encode($stmt->fetchAll(PDO::FETCH_ASSOC));
}







?>