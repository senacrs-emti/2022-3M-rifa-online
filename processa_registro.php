<?php

session_start();

include_once "db.php";

if (empty($_POST['usuario']) || empty($_POST['senha']) || empty($_POST['email']) || empty($_POST['numero'])) {
    header('Location: index.php');
    exit();
}

$usuario = openssl_encrypt($_POST['usuario'], $ciphering, $encryption_key, $options, $encryption_iv);
$senha = md5($_POST['senha']);
$email = openssl_encrypt($_POST['email'], $ciphering, $encryption_key, $options, $encryption_iv);
$numero = openssl_encrypt($_POST['numero'], $ciphering, $encryption_key, $options, $encryption_iv);

$sql = "INSERT INTO `usuarios` (`id`, `usuario`, `senha`, `email`, `numero`) VALUES (NULL, '{$usuario}', '{$senha}', '{$email}', '{$numero}');";

mysqli_query($conn, $sql);

$_SESSION['usuario_cadastrado'] = true;

header('Location: login.php');

?>