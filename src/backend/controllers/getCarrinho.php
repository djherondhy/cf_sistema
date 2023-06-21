<?php

header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Origin: *");

require_once '../config/connection.php';

$dadosJson = $_POST['data'];
$data = json_decode($dadosJson, true);

$id_cliente = $data['id'];

$sql = "SELECT m.nome_comercial, m.preco, m.imagem, c.id_produto, c.quantidade as carrinho_quantidade FROM `medicamentos` AS M JOIN `carrinho` AS c ON m.id_medicamento = c.id_produto WHERE c.id_cliente = $id_cliente";

$stmt = $conn->prepare($sql);

if($stmt->execute()){
    echo json_encode($stmt->fetchAll(PDO::FETCH_ASSOC));
}
    

?>