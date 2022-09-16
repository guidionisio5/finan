<?php

include 'conexao/conexao.php';

$id = $_POST['id'];

$sql = "DELETE FROM usuario WHERE id = $id";
$delete = mysqli_query($conexao,$sql);


header('Location: list_users.php?del=1');

?>