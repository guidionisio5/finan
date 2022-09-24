<?php

include 'conexao/conexao.php';
include 'script/password.php';

$id = $_POST['id'];
$currentPassword = $_POST['current_password'];
$newPassword = $_POST['new_password'];

$sql = "SELECT * FROM usuario WHERE id = $id";
$search = mysqli_query($conexao,$sql);
$array = mysqli_fetch_array($search);

$password = $array['password']; // senha antiga encriptada da database
$currentPassword = sha1($currentPassword); // encriptando senha para verificação

if($password == $currentPassword){

    $sql2 = "UPDATE usuario SET `password` = sha1('$newPassword') WHERE id = $id";
    $att = mysqli_query($conexao,$sql2);
    
    header('Location: profile.php?suc=1');

}else{
    header('Location: profile.php?err=1');
}
?>