<?php
session_start();

$mailHeader = $_SESSION['mailx'];

if(!isset($_SESSION['mailx'])) {
    header('Location: ../index.php');
}

include 'conexao/conexao.php';

$sql = "SELECT * FROM usuario WHERE mail = '$mailHeader'";
$search = mysqli_query($conexao,$sql);
$array = mysqli_fetch_array($search);

$id = $array['id'];
$name = $array['name'];
$cnpj = $array['cnpj'];
$tel = $array['tel'];
$nivelUser = $array['id_user_nivel'];
?>