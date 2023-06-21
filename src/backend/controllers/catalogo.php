<?php

header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Origin: *");

require_once '../config/connection.php';

$dadosJson = $_POST['data'];
$data = json_decode($dadosJson, true);

$tabela = $data['tabela'];
$coluna = $data['coluna'];

$sql = "SELECT * FROM `$tabela` WHERE $coluna = 1";
$stmt = $conn->prepare($sql);

if($stmt->execute()){
    echo json_encode($stmt->fetchAll(PDO::FETCH_ASSOC));
}
    

?>