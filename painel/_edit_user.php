<?php

include 'conexao/conexao.php';
include 'script/password.php';

$id = $_GET['id'];
$mail = $_POST['mail'];
$newPassword = $_POST['password'];

$passwordBase = $array['password']; // database
$passwordEnc = sha1($newPassword); // encriptando password client

$sql = "UPDATE usuario SET `mail` = '$mail', `password` = sha1('$newPassword') WHERE id = $id";
$att = mysqli_query($conexao,$sql);

header('Location: list_users.php');
?>