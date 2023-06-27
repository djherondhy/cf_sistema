<?php
header("Access-Control-Allow-Origin: *");

require_once '../config/connection.php';


if(isset($_FILES['imagem'])){
    $id = $_POST['id'];
    $ext = strtolower(substr($_FILES['imagem']['name'], -4));
    $new_name = $id.'_'.date("Y.m.d-H.i.s").$ext;

    $dir = '../upload/perfil/';

    move_uploaded_file($_FILES['imagem']['tmp_name'], $dir.$new_name);

  
    $sql = "UPDATE `user` SET `perfil` = '$new_name' WHERE `id` = '$id'";

    $stmt = $conn->prepare($sql);
    if($stmt->execute()){

       


        $response = array(
            'error' => 0,
            'message' => 'Perfil Alterado'
        );
        echo json_encode($response);
    }else{
        $response = array(
            'error' => 1,
            'message' => 'Perfil Não Alterado'
        );
        echo json_encode($response);
    }
}



?>