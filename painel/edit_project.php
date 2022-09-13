<?php 

include 'conexao/conexao.php';

$service = $_POST['service'];
$code = $_POST['id'];
$dateend = $_POST['date'];
$paytotal = $_POST['value'];
$npay = $_POST['npay'];

$sql = "UPDATE project SET service = '$service', dateend = '$dateend', paytotal = '$paytotal', npayments = '$npay' WHERE code = $code";
$att = mysqli_query($conexao,$sql);

header('Location: project_details.php?code='.$code);
?>