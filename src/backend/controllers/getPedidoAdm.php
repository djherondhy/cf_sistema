<?php

header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Origin: *");

require_once '../config/connection.php';


$data = json_decode($_POST['data'], true);
$status = $data['status'];
$forma_pagamento = $data['forma_pagamento'];
$forma_recebimento = $data['forma_recebimento'];
$busca = $data['busca'];



$sql = "SELECT *  FROM `pedido` as p JOIN `user` as u ON p.id_cliente = u.id WHERE status like '%$status%' AND forma_pagamento LIKE '%$forma_pagamento%' AND forma_recebimento LIKE '%$forma_recebimento%' AND data LIKE '%$busca%' ORDER BY p.id_pedido DESC";

$stmt = $conn->prepare($sql);

if($stmt->execute()){
    echo json_encode($stmt->fetchAll(PDO::FETCH_ASSOC));
}
    

?>