<?php
header("Access-Control-Allow-Origin: *");

require_once '../config/connection.php';

$nome_comercial = $_POST['nome_comercial'];
$preco = $_POST['preco'];
$descricao = $_POST['descricao'];
$secao = $_POST['secao'];
$categoria = $_POST['categoria'];
$validade = $_POST['validade'];
$data = date("Y/m/d");
$quantidade = $_POST['quantidade'];


if(isset($_FILES['imagem'])){
    $ext = strtolower(substr($_FILES['imagem']['name'], -4));
    $new_name = '_'.date("Y.m.d-H.i.s").$ext;

    $dir = '../upload/';

    move_uploaded_file($_FILES['imagem']['tmp_name'], $dir.$new_name);
}

$conn->beginTransaction();

try{
   
    
    $conn->exec("INSERT INTO `medicamentos` (`nome_comercial`, `descricao`, `preco`, `secao`, `categoria`, `validade`, `imagem`,`quantidade`) VALUES ('$nome_comercial', '$descricao', '$preco', '$secao', '$categoria', '$validade', '$new_name','$quantidade')");

    $last_insert = $conn->lastInsertId();
    
    $conn-> exec("INSERT INTO `movimentacao` (`id_produto`, `descricao`, `data`, `tipo`, `quantidade`) VALUES ('$last_insert', 'Cadastro de Produto', '$data', '1', '$quantidade')");

    $conn->commit();
    
    $response = array(
        'error' => 0,
        'message' => 'Produto Cadastrado'
    );
    echo json_encode($response);
    
    
    }catch(PDOException $e){
        $conn->rollBack();
        $response = array(
            'error' => 1,
            'message' => 'Produto Não Cadastrado'
        );
        echo json_encode($response);
        
    }




?>