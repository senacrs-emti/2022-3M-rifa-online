<?php

session_start();

include_once "db.php";

include_once "verifica_login.php";

if (empty($_POST['usuarioid']) || empty($_POST['rifaid'])) {
    header('Location: index.php');
    exit();
}

$rifaId = $_POST['rifaid'];

$quantidade = $_POST['quantidade'];

$usuarioId = $_POST['usuarioid'];

$date = date("Y-m-d");  

$premio = '0';

$sql = "INSERT INTO `registros` (`id`, `rifaid`, `usuarioid`, `data`, `premio`) VALUES (NULL, '{$rifaId}', '{$usuarioId}', '{$date}', '{$premio}');";

for ($i = 1; $i <= $quantidade; $i++) {
    mysqli_query($conn, $sql);
}

$query = "UPDATE `rifas` SET `atual` = atual - '{$quantidade}' WHERE rifas.id = $rifaId";
mysqli_query($conn, $query);

header('Location: panel.php');

?>