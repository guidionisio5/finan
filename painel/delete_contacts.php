<?php

include 'conexao/conexao.php';

$id = $_POST['id'];

$sql = "DELETE FROM agenda WHERE id = $id";
$delete = mysqli_query($conexao,$sql);


header('Location: list_contacts.php?del=1');

?>