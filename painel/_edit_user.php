<?php

include 'conexao/conexao.php';
include 'script/password.php';

$id = $_GET['id'];
$mail = $_POST['mail'];
$currentPassword = $_POST['current_password'];

$sql = "SELECT * FROM usuarios WHERE id = $id";
$search = mysqli_query($conexao,$sql);
$array = mysqli_fetch_array($search);

$password = $array['password'];
$currentPassword = sha1($password); // encriptando password

if($password == $currentPassword){

$sql2 = "UPDATE usuario SET `mail` = '$mail', `password` = sha1('$currentPassword') WHERE id = $id";
$att = mysqli_query($conexao,$sql2);

header('Location: list_users.php');

}else{
    header('Location: list_users.php?msg=1');
}
?>