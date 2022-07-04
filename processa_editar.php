<?php

session_start();

include_once "db.php";

include_once "verifica_admin.php";

$inicio = $_POST['inicio'];
$fim = $_POST['fim'];

$date = date("Y-m-d");

if ($inicio > $date) {
    $estado = "Futura";
} 

else {
    $estado = "Ativa";
}

if (isset($_POST['imagem'])) {
    if ($_FILES["foto"]["size"] > 0) {
        $uploaddir = "assets/img/rifas/";
    
        $extensao = pathinfo($_FILES["foto"]["name"]);
        $nomearquivo = "RIFA-".rand(0, 99999).".".$extensao["extension"];
    
        $uploadfile = $uploaddir.$nomearquivo;
    
        move_uploaded_file($_FILES["foto"]["tmp_name"], $uploadfile);

        $query = "UPDATE `rifas` SET `nome` = '{$_POST['nome']}', `premio` = '{$_POST['premio']}', `estado` = '{$estado}', `preco` = '{$_POST['preco']}', `total` = '{$_POST['total']}', `atual` = '{$_POST['restantes']}', `inicio` = '{$inicio}', `fim` = '{$fim}', `descricao` = '{$_POST['descricao']}', `imagem` = '{$nomearquivo}' WHERE `rifas`.`id` = {$_POST['id']};";
    }
} else {
    $query = "UPDATE `rifas` SET `nome` = '{$_POST['nome']}', `premio` = '{$_POST['premio']}', `estado` = '{$estado}', `preco` = '{$_POST['preco']}', `total` = '{$_POST['total']}', `atual` = '{$_POST['restantes']}', `inicio` = '{$inicio}', `fim` = '{$fim}', `descricao` = '{$_POST['descricao']}' WHERE `rifas`.`id` = {$_POST['id']};";
}

mysqli_query($conn, $query);

header('Location: admin.php');

?>
