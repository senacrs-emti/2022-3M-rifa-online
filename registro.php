<?php 

include_once "db.php";

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
          <li>Registro</li>
        </ol>
        <h2>Registro</h2>

      </div>
    </section>

    <section id="faq" class="faq section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Fazer Registro</h2>
        </div>

        <div class="faq-list">
          <form action="processa_registro.php" method="post" enctype="multipart/form-data">
            <ul>
              <li>
                <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-1"><i class="fa-solid fa-user" style="margin-left: -25px; margin-right: 5px"></i>Usuário</a>
                <input required type="text" class="form-control" name="usuario" placeholder="Seu usuário" style="margin-top: 5px">
              </li>

              <li>
                <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-1"><i class="fa-solid fa-mobile" style="margin-left: -25px; margin-right: 5px"></i>Celular</a>
                <input required type="text" class="form-control" name="numero" placeholder="Seu número de celular" style="margin-top: 5px">
              </li>
              
              <li>
                <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-1"><i class="fa-solid fa-envelope" style="margin-left: -25px; margin-right: 5px"></i>Email</a>
                <input required type="email" class="form-control" name="email" placeholder="Seu email" style="margin-top: 5px">
                <small id="emailHelp" class="form-text text-muted">Nós nunca compartilharemos seus dados.</small>
              </li>

              <li>
                <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-1"><i class="fa-solid fa-unlock" style="margin-left: -25px; margin-right: 5px"></i>Senha</a>
                <input required type="password" class="form-control" name="senha" placeholder="Sua senha" style="margin-top: 5px">
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