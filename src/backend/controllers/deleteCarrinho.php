<?php
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Origin: *");

require_once '../config/connection.php';
$dataJson = $_POST['data'];
$data = json_decode($dataJson, true);
$id_cliente = $data['id_cliente'];
$id_produto = $data['id_produto'];

$sql = "DELETE FROM `carrinho` WHERE `id_cliente` = '$id_cliente' AND `id_Produto` = '$id_produto'";
$stmt = $conn->prepare($sql);

if ($stmt->execute()) {
    $response = array(
        'error' => false,
        'message' => 'Produto Removido'
    );
    echo json_encode($response);
} else {
    $response = array(
        'error' => true,
        'message' => 'Produto Não Removido'
    );
    echo json_encode($response);
}



?>