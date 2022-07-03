<?php 

session_start();

include_once "db.php";

if (isset($_GET['id'])) {
    $rifaId = $_GET['id'];
} else {
    header('Location: erro.php');
}

$sql = "SELECT * FROM rifas WHERE id = $rifaId";
$resultado = mysqli_query($conn, $sql);

if ($resultado) {
    while ($row = mysqli_fetch_array($resultado)) {
        $descricao = $row['descricao'];
        $nomeRifa = $row['nome'];
        $premio = $row['premio'];
        $preco = $row['preco'];
        $total = $row['total'];
        $restantes = $row['atual'];

        $inicio = $row['inicio'];

        $inicio = substr($inicio, 8, 2)."/".substr($inicio, 5, 2)."/".substr($inicio, 0, 4);

        $fim = $row['fim'];

        $fim = substr($fim, 8, 2)."/".substr($fim, 5, 2)."/".substr($fim, 0, 4);

        $imagem = $row['imagem'];

        $estado = $row['estado'];
    }
} 

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Xherom Rifas - As Melhores Rifas do Mercado</title>

  <meta content="" name="description">
  <meta content="" name="keywords">
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>

  <?php 

  include_once "assets/includes/header.php";

  ?>

  <main id="main">
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="index.html">Home</a></li>
          <li><?php echo $nomeRifa?></li>
        </ol>
        <h2><?php echo $nomeRifa?></h2>

      </div>
    </section>

    <section id="portfolio-details" class="portfolio-details">
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-8">
            <div class="portfolio-details-slider swiper">
              <div class="swiper-wrapper align-items-center">
                <div class="swiper-slide">
                  <img src="assets/img/rifas/<?php echo $imagem?>" alt="">
                </div>
              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="portfolio-info">
              <h3>Detalhes dessa rifa</h3>
              <ul>
                <li><strong>Descrição</strong>: <?php echo $descricao?></li>
                <li><strong>Premio</strong>: <?php echo $premio?></li>
                <li><strong>Números totais</strong>: <?php echo $total?></li>
                <li><strong>Números restantes</strong>: <?php echo $restantes?></li>
                <li><strong>Preço</strong>: R$ <?php echo $preco?></li>
                <li><strong>Começou</strong>: <?php echo $inicio?></li>
                <li><strong>Expira</strong>: <?php echo $fim?></li>
              </ul>

              <?php

              if ($estado == "Ativa") {
                $button = "#47b2e4";
                $texto = "Comprar";
                $href = "comprar.php?id=$rifaId";
              } 
              
              else if ($estado == "Expirada") {
                $button = "#808080";
                $texto = "Expirada";
                $href = "index.php#portfolio";
              } 
              
              else if ($estado = "Futura") {
                $button = "#37517e";
                $texto = "Futura";
                $href = "index.php#portfolio";
              }

              ?>

              <a href="<?php echo $href?>" class="btn btn-primary" style="background-color: <?php echo $button?>; border: none; padding: 15px"><?php echo $texto?></a>
            </div>
          </div>
        </div>
      </div>
    </section>

  </main>

  <?php

  include_once "assets/includes/footer.php"

  ?>

</body>

</html>