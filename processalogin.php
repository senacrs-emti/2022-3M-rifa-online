<?php

session_start();

include_once "db.php";

if (empty($_POST['email']) || empty($_POST['senha'])) {
    header('Location: index.php');
    exit();
}

$email = mysqli_real_escape_string($conn, $_POST['email']);
$senha = mysqli_real_escape_string($conn, $_POST['senha']);

$query = "select email from usuarios where usuario = '{$email}' and senha = md5('{$senha}')";

$result = mysqli_query($conn, $query);

$row = mysqli_num_rows($result);

if ($row == 1) {
    $_SESSION['email'] = $email;
    header('Location: rifacomprada.php');
    exit();
} else {
    header('Location: index.php');
    $_SESSION['nao_autenticado'] = true;
    exit();
}

?>