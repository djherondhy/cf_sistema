<?php
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Origin: *");

require_once '../config/connection.php';

$jsonData = $_POST['data'];
$data = json_decode($jsonData, true);

$id = $data['id_colaborador'];
$nome_completo = $data['nome_completo'];
$tipo = $data['tipo'];
$situacao = $data['situacao'];
$email = $data['email'];
$telefone = $data['telefone'];
$cpf = $data['cpf'];
$cnh = $data['cnh'];
$ctps = $data['ctps'];


$sql = "UPDATE colaborador SET nome_completo = '$nome_completo', tipo = '$tipo', situacao = '$situacao', email = '$email', telefone = '$telefone', cpf ='$cpf', cnh = '$cnh', ctps = '$ctps'  WHERE id = '$id'";


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