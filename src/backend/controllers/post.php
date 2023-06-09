<?php
   header("Content-Type: application/json; charset=UTF-8");
   header("Access-Control-Allow-Origin: *");

   require_once '../config/connection.php';

   $jsonData = $_POST['data'];
   $data = json_decode($jsonData, true);

   //insert medicamentos
    if($data['tabela'] == 'medicamentos'){
    $sql = "INSERT INTO `medicamentos` (`nome_comercial`, `descricao`, `preco`, `secao`, `categoria`, `validade`, `imagem`) VALUES (:nome_comercial, :descricao, :preco, :secao, :categoria, :validade, :imagem)";

    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':nome_comercial', $data['nome_comercial']);
    $stmt->bindParam(':descricao', $data['descricao']);
    $stmt->bindParam(':preco', $data['preco']);
    $stmt->bindParam(':secao', $data['secao']);
    $stmt->bindParam(':categoria', $data['categoria']);
    $stmt->bindParam(':validade', $data['validade']);
    $stmt->bindParam(':imagem', $data['imagem']);
    
    if($stmt->execute()){
        $response = array(
            'error'=> false,
            'message'=> 'Produto Cadastrado'
        );
        echo json_encode($response);
    }else{
        $response = array(
            'error'=> true,
            'message'=> 'Produto Não Cadastrado'
        );
        echo json_encode($response);
    }
}

    if($data['tabela'] == 'secao'){
       $sql = "INSERT INTO `secao` (`codigo`,`localizacao`)VALUES(:codigo, :localizacao)";
       $stmt = $conn->prepare($sql);
       $stmt->bindParam(':codigo', $data['codigo']);
       $stmt->bindParam(':localizacao', $data['localizacao']);

       if($stmt->execute()){
        $response = array(
            'error'=> false,
            'message'=> 'Seção Cadastrada'
        );
        echo json_encode($response);
    }else{
        $response = array(
            'error'=> true,
            'message'=> 'Seção Não Cadastrado'
        );
        echo json_encode($response);
    }
    }

?>