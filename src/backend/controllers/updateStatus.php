<?php

header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Origin: *");

require_once '../config/connection.php';

$data = json_decode($_POST['data'], true);
$status = $data['status'];
$id_pedido = $data['id_pedido'];
$id_cliente = $data['id_cliente'];

$conn->beginTransaction();
try{
   
    
    $conn->exec("UPDATE `pedido` SET `status` = '$status' WHERE `id_pedido` = '$id_pedido'");
    
    if($status == 'Confirmado'){

        $conn->exec("INSERT INTO `notificacao`(`id_pedido`,`id_cliente`,`mensagem`)VALUES('$id_pedido','$id_cliente','O Pedido #$id_pedido teve status alterado para <b>Confirmado</b>')");
    }

    if($status == 'Apto para Entrega'){

        $conn->exec("INSERT INTO `notificacao`(`id_pedido`,`id_cliente`,`mensagem`)VALUES('$id_pedido','$id_cliente','O <b>Pedido #$id_pedido</b> foi colocado na lista de Entrega.')");
    }

    

    
    $conn->commit();
    
    $response = array(
        'error' => 0,
        'message' => 'Pedito Alterado'
    );
    echo json_encode($response);
    
    
    }catch(PDOException $e){
        $conn->rollBack();
        $response = array(
            'error' => 1,
            'message' => 'Pedido não Alterado'
        );
        echo json_encode($response);
        
    }





?>