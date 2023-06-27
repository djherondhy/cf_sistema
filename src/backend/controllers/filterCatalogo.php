<?php

header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Origin: *");

require_once '../config/connection.php';

$dadosJson = $_POST['data'];
$data = json_decode($dadosJson, true);
$categoria = $data['categoria'];
$busca = $data['busca'];

$sql = "SELECT * FROM `medicamentos` WHERE `categoria` LIKE '%$categoria%'  AND `nome_comercial` LIKE '%$busca%'";
$stmt = $conn->prepare($sql);

if($stmt->execute()){
    echo json_encode($stmt->fetchAll(PDO::FETCH_ASSOC));
}
    

?>