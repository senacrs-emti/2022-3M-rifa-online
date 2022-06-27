<?php

$db_host = '31.170.160.154';
$db_usuario = 'u878630845_admin';
$db_senha = 'j~6BafNIc';
$db_base = 'u878630845_xheromrifas';

$conn = mysqli_connect($db_host, $db_usuario, $db_senha, $db_base);

if (!$conn) {
    die ("Connection failed: " . mysqli_connect_error());
}

$ciphering = "AES-128-CTR";
$encryption_iv = '1234567891011121';
$decryption_iv = '1234567891011121';
$encryption_key = "xh3r0mr1f4s";
$decryption_key = "xh3r0mr1f4s";

$iv_length = openssl_cipher_iv_length($ciphering);
$options = 0;

?>