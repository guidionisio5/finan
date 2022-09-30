<?php

include 'conexao/conexao.php';

$code = $_POST['code'];
$payment = $_POST['payment'];
$dateend = $_POST['date'];
$desc = $_POST['desc'];

$sql = "INSERT INTO `payment`(`code`, `payment`, `dateend`, `status`, `obs`) VALUES($code, '$payment', '$dateend', 'Pedente', '$desc')";
$query = mysqli_query($conexao,$sql);

header('Location: payments_details.php?code='.$code.'&msg=1');

?>