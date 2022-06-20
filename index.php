<?php 

include_once "db.php";

$sql = "SELECT * FROM rifas";
$resultado = mysqli_query($conn, $sql);

include_once "includes/head.php";

?>

<body style="background-color: #1768AC">
  <div class="container py-4">
    <?php
      include_once "includes/navbar.php";
    ?>

    <div class="p-5 mb-4 bg-light rounded-3">
      <div class="container-fluid py-5">
        <h1 class="display-5 fw-bold">A melhor plataforma de rifas do mercado</h1>
        <p class="col-md-8 fs-4" style="text-align: justify;">A equipe da Xherom tem o orgulho de lhe disponibilizar as melhores rifas do mercado. Nosso time é formado pelos profissionais mais capacitados e dispostos a oferecerem o melhor suporte a nossos consumidores</p>
        <p class="col-md-8 fs-4" style="text-align: justify;"> Dê aquele presente que você tanto quer, para aquela pessoa que você tanto ama, ou se presenteie com nossos conjuntos imperdíveis. Qualquer dúvida, contate-nos <a href="">aqui.</a></p>
        <div class="dropdown">
          <a class="btn btn-primary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
            Escolha a sua rifa
          </a>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
            <?php
              $sql = "SELECT * FROM rifas";
              $resultado = mysqli_query($conn, $sql);

                if ($resultado) {
                while ($row = mysqli_fetch_array($resultado)) {
                ?>
                  <li><a class="dropdown-item" href="rifa.php?rifa=<?php echo $row['id']?>"><?php echo $row['nome']?></a></li>
                <?php
                }
              }
            ?>
          </ul>
        </div>
      </div>
    </div>
  </div>
</body>

</html>