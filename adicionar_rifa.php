<?php 

include_once "db.php";

include_once "verifica_admin.php";

$usuario = $_SESSION['admin'];

$query = "SELECT * FROM admins WHERE usuario = '{$usuario}'";

$result = mysqli_query($conn, $query);
$row = mysqli_num_rows($result);

if ($result) {
  while ($row = mysqli_fetch_array($result)) {
      $usuario = openssl_decrypt($usuario, $ciphering, $decryption_key, $options, $decryption_iv);
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
          <li>Adicionar Rifa</li>
        </ol>
        <h2>Adicionar Rifa</h2>
      </div>
    </section>

    <section id="faq" class="faq section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Adicionar Rifa</h2>
        </div>

        <div class="faq-list">
          <form action="processa_adicionar.php" method="post" enctype="multipart/form-data">
            <ul>
              <li>
                <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-1"><i class="fa-solid fa-user" style="margin-left: -25px; margin-right: 5px"></i>Usuário</a>
                <input readonly="readonly" type="text" class="form-control" name="usuario" placeholder="<?php echo $usuario ?>" style="margin-top: 5px">
              </li>

              <li>
                <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-1"><i class="fa-solid fa-ticket" style="margin-left: -25px; margin-right: 5px"></i>Nome da Rifa</a>
                <input required type="text" class="form-control" placeholder="Exemplo: Dia dos Namorados" style="margin-top: 5px" name="nome">
              </li>

              <li>
                <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-1"><i class="fa-solid fa-info" style="margin-left: -25px; margin-right: 5px"></i>Descrição</a>
                <input required type="text" class="form-control" placeholder="Exemplo: O melhor presente pro seu amado!" style="margin-top: 5px" name="descricao">
              </li>

              <li>
                <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-1"><i class="fa-solid fa-tags" style="margin-left: -25px; margin-right: 5px"></i>Preço</a>
                <input required type="number" class="form-control" placeholder="Exemplo: 1.99" style="margin-top: 5px" id="preco" name="preco" step="0.01">
              </li>

              <li>
                <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-1"><i class="fa-solid fa-hashtag" style="margin-left: -25px; margin-right: 5px"></i>Números Totais</a>
                <input required type="number" class="form-control" placeholder="Exemplo: 1000" style="margin-top: 5px" name="total">
              </li>

              <li>
                <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-1"><i class="fa-solid fa-trophy" style="margin-left: -25px; margin-right: 5px"></i>Premio</a>
                <input required type="text" class="form-control" placeholder="Exemplo: Docinhos" style="margin-top: 5px" name="premio">
              </li>

              <li>
                <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-1"><i class="fa-solid fa-image" style="margin-left: -25px; margin-right: 5px"></i>Imagem</a>
                <input required type="file" class="form-control" style="margin-top: 5px" name="foto">
              </li>

              <li>
                <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-1"><i class="fa-solid fa-calendar" style="margin-left: -25px; margin-right: 5px"></i>Data do Inicio</a>
                <input required type="date" class="form-control" placeholder="Exemplo: 22-07/2022" style="margin-top: 5px" name="inicio">
              </li>

              <li>
                <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-1"><i class="fa-solid fa-calendar" style="margin-left: -25px; margin-right: 5px"></i>Data do Término</a>
                <input required type="date" class="form-control" placeholder="Exemplo: 22-07/2022" style="margin-top: 5px" name="fim">
              </li>

              <li>
                <button type="submit" class="btn btn-primary" style="background-color: #47b2e4; border: none; padding: 15px">Registrar Rifa</button>
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