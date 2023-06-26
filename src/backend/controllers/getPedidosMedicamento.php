<?php

header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Origin: *");

require_once '../config/connection.php';

$dadosJson = $_POST['data'];
$data = json_decode($dadosJson, true);

$tabela = $data['tabela'];
$status = $data['status'];


$sql = "SELECT *  FROM `pedido_item` as p JOIN `medicamentos` as m ON p.id_medicamento = m.id_medicamento " ;
$stmt = $conn->prepare($sql);

if($stmt->execute()){
    echo json_encode($stmt->fetchAll(PDO::FETCH_ASSOC));
}
    

?>