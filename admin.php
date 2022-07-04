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
          <li>Painel</li>
        </ol>
        <h2>Painel</h2>

      </div>
    </section>

    <section id="faq" class="faq section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>PAINEL DE ADMINISTRADOR</h2>
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
                <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-1"><i class="fa-solid fa-ticket" style="margin-left: -25px; margin-right: 5px"></i>Rifas Atuais</a>
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">Nome</th>
                      <th scope="col">Estado</th>
                      <th scope="col">Premio</th>
                      <th scope="col">Preço</th>
                      <th scope="col">Inicio</th>
                      <th scope="col">Fim</th>
                      <th scope="col">Total</th>
                      <th scope="col">Restantes</th>
                      <th scope="col">Descrição</th>
                      <th scope="col">Sorteado</th>
                      <th scope="col"></th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php

                    $query = "SELECT * FROM rifas";

                    $result = mysqli_query($conn, $query);
                    $row = mysqli_num_rows($result);
                    
                    if ($result) {
                      while ($row = mysqli_fetch_array($result)) {
                          $id = $row['id'];
                          $nome = $row['nome'];
                          $estado = $row['estado'];
                          $premio = $row['premio'];
                          $preco = $row['preco'];

                          $inicio = $row['inicio'];
                          $fim = $row['fim'];

                          $total = $row['total'];
                          $restantes = $row['atual'];
                          $descricao = $row['descricao'];
                          $sorteado = $row['sorteado'];

                          ?>
                          <tr>
                            <td><?php echo $nome?></td>
                            <td><?php echo $estado?></td>
                            <td><?php echo $premio?></td>
                            <td>R$ <?php echo $preco?></td>
                            <td><?php echo $inicio?></td>
                            <td><?php echo $fim?></td>
                            <td><?php echo $total?></td>
                            <td><?php echo $restantes?></td>
                            <td><?php echo $descricao?></td>
                            <td><?php echo $sorteado?></td>
                            <td>
                              <?php
                              if ($sorteado == 0) {
                                ?>
                                <a style="color: #B2D2A4" href="processa_painel.php?acao=sortear&id=<?php echo $id?>">Sortear</a>
                                <?php
                              }
                              ?>
                              <a href="editar_rifa.php?id=<?php echo $id?>">Editar</a>
                              <a style="color: #ff7b7b" href="processa_painel.php?acao=removerrifa&id=<?php echo $id?>">Remover</a>
                            </td>
                          </tr>
                        <?php
                      }
                    }
                    ?>

                    <tr>
                      <?php
                      for ($i = 0; $i < 10; $i++) { 
                        ?>
                          <td></td>
                        <?php
                      }
                      ?>
                      <td>
                        <a href="adicionar_rifa.php">Adicionar</a>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </li>

              <li>
                <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-1"><i class="fa-solid fa-users" style="margin-left: -25px; margin-right: 5px"></i>Usuários</a>
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">Usuário</th>
                      <th scope="col">Premio</th>
                      <th scope="col">Número</th>
                      <th scope="col"></th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php

                    $query = "SELECT * FROM usuarios";

                    $result = mysqli_query($conn, $query);
                    $row = mysqli_num_rows($result);
                    
                    if ($result) {
                      while ($row = mysqli_fetch_array($result)) {
                          $numero = openssl_decrypt($row['numero'], $ciphering, $decryption_key, $options, $decryption_iv);
                          $email = openssl_decrypt($row['email'], $ciphering, $decryption_key, $options, $decryption_iv);
                          $usuario = openssl_decrypt($row['usuario'], $ciphering, $decryption_key, $options, $decryption_iv);
                          $usuarioId = $row['id'];

                          ?>
                          <tr>
                            <td><?php echo $usuario?></td>
                            <td><?php echo $email?></td>
                            <td><?php echo $numero?></td>

                            <td>
                              <a style="color: #ff7b7b" href="processa_painel.php?acao=removerusuario&id=<?php echo $usuarioId?>">Remover</a>
                            </td>
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