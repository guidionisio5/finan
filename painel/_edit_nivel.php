<?php 

include 'conexao/conexao.php';

$id = $_POST['id'];
$newNivel = $_POST['new_nivel'];

$sql = "UPDATE usuario SET `id_user_nivel` = $newNivel WHERE id = $id";
$update = mysqli_query($conexao,$sql);

header('Location: list_users.php?alt=1');
?>