<?php
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Origin: *");

require_once '../config/connection.php';

$jsonData = $_POST['data'];
$data = json_decode($jsonData, true);
$codigo  = $data['codigo'];
$nome_fantasia  = $data['nome'];
$cnpj  = $data['cnpj'];
$telefone  = $data['telefone'];
$email  = $data['email'];
$endereco  = $data['endereco'];

$sql = "UPDATE `fornecedores` SET `nome_fantasia` = '$nome_fantasia', `cnpj` = '$cnpj', `telefone` = '$telefone', `email` = '$email', `endereco` = '$endereco' WHERE `codigo` = '$codigo'";


$stmt = $conn->prepare($sql);

if ($stmt->execute()) {
    $response = array(
        'error' => false,
        'message' => 'Dados Atualizados'
    );
    echo json_encode($response);
} else {
    $response = array(
        'error' => true,
        'message' => 'Dados Não Atualizado'
    );
    echo json_encode($response);
}



?>