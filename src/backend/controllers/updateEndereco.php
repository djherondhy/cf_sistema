<?php
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Origin: *");

require_once '../config/connection.php';

$jsonData = $_POST['data'];
$data = json_decode($jsonData, true);

$id_cliente = $data['id_cliente'];
$nome_completo = $data['nome_completo'];
$cep = $data['cep'];
$cidade = $data['cidade'];
$estado = $data['estado'];
$logradouro = $data['logradouro'];
$bairro = $data['bairro'];
$numero = $data['numero'];
$complemento = $data['complemento'];

$sql = "UPDATE endereco SET nome_completo = '$nome_completo', cep = '$cep', cidade = '$cidade', estado = '$estado', logradouro = '$logradouro', bairro = '$bairro', numero = '$numero', complemento = '$complemento' WHERE id_cliente = '$id_cliente'";
$stmt = $conn->prepare($sql);

if ($stmt->execute()) {
    $response = array(
        'error' => false,
        'message' => 'Endereco Alterado.'
    );
    echo json_encode($response);
} else {
    $response = array(
        'error' => true,
        'message' => 'Endereco Não Alterado.'
    );
    echo json_encode($response);
}


?>