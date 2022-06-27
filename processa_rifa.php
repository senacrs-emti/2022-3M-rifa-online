<?php

session_start();

include_once "db.php";

if (empty($_POST['usuarioid']) || empty($_POST['rifaid'])) {
    header('Location: index.php');
    exit();
}

$rifaId = $_POST['rifaid'];

$sql = "SELECT * FROM rifas WHERE id = $rifaId";
$resultado = mysqli_query($conn, $sql);

if ($resultado) {
    while ($row = mysqli_fetch_array($resultado)) {
        $status = $row['estado'];
    }
} 

$quantidade = $_POST['quantidade'];

$usuarioId = $_POST['usuarioid'];

$date = date("Y-m-d");  

$premio = '0';

$sql = "INSERT INTO `registros` (`id`, `rifaid`, `usuarioid`, `data`, `status`, `premio`) VALUES (NULL, '{$rifaId}', '{$usuarioId}', '{$date}', '{$status}', '{$premio}');";

for ($i = 1; $i <= $quantidade; $i++) {
    mysqli_query($conn, $sql);
}

$query = "UPDATE `rifas` SET `atual` = atual - 1 WHERE rifas.id = $rifaId";
mysqli_query($conn, $query);

header('Location: index.php');

?>