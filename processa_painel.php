<?php

session_start();

include_once "db.php";

include_once "verifica_admin.php";

if (isset($_GET['acao']) && isset($_GET['id'])) {
    $acao = $_GET['acao'];
    $id = $_GET['id'];
}

if ($acao == "removerrifa") {
    $query = "DELETE FROM `rifas` WHERE `rifas`.`id` = $id";

    mysqli_query($conn, $query);
}

elseif ($acao == "removerusuario") {
    $query = "DELETE FROM `usuarios` WHERE `usuarios`.`id` = $id";

    mysqli_query($conn, $query);
}

elseif ($acao == "sortear") {
    $query = "SELECT * FROM registros WHERE rifaid = $id";

    $numeros = [];

    $result = mysqli_query($conn, $query);
    $row = mysqli_num_rows($result);
    
    if ($result) {
      while ($row = mysqli_fetch_array($result)) {
          array_push($numeros, $row['id']);
      }
    }

    $sorteado = $numeros[array_rand($numeros, 1)];

    $query = "UPDATE `rifas` SET `sorteado` = '{$sorteado}' WHERE `rifas`.`id` = {$id};";

    mysqli_query($conn, $query);

    $query = "UPDATE `registros` SET `premio` = '1' WHERE `registros`.`id` = {$sorteado};";

    mysqli_query($conn, $query);
}

header("Location: admin.php");

?>