<?php

header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Origin: *");

require_once '../config/connection.php';

$dadosJson = $_POST['data'];
$data = json_decode($dadosJson, true);

$id_cliente = $data['id_cliente'];

$sql = "SELECT * FROM `endereco` WHERE `id_cliente` = '$id_cliente'";

$stmt = $conn->prepare($sql);

if($stmt->execute()){
    echo json_encode($stmt->fetchAll(PDO::FETCH_ASSOC));
}
    

?>