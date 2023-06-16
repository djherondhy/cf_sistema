<?php
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Origin: *");

require_once '../config/connection.php';

$jsonData = $_POST['data'];
$data = json_decode($jsonData,true);
$nome_completo = $data['nome_completo'];
$username = $data['username'];
$password = md5($data['senha']);
$email = $data['email'];

$sql = "INSERT INTO `user` (`nome_completo`,`username`, `password`, `email`, `tipo`)values('$nome_completo', '$username','$password','$email', '1')";

$stmt = $conn->prepare($sql);

if($stmt->execute()){
    $message = array(
        'error'=> false,
        'messsage' => 'Registrado com sucesso',
        'result' => md5($email)
    );

    echo json_encode($message);
}else{
    $message = array(
        'error'=> true,
        'messsage' => 'Ocorreu um erro, não registrado'
    );

    echo json_encode($message);
}



?>
