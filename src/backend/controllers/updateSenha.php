<?php
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Origin: *");

require_once '../config/connection.php';

$jsonData = $_POST['data'];
$data = json_decode($jsonData, true);
$senha = md5($data['senha']);
$id = $data['id'];

$sql = "UPDATE `user` SET `password` = '$senha' WHERE id = '$id'";


$stmt = $conn->prepare($sql);

if ($stmt->execute()) {
    $response = array(
        'error' => false,
        'message' => 'Senha Atualizada'
    );
    echo json_encode($response);
} else {
    $response = array(
        'error' => true,
        'message' => 'Senha Não Atualizado'
    );
    echo json_encode($response);
}



?>