<?php

include 'conexao/conexao.php';

$code = $_POST['code'];
$client = $_POST['client'];
$service = $_POST['service'];
$desc = $_POST['description'];
$date = date('d-m-Y');
$date2 = $_POST['date'];
$paytotal = $_POST['value'];
$npayments = $_POST['parc'];
$obs = $_POST['obs'];
$tasks = $_POST['tasks'];

$total = count($tasks);

for ($i=0; $i < $total; $i++) {
    $sql = "INSERT INTO tasks(code,task,status) VALUES($code,'$tasks[$i]','Pendente')";
    $query = mysqli_query($conexao,$sql);
}

$contract = $_FILES['contract'];

if($contract !== null){

    // verifica se o arquivo que está sendo enviado está em um dos formatos listados
    preg_match("/\.(png|jpg|jpeg|pdf){1}$/i", $contract["name"], $ext);
    if ($ext == true){
        // gera um nome aleatorio para a imagem

        $nome_contract = md5(uniqid(time())) . "." . $ext[1];
        // seta o caminho onde o ARQUIVO IRÁ FICAR
        $caminho_contract = "images/" . $nome_contract;
        // move o arquivo para a pasta especificada
        move_uploaded_file($contract["tmp_name"], $caminho_contract);



        $sql = "INSERT INTO `project`(`code`, `client`, `service`, `description`, `datestart`, `dateend`, `paytotal`, `npayments`, `obs`,contract) VALUES($code,'$client','$service','$desc','$date','$date2','$paytotal','$npayments','$obs','$nome_contract')";
        $inserir = mysqli_query($conexao,$sql);
    }
}



header('Location: form_project.php?msg=1');



?>