<?php
include './conexao/conexao.php';




$mail = $_POST['mail'];
$password = $_POST['password'];
$nivel = $_POST['level'];

$sql = "SELECT * FROM usuario WHERE mail = '$mail'";
$search = mysqli_query($conexao,$sql);

$total = mysqli_num_rows($search);

if($total > 0) {
    header('Location: form_user.php?err=1');
} else {
    $sql = "INSERT INTO usuario (mail,password,id_user_nivel) VALUES('$mail', sha1('$password'),$nivel)";
    $insert = mysqli_query($conexao, $sql);

    // header('Location: form_user.php?msg=1');
    header('Location: form_user.php?suc=1');
}
?>