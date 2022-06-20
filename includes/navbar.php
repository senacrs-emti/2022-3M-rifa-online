<header class="pb-3 mb-4 border-bottom">
    <nav class="navbar navbar-expand-lg navbar-light bg-light rounded-3">
    <div class="container">
        <a href="index.php" class="navbar-brand">
        <span class="fs-4">Xherom Rifas</span>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExample07">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                Rifas
            </a>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <?php
                    $sql = "SELECT * FROM rifas";
                    $resultado = mysqli_query($conn, $sql);

                        if ($resultado) {
                        while ($row = mysqli_fetch_array($resultado)) {
                        ?>
                        <li><a class="dropdown-item" href="pagina-rifa.php?rifa=<?php echo $row['id']?>"><?php echo $row['nome']?></a></li>
                        <?php
                        }
                    }
                    ?>
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="./login.php">Login</a>
            </li>
        </ul>
        </div>
    </div>
    </nav>
</header>