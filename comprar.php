<?php 

include_once "db.php";

include_once "verifica_login.php";

if (isset($_GET['id'])) {
    $rifaId = $_GET['id'];
} else {
    header('Location: erro.php');
}

$sql = "SELECT * FROM rifas WHERE id = $rifaId";
$resultado = mysqli_query($conn, $sql);

if ($resultado) {
    while ($row = mysqli_fetch_array($resultado)) {
        $nomeRifa = $row['nome'];
        $preco = $row['preco'];
        $restantes = $row['atual'];
        $inicio = $row['inicio'];
        $fim = $row['fim'];
        $estado = $row['estado'];
    }
} 

$usuario = $_SESSION['usuario'];

$query = "SELECT * FROM usuarios WHERE usuario = '{$usuario}'";

$result = mysqli_query($conn, $query);
$row = mysqli_num_rows($result);

if ($result) {
  while ($row = mysqli_fetch_array($result)) {
      $numero = openssl_decrypt($row['numero'], $ciphering, $decryption_key, $options, $decryption_iv);
      $email = openssl_decrypt($row['email'], $ciphering, $decryption_key, $options, $decryption_iv);
      $usuarioId = $row['id'];
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
          <li><a href="index.php">Home</a></li>
          <li>Comprar</li>
        </ol>
        <h2>Comprar</h2>
      </div>
    </section>

    <section id="faq" class="faq section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Comprar Rifas</h2>
        </div>

        <div class="faq-list">
          <form action="processa_rifa.php" method="post" enctype="multipart/form-data">
            <ul>
              <li>
                <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-1"><i class="fa-solid fa-ticket" style="margin-left: -25px; margin-right: 5px"></i>Nome da Rifa</a>
                <input readonly="readonly" type="text" class="form-control" placeholder="<?php echo $nomeRifa?>" style="margin-top: 5px">
                <input readonly="readonly" type="hidden" name="rifaid" value="<?php echo $rifaId ?>">
                <input readonly="readonly" type="hidden" name="usuarioid" value="<?php echo $usuarioId ?>">
              </li>

              <li>
                <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-1"><i class="fa-solid fa-tags" style="margin-left: -25px; margin-right: 5px"></i>Preço da Rifa</a>
                <input readonly="readonly" type="text" class="form-control" placeholder="R$ <?php echo $preco?>" style="margin-top: 5px" id="preco">
              </li>

              <li>
                <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-1"><i class="fa-solid fa-lock-open" style="margin-left: -25px; margin-right: 5px"></i>Números Disponíveis</a>
                <input readonly="readonly" type="text" class="form-control" placeholder="<?php echo $restantes?>" style="margin-top: 5px">
              </li>

              <li>
                <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-1"><i class="fa-solid fa-mobile" style="margin-left: -25px; margin-right: 5px"></i>Seu celular</a>
                <input readonly="readonly" type="text" class="form-control" placeholder="<?php echo $numero?>" style="margin-top: 5px">
              </li>
              
              <li>
                <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-1"><i class="fa-solid fa-envelope" style="margin-left: -25px; margin-right: 5px"></i>Seu email</a>
                <input readonly="readonly" type="email" class="form-control" placeholder="<?php echo $email?>" style="margin-top: 5px">
              </li>

              <li>
                <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-1"><i class="fa-solid fa-bag-shopping" style="margin-left: -25px; margin-right: 5px"></i>Quantidade de Rifas</a>
                <select class="form-select" name="quantidade" style="margin-top: 5px" id="quantidade">
                  <?php for ($i = 1; $i <= $restantes; $i++) {
                  ?>
                    <option value="<?php echo $i;?>"><?php echo $i;?></option>
                  <?php
                  }
                  ?>
                </select>
              </li>

              <li>
                <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-1"><i class="fa-solid fa-money-bill-1" style="margin-left: -25px; margin-right: 5px"></i>Valor a Pagar</a>
                <input readonly="readonly" type="text" class="form-control" name="pagar" placeholder="R$ <?php echo $preco?>" style="margin-top: 5px" id="pagar">
              </li>

              <script>
                const selectElement = document.getElementById('quantidade');

                selectElement.addEventListener('change', (event) => {
                  const log = document.getElementById('pagar');
                  log.value = "R$ " + (parseInt(event.target.value) * parseFloat(<?php echo $preco?>)).toFixed(2);
                });
              </script>

              <li>
                <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-1"><i class="fa-solid fa-credit-card" style="margin-left: -25px; margin-right: 5px"></i>Método de Pagamento</a>
                <select class="form-select" aria-label="Default select example" style="margin-top: 5px">
                  <option value="1">PIX</option>
                  <option value="2">Cartão de Crédito</option>
                </select>
              </li>

              <li>
                <button type="submit" class="btn btn-primary" style="background-color: #47b2e4; border: none; padding: 15px">Fazer Registro</button>
              </li>
            </ul>
          </form>
        </div>
      </div>
    </section>
  </main>

  <?php

  include_once "assets/includes/footer.php"

  ?>

</body>

</html>