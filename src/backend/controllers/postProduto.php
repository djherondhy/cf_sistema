<?php
header("Access-Control-Allow-Origin: *");

require_once '../config/connection.php';

$nome_comercial = $_POST['nome_comercial'];
$preco = $_POST['preco'];
$descricao = $_POST['descricao'];
$secao = $_POST['secao'];
$categoria = $_POST['categoria'];
$validade = $_POST['validade'];

if(isset($_FILES['imagem'])){
    $ext = strtolower(substr($_FILES['imagem']['name'], -4));
    $new_name = '_'.date("Y.m.d-H.i.s").$ext;

    $dir = '../upload/';

    move_uploaded_file($_FILES['imagem']['tmp_name'], $dir.$new_name);
}

$sql = "INSERT INTO `medicamentos` (`nome_comercial`, `descricao`, `preco`, `secao`, `categoria`, `validade`, `imagem`) VALUES ('$nome_comercial', '$descricao', '$preco', '$secao', '$categoria', '$validade', '$new_name')";

$stmt = $conn->prepare($sql);
if ($stmt->execute()) {
    $response = array(
        'error' => 0,
        'message' => 'Produto Cadastrado'
    );
    echo $response['error'];
} else {
    $response = array(
        'error' => 1,
        'message' => 'Produto Não Cadastrado'
    );
    echo $response['error'];
}


?>