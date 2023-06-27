<?php
header("Access-Control-Allow-Origin: *");

require_once '../config/connection.php';

$nome_comercial = $_POST['nome_comercial'];
$preco = $_POST['preco'];
$descricao = $_POST['descricao'];
$secao = $_POST['secao'];
$categoria = $_POST['categoria'];
$validade = $_POST['validade'];
$quantidade = $_POST['quantidade'];
$fornecedor = $_POST['fornecedor'] ;
$id = $_POST['id_produto'];




$conn->beginTransaction();

try{
   
    
    $conn->exec("UPDATE `medicamentos` SET `nome_comercial` = '$nome_comercial', `descricao` = '$descricao', `categoria` = '$categoria', `secao` = '$secao', `validade` = '$validade', `quantidade` = '$quantidade', `preco` = '$preco', `codFornecedor` = '$fornecedor' WHERE `id_medicamento` = '$id'");

    
    if(isset($_FILES['imagem'])){
        $ext = strtolower(substr($_FILES['imagem']['name'], -4));
        $new_name = '_'.date("Y.m.d-H.i.s").$ext;
    
        $dir = '../upload/';
    
        move_uploaded_file($_FILES['imagem']['tmp_name'], $dir.$new_name);

        $conn->exec("UPDATE `medicamentos` SET `imagem` = '$new_name' WHERE `id_medicamento` = '$id'");
    }


    $conn->commit();
    
    $response = array(
        'error' => 0,
        'message' => 'Produto Alterado'
    );
    echo json_encode($response);
    
    
    }catch(PDOException $e){
        $conn->rollBack();
        $response = array(
            'error' => 1,
            'message' => 'Produto Não Alterado'
        );
        echo json_encode($response);
        
    }




?>