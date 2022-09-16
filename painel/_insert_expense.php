<?php

include 'conexao/conexao.php';

$titulo = $_POST['titulo'];
$desc = $_POST['description'];
$date1 = $_POST['date'];
$value = $_POST['value'];
$category = $_POST['categoria'];

$doc = $_FILES['doc'];

$contract = $_FILES['contract'];

if($doc !== null) {

    // verifica o tamanho do arquivo se for maior nao sera permitido
    if($doc['size']>12582912){

        // verifica se o arquivo que está sendo enviado está em um dos formatos listados
        preg_match("/\.(png|jpg|jpeg|pdf){1}$/i",
        $doc["name"], $ext);
        // gera um nome Áfnico para a imagem
        
        if ($ext == true){
        // gera um nome aleatorio para a imagem

        $nome_doc = md5(uniqid(time())) . "." . $ext[1];
        // seta o caminho onde o ARQUIVO IRÁ FICAR
        $caminho_doc = "expense/" . $nome_doc;
        // move o arquivo para a pasta especificada
        move_uploaded_file($doc["tmp_name"], $caminho_doc);



        $sql = "INSERT INTO `expense`(`titulo`, `descricao`, `dateexpense`, `value`, `categoria`, `doc`) VALUES('$titulo','$desc','$date1','$value','$category','$nome_doc')";
        $inserir = mysqli_query($conexao,$sql);

        }
    }
}


header('Location: form_expense.php?msg=1');



?>