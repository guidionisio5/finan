<?php

include 'conexao/conexao.php';
$titulo = $_POST['titulo'];
$type = $_POST['type'];
$dateevent = $_POST['dateevent'];
$hour = $_POST['hour'];

$sql = "INSERT INTO event(titulo,type,dateevent,hour) VALUES('$titulo', '$type', '$dateevent', '$hour')";

$insert = mysqli_query($conexao,$sql);

header('Location: form_event.php?msg=1');

?>