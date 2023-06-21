<?php
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Origin: *");

require_once '../config/connection.php';

$jsonData = $_POST['data'];
$data = json_decode($jsonData, true);

//cadastro de seção
if ($data['tabela'] == 'secao') {
    $sql = "INSERT INTO `secao` (`codigo`,`localizacao`)VALUES(:codigo, :localizacao)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':codigo', $data['codigo']);
    $stmt->bindParam(':localizacao', $data['localizacao']);

    if ($stmt->execute()) {
        $response = array(
            'error' => false,
            'message' => 'Seção Cadastrada'
        );
        echo json_encode($response);
    } else {
        $response = array(
            'error' => true,
            'message' => 'Seção Não Cadastrado'
        );
        echo json_encode($response);
    }
}


; //cadastro de fornecedores
if ($data['tabela'] == 'fornecedores') {

    $sql = "INSERT INTO `fornecedores` (`nome_fantasia`, `cnpj`, `email`, `telefone`, `endereco`) VALUES(:nome_fantasia, :cnpj, :email, :telefone, :endereco)";

    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':nome_fantasia', $data['nome_fantasia']);
    $stmt->bindParam(':cnpj', $data['cnpj']);
    $stmt->bindParam(':email', $data['email']);
    $stmt->bindParam(':telefone', $data['telefone']);
    $stmt->bindParam(':endereco', $data['endereco']);
    if ($stmt->execute()) {
        $response = array(
            'error' => false,
            'message' => 'Fornecedor Cadastrado.'
        );
        echo json_encode($response);
    } else {
        $response = array(
            'error' => true,
            'message' => 'Fornecedor Não Cadastrado.'
        );
        echo json_encode($response);
    }
}

if ($data['tabela'] == 'endereco') {

    $id_cliente = $data['id_cliente'];
    $nome_completo = $data['nome_completo'];
    $cep = $data['cep'];
    $cidade = $data['cidade'];
    $estado = $data['estado'];
    $logradouro = $data['logradouro'];
    $bairro = $data['bairro'];
    $numero = $data['numero'];
    $complemento = $data['complemento'];

    $sql = "INSERT INTO `endereco` (`id_cliente`, `nome_completo`, `cep`, `cidade`, `estado`, `logradouro`, `bairro`, `numero`, `complemento`) VALUES ('$id_cliente', '$nome_completo', '$cep', '$cidade', '$estado', '$logradouro', '$bairro', '$numero', '$complemento');";
    $stmt = $conn->prepare($sql);

    if ($stmt->execute()) {
        $response = array(
            'error' => false,
            'message' => 'Endereco Cadastrado.'
        );
        echo json_encode($response);
    } else {
        $response = array(
            'error' => true,
            'message' => 'Endereco Não Cadastrado.'
        );
        echo json_encode($response);
    }




}

?>