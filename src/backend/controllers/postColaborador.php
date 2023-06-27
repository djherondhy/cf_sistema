<?php
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Origin: *");
require_once '../config/connection.php';

$data = json_decode($_POST['data'], true);



$nome_completo = $data['nome_completo'];
$tipo = $data['tipo'];
$situacao = $data['situacao'];
$email = $data['email'];
$telefone = $data['telefone'];
$cpf = $data['cpf'];
$cnh = $data['cnh'];
$ctps = $data['ctps'];
$senha = '';
$permisao = 0;



$sql = "INSERT INTO `colaborador` (`nome_completo`, `tipo`, `situacao`, `cpf`, `cnh`, `ctps`, `email`, `telefone`, `senha`, `permissao`) VALUES ('$nome_completo', '$tipo', '$situacao', '$cpf', '$cnh', '$ctps', '$email', '$telefone', '$senha', '$permisao')";

$stmt = $conn->prepare($sql);

if($stmt->execute()){
    $response = array(
        'error' => 0,
        'message' => 'Colaborador Cadastrado'
    );
    echo json_encode($response);
}else{
    $response = array(
        'error' => 1,
        'message' => 'Colaborador Não  Cadastrado'
    );
    echo json_encode($response);
}

?>