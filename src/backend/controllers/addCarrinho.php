<?php
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Origin: *");

require_once '../config/connection.php';

$jsonData = $_POST['data'];
$data = json_decode($jsonData, true);
$id_produto = $data['id_produto'];
$id_cliente = $data['id_cliente'];
$sql = "SELECT * FROM `carrinho` WHERE `id_cliente` = '$id_cliente' AND  `id_produto` = '$id_produto'";
$stmt = $conn->prepare($sql);
$stmt->execute();

if($stmt->rowCount()!=0){
    $response = array(
        'error' => false,
        'message' => 'Item já adicionado ao carrinho'
    );
    echo json_encode($response);

}else{


    $insert = "INSERT INTO `carrinho`(`id_cliente`, `id_produto`, `quantidade`)values('$id_cliente','$id_produto','1')";
    $execute = $conn->prepare($insert);

    if ($execute->execute()) {
        $response = array(
            'error' => false,
            'message' => 'Adicionado ao Carrinho'
        );
        echo json_encode($response);
    } else {
        $response = array(
            'error' => true,
            'message' => 'Não adicionado ao Carrinho'
        );
        echo json_encode($response);
    }
}


?>