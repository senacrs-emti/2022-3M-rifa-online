<?php

include_once "db.php";

if (isset($_GET['rifa'])) {
    $rifaId = $_GET['rifa'];
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

include_once "includes/head.php"

?>

<body style="background-color: #1768AC">
  <div class="container py-4">
    <?php
      include_once "includes/navbar.php";
    ?>

    <div class="p-5 mb-4 bg-light rounded-3">
      <div class="container-fluid py-5">
        <h1 class="display-5 fw-bold">Rifa de <?php echo $nomeRifa ?></h1>
        <p class="col-md-8 fs-4">Prêmio: <?php echo $premio?></p>
        <p class="col-md-8 fs-4">Número total de rifas: <?php echo $maximo?></p>
        <p class="col-md-8 fs-4">Preço: R$ <?php echo $preco ?></p>
        <p class="col-md-8 fs-4">Quantidade: <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm"></p>
        <button type="submit" class="btn btn-primary">Comprar</button>
      </div>
    </div>
  </div>
</body>

</html>