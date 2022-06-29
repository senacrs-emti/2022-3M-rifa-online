  <header id="header" class="fixed-top header-inner-pages">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="index.php">Xherom Rifas</a></h1>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="http://localhost/solucao/index.php#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="http://localhost/solucao/index.php#about">Sobre Nós</a></li>
          <li><a class="nav-link scrollto" href="http://localhost/solucao/index.php#team">Time</a></li>
          <li class="dropdown"><a href="#portfolio"><span>Rifas</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li class="dropdown"><a href="#portfolio"><span>Ativas</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <?php
                  $sql = "SELECT * FROM rifas WHERE estado = 'Ativa'";
                  $resultado = mysqli_query($conn, $sql);

                    if ($resultado) {
                    while ($row = mysqli_fetch_array($resultado)) {
                    ?>
                      <li><a href="detalhes.php?id=<?php echo $row['id']?>"><?php echo $row['nome']?></a></li>
                    <?php
                    }
                  }
                  ?>
                </ul>
              </li>
              <li class="dropdown"><a href="#portfolio"><span>Expiradas</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                <?php
                  $sql = "SELECT * FROM rifas WHERE estado = 'expirada'";
                  $resultado = mysqli_query($conn, $sql);

                    if ($resultado) {
                    while ($row = mysqli_fetch_array($resultado)) {
                    ?>
                      <li><a href="detalhes.php?id=<?php echo $row['id']?>"><?php echo $row['nome']?></a></li>
                    <?php
                    }
                  }
                  ?>
                </ul>
              </li>
              <li class="dropdown"><a href="#portfolio"><span>Futuras</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                <?php
                  $sql = "SELECT * FROM rifas WHERE estado = 'futura'";
                  $resultado = mysqli_query($conn, $sql);

                    if ($resultado) {
                    while ($row = mysqli_fetch_array($resultado)) {
                    ?>
                      <li><a href="detalhes.php?id=<?php echo $row['id']?>"><?php echo $row['nome']?></a></li>
                    <?php
                    }
                  }
                  ?>
                </ul>
              </li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="http://localhost/solucao/index.php#contact">Contato</a></li>
          <?php
            if(!isset($_SESSION['usuario'])) {
              $user = "Login";
              $href = "login";
            } 

            else {
              $user = "Painel do Usuário";
              $href = "panel";
            }

          ?>
          <li><a class="getstarted scrollto" href="<?php echo $href?>.php"><?php echo $user?></a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
    </div>
  </header>