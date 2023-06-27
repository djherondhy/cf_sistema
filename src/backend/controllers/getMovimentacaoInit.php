<?php

header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Origin: *");

require_once '../config/connection.php';


$data = json_decode($_POST['data'], true);


$sql = "SELECT mov.*, m.nome_comercial FROM `movimentacao` as mov JOIN `medicamentos` as m ON m.id_medicamento = mov.id_produto ORDER BY mov.id_movimentacao DESC LIMIT 3";

$stmt = $conn->prepare($sql);

if($stmt->execute()){
    echo json_encode($stmt->fetchAll(PDO::FETCH_ASSOC));
}
    

?>