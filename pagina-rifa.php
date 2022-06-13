<?php

include_once "db.php";

if (isset($_GET['rifas'])) {
    $rifaId = $_GET['rifas'];
} else {
    header('Location: erro.php');
}

$sql = "SELECT * FROM rifas WHERE id = $rifaId";
$resultado = mysqli_query($conn, $sql);

if ($resultado) {
    while ($row = mysqli_fetch_array($resultado)) {
        $nomeRifa = $row['nome'];
        $rifaId = $row['id'];
        $premio = $row['premio'];
        $maximo = $row['maximo'];
        $preco = $row['preco'];
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style3.css" rel="stylesheet">
    <title>Xherom Rifas</title>
</head>

<header>

<div id="logo">
<a href="index.php">
<img src="https://megarifaonline.com.br/wp-content/uploads/2020/11/logotipo_mega_rifa_site.png" style="height: 80px; margin-left: 20px;">
</a>
</div>

<div id="perfil">
<a href="cadastro.php">
<svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="white" class="bi bi-person-circle" viewBox="0 0 16 16">
  <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
  <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
</svg>
</a>
</div>

</header>

<body>
    
<div id="bloco-home">    
<img src="https://megarifaonline.com.br/wp-content/uploads/2020/11/logotipo_mega_rifa_site.png" style="height: 100px; margin-top: 30px;">
<br>
<h1 style="color: white; font-family: Arial, Helvetica, sans-serif; margin-left: 300px; margin-right: 300px; text-align: justify;">Rifa de <?php echo $nomeRifa ?></h1>
<h3 style="color: white; font-family: Arial, Helvetica, sans-serif; margin-left: 300px; margin-right: 300px; text-align: justify;">Prêmio:</h3>
<br>
<ul style="list-type: none; color: white; font-family: Arial, Helvetica, sans-serif; font-size: 18px; text-align: justify; margin-left: 26%; margin-bottom: 50px;">
  <li>1º lugar: <?php echo $premio?></li>
</ul>
<p style="color: red; font-family: Arial, Helvetica, sans-serif; margin-left: 300px; margin-right: 300px; text-align: justify;">Número total de rifas: <?php echo $maximo ?></p>
<p style="color: green; font-family: Arial, Helvetica, sans-serif; margin-left: 300px; margin-right: 300px; text-align: justify;">Preço: R$ <?php echo $preco ?></p>
<br>
<label style="color: white;">Digite quantas você deseja comprar:</label>
<input type style="color: black; font-family: Arial, Helvetica, sans-serif; margin-left: 300px; margin-right: 300px; margin-bottom: 30px; text-align: justify;">
<br>
<a href="compra-rifa.php" style="text-decoration: none; cursor: pointer; font-weight: bold; color: white; margin-bottom: 100px; padding: 10px; background-color: darkgoldenrod; border-radius: 15px; border: 1px solid darkgoldenrod;"><b>COMPRAR</b></a>
<br>

</div>

</body>

</html>