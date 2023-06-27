<?php
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Origin: *");

require_once '../config/connection.php';


$data = json_decode($_POST['data'], true);
$tipo = $data['tipo'];
$produto = $data['produto'];
$nova_quantidade = $data['nova_quantidade'];
$quantidade = $data['quantidade'];
$descricao = $data['descricao'];
$data = date('Y-m-d');

$insert = "INSERT INTO `movimentacao` (`id_produto`, `descricao`, `data`, `tipo`, `quantidade`) VALUES ('$produto', '$descricao', '$data','$tipo', '$quantidade')";

$stmt = $conn->prepare($insert);

if($stmt->execute()){
    
    $update = "UPDATE `medicamentos` SET `quantidade` = '$nova_quantidade' WHERE `id_medicamento` = '$produto' ";
    $ex = $conn->prepare($update);
    if($ex->execute()){
        $response = array(
            'error' => 0,
            'message' => 'Movimentação Registrada'
        );
        echo json_encode($response);
    }else{
        $response = array(
            'error' => 1,
            'message' => 'Movimentação Não Registrada'
        );
        echo json_encode($response);
    }
   
}else{
    $response = array(
        'error' => 1,
        'message' => 'Movimentação Não Registrada'
    );
    echo json_encode($response);
}






?>