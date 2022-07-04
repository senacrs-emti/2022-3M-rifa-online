<?php 

include_once "db.php";

include_once "verifica_login.php";

$usuario = $_SESSION['usuario'];

$query = "SELECT * FROM usuarios WHERE usuario = '{$usuario}'";

$result = mysqli_query($conn, $query);
$row = mysqli_num_rows($result);

if ($result) {
  while ($row = mysqli_fetch_array($result)) {
      $numero = openssl_decrypt($row['numero'], $ciphering, $decryption_key, $options, $decryption_iv);
      $email = openssl_decrypt($row['email'], $ciphering, $decryption_key, $options, $decryption_iv);
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
          <li>Painel</li>
        </ol>
        <h2>Painel</h2>

      </div>
    </section>

    <section id="faq" class="faq section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>PAINEL DO USUÁRIO</h2>
          <p>Faça logout <a href="logout.php">aqui.</a></p>
        </div>

        <div class="faq-list">
          <form action="processa_login.php" method="post" enctype="multipart/form-data">
            <ul>
              <li>
                <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-1"><i class="fa-solid fa-user" style="margin-left: -25px; margin-right: 5px"></i>Usuário</a>
                <input readonly="readonly" type="text" class="form-control" name="usuario" placeholder="<?php echo $usuario ?>" style="margin-top: 5px">
              </li>

              <li>
                <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-1"><i class="fa-solid fa-envelope" style="margin-left: -25px; margin-right: 5px"></i>Seu email</a>
                <input readonly="readonly" type="email" class="form-control" placeholder="<?php echo $email?>" style="margin-top: 5px">
              </li>

              <li>
                <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-1"><i class="fa-solid fa-mobile" style="margin-left: -25px; margin-right: 5px"></i>Seu celular</a>
                <input readonly="readonly" type="text" class="form-control" placeholder="<?php echo $numero?>" style="margin-top: 5px">
              </li>

              <li>
                <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-1"><i class="fa-solid fa-ticket" style="margin-left: -25px; margin-right: 5px"></i>Suas Rifas</a>
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">Número</th>
                      <th scope="col">Nome da Rifa</th>
                      <th scope="col">Estado</th>
                      <th scope="col">Data</th>
                      <th scope="col">Preço</th>
                      <th scope="col">Premiada</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php

                    $query = "SELECT * FROM registros WHERE usuarioid = '{$usuarioId}'";

                    $result = mysqli_query($conn, $query);
                    $row = mysqli_num_rows($result);
                    
                    if ($result) {
                      while ($row = mysqli_fetch_array($result)) {
                          $data = $row['data'];
                          $premiada = $row['premio'];
                          $id = $row['id'];

                          if ($premiada == 0) {
                            $premiada = "Não";
                            $color = "#ff7b7b";
                          }

                          else if ($premiada == 1) {
                            $premiada = "Sim 🤑";
                            $color = "#B2D2A4";
                          }


                          $rifaId = $row['rifaid'];

                          $sql = "SELECT * FROM rifas WHERE id = '{$rifaId}'";

                          $resultado = mysqli_query($conn, $sql);
                          $coluna = mysqli_num_rows($result);
                          
                          if ($resultado) {
                            while ($coluna = mysqli_fetch_array($resultado)) {
                                $nome = $coluna['nome'];
                                $preco = $coluna['preco'];
                                $estado = $coluna['estado'];
                            }
                          }

                          ?>
                          <tr>
                            <td><?php echo $id?></td>
                            <td><?php echo $nome?></td>
                            <td><?php echo $estado?></td>
                            <td><?php echo $data?></td>
                            <td>R$ <?php echo $preco?></td>
                            <td style="color: <?php echo $color?> "><?php echo $premiada?></td>
                          </tr>
                        <?php
                      }
                    }
                    ?>
                  </tbody>
                </table>
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