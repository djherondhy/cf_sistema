<?php

header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Origin: *");

require_once '../config/connection.php';

$dadosJson = $_POST['data'];
$data = json_decode($dadosJson, true);

$tabela = $data['tabela'];
$status = $data['status'];

$sql = "SELECT *  FROM `pedido` as p JOIN `user` as u ON p.id_cliente = u.id JOIN `endereco` as e ON p.cod_endereco = e.id_endereco WHERE status = '$status'";
$stmt = $conn->prepare($sql);

if($stmt->execute()){
    echo json_encode($stmt->fetchAll(PDO::FETCH_ASSOC));
}
    

?>