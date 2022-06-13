<?php

session_start();

include_once "db.php";

if (empty($_POST['usuario']) || empty($_POST['senha'])) {
    header('Location: index.php');
    exit();
}

$usuario = mysqli_real_escape_string($conn, $_POST['usuario']);
$senha = mysqli_real_escape_string($conn, $_POST['senha']);

$query = "select usuario from admins where usuario = '{$usuario}' and senha = md5('{$senha}')";

$result = mysqli_query($conn, $query);

$row = mysqli_num_rows($result);

if ($row == 1) {
    $_SESSION['admin'] = $usuario;
    header('Location: cadastro.php');
    exit();
} else {
    header('Location: admin.php');
    $_SESSION['nao_autenticado'] = true;
    exit();
}

?>