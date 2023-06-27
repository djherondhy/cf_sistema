<?php
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Origin: *");

require_once '../config/connection.php';

$jsonData = $_POST['data'];
$data = json_decode($jsonData, true);
$id_cliente = $data['id_cliente'];
$id_produto = $data['id_produto'];
$new_quantidade = $data['quantidade'];

$sql = "UPDATE `carrinho` SET `quantidade` = '$new_quantidade' WHERE `id_cliente` = '$id_cliente' AND `id_produto` = '$id_produto'";


$stmt = $conn->prepare($sql);

if ($stmt->execute()) {
    $response = array(
        'error' => false,
        'message' => 'Carrinho Atualizado'
    );
    echo json_encode($response);
} else {
    $response = array(
        'error' => true,
        'message' => 'Carrinho Não Atualizado'
    );
    echo json_encode($response);
}



?>