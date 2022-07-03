<?php

unset($_SESSION['usuario']);

session_start();

include_once "db.php";

if (empty($_POST['usuario']) || empty($_POST['senha'])) {
    header('Location: login.php');
    exit();
}

$usuario = openssl_encrypt(mysqli_real_escape_string($conn, $_POST['usuario']), $ciphering, $encryption_key, $options, $encryption_iv);
$senha = mysqli_real_escape_string($conn, $_POST['senha']);

$query = "SELECT usuario FROM admins WHERE usuario = '{$usuario}' AND senha = md5('{$senha}')";

$result = mysqli_query($conn, $query);

$row = mysqli_num_rows($result);

if ($row == 1) {
    $_SESSION['admin'] = $usuario;
    header('Location: admin.php');
    exit();
} else {
    header('Location: login_admin.php');
    $_SESSION['nao_autenticado'] = true;
    exit();
}

?>
