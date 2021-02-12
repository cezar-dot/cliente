<?php
session_start();    
include_once("conex.php");

$empresa = filter_input(INPUT_POST, 'empresa',FILTER_SANITIZE_STRING);
$apelidos = filter_input(INPUT_POST, 'apelidos',FILTER_SANITIZE_STRING);
$correio = filter_input(INPUT_POST, 'correio',FILTER_SANITIZE_STRING);
$numero = filter_input(INPUT_POST, 'numero',FILTER_SANITIZE_STRING);

//echo "Empresa: $empresa <br>";
//echo "Apelidos: $apelidos <br>";
//echo "Correio: $correio <br>";
//echo "Numero: $numero <br>";

//$servidor = "localhost";
//$usuario = "root";
//$senha = "987789";
//$dbname = "empresa";

$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

$result_usuario = "INSERT INTO dados(empresa, apelidos, correio, numero, created) VALUES ('$empresa','$apelidos','$correio','$numero', NOW())";
$result_usuario = mysqli_query($conn, $result_usuario);

if(mysqli_insert_id($conn)){
    $_SESSION['msg'] = "<p style = 'color:green;'> Dados enviados com sucesso </p>";
    header("Location: upload.php");

}else{
    $_SESSION['msg'] = "<p style = 'color:red;'> Dados não enviados </p>";
    header("Location: upload.php");

}