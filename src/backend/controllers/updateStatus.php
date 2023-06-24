<?php

header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Origin: *");

require_once '../config/connection.php';

$data = json_decode($_POST['data'], true);
$status = $data['status'];
$id_pedido = $data['id_pedido'];
$id_cliente = $data['id_cliente'];

$conn->beginTransaction();
try {


    $conn->exec("UPDATE `pedido` SET `status` = '$status' WHERE `id_pedido` = '$id_pedido'");



    if ($status == 'Confirmado') {

        $conn->exec("INSERT INTO `notificacao`(`id_pedido`,`id_cliente`,`mensagem`)VALUES('$id_pedido','$id_cliente','O Pedido #$id_pedido teve status alterado para <b>Confirmado</b>')");
    }

    if ($status == 'Apto para Entrega') {

        $conn->exec("INSERT INTO `notificacao`(`id_pedido`,`id_cliente`,`mensagem`)VALUES('$id_pedido','$id_cliente','O <b>Pedido #$id_pedido</b> foi colocado na lista de Entrega.')");
    }

    if ($status == 'Em Entrega') {

        $conn->exec("INSERT INTO `notificacao`(`id_pedido`,`id_cliente`,`mensagem`)VALUES('$id_pedido','$id_cliente','O <b>Pedido #$id_pedido</b> saiu para entrega.')");
    }

    if ($status == 'Entregue') {

        $conn->exec("INSERT INTO `notificacao`(`id_pedido`,`id_cliente`,`mensagem`)VALUES('$id_pedido','$id_cliente','O <b>Pedido #$id_pedido</b> foi entregue Obrigado!')");

        $consulta = "SELECT quantidade, id_produto FROM pedido_item WHERE id_pedido = '$id_pedido'";

        $query = $conn->prepare($consulta);
       // $query->execute();

       // $dados = $query->fetchAll(PDO::FETCH_ASSOC);

      // for($i = 0; $i< $query->rowCount(); $i++){
        //    $quantidade = $dados[$i]['quantidade'];
        //    $id_produto = $dados[$i]['id_produto'];
          //  $dataAtual = date('Y-m-d'); 
            //$conn->exec("INSERT INTO `movimentacao` ( `id_produto`, `descricao`, `data`, `tipo`, `quantidade`) VALUES ('$id_produto', 'Pedido', '$dataAtual', '0', '$quantidade');");

        //}



    }
    






    $conn->commit();

    $response = array(
        'error' => 0,
        'message' => 'Pedito Alterado'
    );
    echo json_encode($response);


} catch (PDOException $e) {
    $conn->rollBack();
    $response = array(
        'error' => 1,
        'message' => 'Pedido não Alterado'
    );
    echo json_encode($response);

}





?>