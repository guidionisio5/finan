<?php
    session_start();
include './painel/conexao/conexao.php';



$mail = $_POST['mail'];
$password = $_POST['password']; //client

$sql = "SELECT * FROM usuario WHERE mail = '$mail'";
$search = mysqli_query($conexao,$sql);
$array = mysqli_fetch_array($search);

$passwordBase = $array['password']; // database
$passwordEnc = $password; // encriptando password client

if($passwordEnc == $passwordBase) {
    $_SESSION['mailx'] = $mail;
    header('Location: ./painel/index.php');
} else {
    header('Location: index.php?msg=2');
}

?>