<?php

header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Origin: *");

require_once '../config/connection.php';

$dadosJson = $_POST['data'];
$data = json_decode($dadosJson, true);

$busca = $data['busca'];

if($busca == 'diaria'){
    $sql = "SELECT * FROM `pedido` WHERE status = 'Entregue' AND data  = CURRENT_DATE";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $subtotal = 0;
    $dados = $stmt->fetchAll(PDO::FETCH_ASSOC);

    for($i = 0; $i<$stmt->rowCount(); $i++){
        $subtotal = $subtotal + $dados[$i]['subtotal'];
    }

    echo json_encode($subtotal);
    
}


if($busca == 'mensal'){
    $sql = "SELECT * FROM `pedido` WHERE status = 'Entregue' and MONTH(data) = 6";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $subtotal = 0;
    $dados = $stmt->fetchAll(PDO::FETCH_ASSOC);

    for($i = 0; $i<$stmt->rowCount(); $i++){
        $subtotal = $subtotal + $dados[$i]['subtotal'];
    }

    echo json_encode($subtotal);
    
}

if($busca == 'clientes'){
    $sql = "SELECT * FROM `user`";
    $stmt = $conn->prepare($sql);
    $stmt->execute();

    echo json_encode($stmt->rowCount());
    
}

?>