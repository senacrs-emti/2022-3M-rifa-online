<?php

session_start();

include_once "db.php";

if (isset($_GET['acao']) && isset($_GET['id'])) {
    $acao = $_GET['acao'];
    $id = $_GET['id'];
}

if ($acao == "removerrifa") {
    $query = "DELETE FROM `rifas` WHERE `rifas`.`id` = $id";

    mysqli_query($conn, $query);
}

elseif ($acao == "adicionarrifa") {
    $query = "INSERT INTO `rifas` (`id`, `nome`, `premio`, `estado`, `preco`, `total`, `atual`, `inicio`, `fim`, `descricao`, `imagem`, `sorteado`) VALUES (NULL, 'dwada', 'dawda', 'dawda', '1.99', '100', '100', '2022-07-06', '2022-07-20', 'dwad', 'dwada', '3');";

    mysqli_query($conn, $query);
}

elseif ($acao == "removerusuario") {
    $query = "DELETE FROM `usuarios` WHERE `usuarios`.`id` = $id";

    mysqli_query($conn, $query);
}

elseif ($acao == "sortear") {
    $query = "SELECT * FROM rifas WHERE id = $id";

    $result = mysqli_query($conn, $query);
    $row = mysqli_num_rows($result);
    
    if ($result) {
      while ($row = mysqli_fetch_array($result)) {
          $total = $row['total'];
      }
    }

    $sorteado = rand(0, $total);

    $query = "UPDATE `rifas` SET `sorteado` = '{$sorteado}' WHERE `rifas`.`id` = {$id};";

    mysqli_query($conn, $query);

    $query = "UPDATE `registros` SET `premio` = '1' WHERE `registros`.`id` = {$sorteado};";

    mysqli_query($conn, $query);
}

header("Location: admin.php");

?>