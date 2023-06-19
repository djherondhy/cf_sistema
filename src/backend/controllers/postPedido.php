<?php
header("Access-Control-Allow-Origin: *");

require_once '../config/connection.php';


$data = json_decode($_POST['data'], true);

$id_cliente = $data['id_cliente'];
$dataFormatada = $data['dataFormatada'];
$forma_pagamento = $data['forma_pagamento'];
$forma_recebimento = $data['forma_recebimento'];
$hora = $data['hora'];
$status = $data['status'];


if (isset($data['cod_endereco'])) {
    $cod_endereco = $data['cod_endereco'];
} else {
    $cod_endereco = '';
}

$subtotal = 0;

for($i = 0; $i< count($data['itens']); $i++){
    $subtotal = $subtotal + ($data['itens'][$i][1] * $data['itens'][$i][2]);
}

try{
$conn->beginTransaction();

$conn->exec("INSERT INTO `pedido` ( `data`, `hora`, `status`, `id_cliente`, `forma_pagamento`, `cod_endereco`, `forma_recebimento`, `subtotal`) VALUES ('$dataFormatada', '$hora', '$status', '$id_cliente', '$forma_pagamento', '$cod_endereco', '$forma_recebimento', '$subtotal');");

$lastInsert = $conn->lastInsertId();

for($i = 0; $i< count($data['itens']); $i++){
    $id_medicamento = $data['itens'][$i][0];
    $quantidade = $data['itens'][$i][1];
    $conn->exec("INSERT INTO `pedido_item` (`id_pedido`, `id_produto`, `quantidade`) VALUES ('$lastInsert', '$id_medicamento', '$quantidade');");
}


$conn->exec("DELETE FROM carrinho WHERE id_cliente = '$id_cliente';");


$conn->commit();

$response = array(
    'error' => 0,
    'message' => 'Pedito Efetuado'
);
echo json_encode($response);


}catch(PDOException $e){
    $conn->rollBack();
    $response = array(
        'error' => 1,
        'message' => 'Pedido não efetuado'
    );
    echo json_encode($response);
    
}
?>