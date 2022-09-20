<?php

include 'conexao/conexao.php';

$id = $_POST['id'];
$name = $_POST['name'];
$mail = $_POST['mail'];
$phone = $_POST['telephone'];
$business = $_POST['business'];

$sql = "UPDATE agenda SET `name` = '$name', `mail` = '$mail', `telephone` = '$phone', `business` = '$business' WHERE id = $id";
$att = mysqli_query($conexao,$sql);
    
header('Location: list_contacts.php?suc=1');

?>