<?php

header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Origin: *");

require_once '../config/connection.php';




$id_pedido = $_POST['id_pedido'];


$sql = "SELECT m.nome_comercial, m.preco, p.quantidade  FROM `medicamentos` as m JOIN `pedido_item` as p ON p.id_produto = m.id_medicamento WHERE p.id_pedido = '$id_pedido'";

$stmt = $conn->prepare($sql);

if($stmt->execute()){
    echo json_encode($stmt->fetchAll(PDO::FETCH_ASSOC));
}
    

?>