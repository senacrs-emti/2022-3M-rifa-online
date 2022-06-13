<?php

$db_host = '31.170.160.154';
$db_usuario = 'u878630845_senac';
$db_senha = '&Wk2~gVYH';
$db_base = 'u878630845_senac';

$conn = mysqli_connect($db_host, $db_usuario, $db_senha, $db_base);

if (!$conn) {
    die ("Connection failed: " . mysqli_connect_error());
}

?>