<?php

session_start();

include_once "db.php";

include_once "verifica_admin.php";

$inicio = $_POST['inicio'];
$fim = $_POST['fim'];

if ($_FILES["foto"]["size"] > 0) {
    $uploaddir = "assets/img/rifas/";

    $extensao = pathinfo($_FILES["foto"]["name"]);
    $nomearquivo = "RIFA-".rand(0, 99999).".".$extensao["extension"];

    $uploadfile = $uploaddir.$nomearquivo;

    move_uploaded_file($_FILES["foto"]["tmp_name"], $uploadfile);
}

$date = date("Y-m-d");

if ($inicio > $date) {
    $estado = "Futura";
} 

else {
    $estado = "Ativa";
}

$query = "INSERT INTO `rifas` (`id`, `nome`, `premio`, `estado`, `preco`, `total`, `atual`, `inicio`, `fim`, `descricao`, `imagem`, `sorteado`) VALUES (NULL, '{$_POST['nome']}', '{$_POST['premio']}', '{$estado}', '{$_POST['preco']}', '{$_POST['total']}', '{$_POST['total']}', '{$inicio}', '{$fim}', '{$_POST['descricao']}', '{$nomearquivo}', '0');";

mysqli_query($conn, $query);

header('Location: admin.php');

?>
