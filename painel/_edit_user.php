<?php

session_start();
include 'conexao/conexao.php';
include 'script/password.php';

$id = $_POST['id'];
$mail = $_POST['mail'];
$currentPassword = $_POST['current_password'];
$newPassword = $_POST['new_password'];

$sql = "SELECT * FROM usuario WHERE id = $id";
$search = mysqli_query($conexao,$sql);
$array = mysqli_fetch_array($search);

$password = $array['password']; // senha antiga encriptada da database
$currentPassword = sha1($currentPassword); // encriptando senha para verificação

if($password == $currentPassword){

    $sql2 = "UPDATE usuario SET `mail` = '$mail', `password` = sha1('$newPassword') WHERE id = $id";
    $att = mysqli_query($conexao,$sql2);
    
    header('Location: list_users.php?suc=1');

}else{
    header('Location: list_users.php?err=1');
}
?>