<?php
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Origin: *");

require_once '../config/connection.php';

$jsonData = $_POST['data'];
$data = json_decode($jsonData, true);
$id = $data['id'];
$valor = $data['valor'];
$sql = "UPDATE `medicamentos` SET `onCatalogo` = '$valor' WHERE `medicamentos`.`id_medicamento` = $id";


$stmt = $conn->prepare($sql);

if ($stmt->execute()) {
    $response = array(
        'error' => false,
        'message' => 'Catálogo Atualizado'
    );
    echo json_encode($response);
} else {
    $response = array(
        'error' => true,
        'message' => 'Catálogo Não Atualizado'
    );
    echo json_encode($response);
}



?>