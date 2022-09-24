<?php 

include 'conexao/conexao.php';

$id = $_POST['id'];
$mail = $_POST['mail'];
$name = $_POST['name'];
$tel = $_POST['tel'];
$cnpj = $_POST['cnpj'];


$sql = "UPDATE usuario SET `mail` = '$mail', `name` = '$name', `tel` = '$tel', `cnpj` = '$cnpj' WHERE id = $id";
$att = mysqli_query($conexao,$sql);

header('Location: profile.php');
?>