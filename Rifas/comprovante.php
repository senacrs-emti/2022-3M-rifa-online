<?php
    include_once "db.php";

    include_once "verifica_vendedor.php";

    if (isset($_GET['rifaId'])) {
        $rifaId = $_GET['rifaId'];
    } else {
        header('Location: erro.php');
    }

    $sql = "SELECT * FROM rifas WHERE id = $rifaId";
    $resultado = mysqli_query($conn, $sql);
    
    if ($resultado) {
        while ($row = mysqli_fetch_array($resultado)) {
            $nomeRifa = $row['nome'];
        }
    }

    if (!isset($nomeRifa)) {
        header('Location: erro.php');
    }
?>


<?php
    $numerosComprador = [];

    $nomeComprador = $_POST['nomecomprador'];
    $emailComprador = $_POST['emailcomprador'];
    $celularComprador = $_POST['celularcomprador'];
    $instaComprador = $_POST['instacomprador'];

    $usuarioVendedor = $_SESSION['usuario'];

    $quantidadeRifas = $_POST['quantidaderifas'];

    $metodoPagamento = $_POST['metodopagamento'];
    
    $dataPagamento = getdate();

    $dataPagamento = $dataPagamento['year']."-".$dataPagamento['mon']."-".$dataPagamento['mday'];

    //loop com a quantidade de rifas


    $sql = "INSERT INTO `registro` (`idnumero`, `email`, `celular`, `comprador`, `instagram`, `vendedor`, `metodo`, `data`, `idrifa`) VALUES (NULL, '{$emailComprador}', '{$celularComprador}', '$nomeComprador', '$instaComprador', '$usuarioVendedor', '$metodoPagamento', '$dataPagamento', '$rifaId')";


    $dataPagamento = getdate();

    $dataPagamento = $dataPagamento['mday']."/".$dataPagamento['mon']."/".$dataPagamento['year'];

    for ($i = 1; $i <= $quantidadeRifas; $i++) {
        mysqli_query($conn, $sql);
    }

    $sql = "SELECT * FROM registro WHERE email = '$emailComprador'";
    $resultado = mysqli_query($conn, $sql);
    
    if ($resultado) {
        while ($row = mysqli_fetch_array($resultado)) {
            array_push($numerosComprador, $row['idnumero']);
        }
    }

    
?>

<html>
    <head>
        <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <title>Comprovante de Venda</title>
        <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css' rel='stylesheet'>
        <link href='' rel='stylesheet'>
        <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
        <link rel="stylesheet" href="style.css">
    </head>          


    <div class="section">
        <div class="container">
            <div class="row full-height justify-content-center">
                <div class="col-12 text-center align-self-center py-5">
                    <div class="section pb-5 pt-5 pt-sm-2 text-center">
                        <div class="card-3d-wrap mx-auto">
                            <div class="card-3d-wrapper">
                                <div class="card-front">
                                    <div class="center-wrap">
                                        <div class="section text-center">
                                            <h4 class="mb-2 pb-3">Sucesso! Números registrados.</h4>
                                            <p class="mb-0 mt-1 text-center">Nome da Rifa: <?php echo $nomeRifa ?></p>
                                            <p class="mb-0 mt-1 text-center">Usuário do Vendedor: <?php echo $usuarioVendedor ?></p>
                                            <p class="mb-0 mt-1 text-center">Nome do Comprador: <?php echo $nomeComprador ?></p>
                                            <p class="mb-0 mt-1 text-center">Email do Comprador: <?php echo $emailComprador ?> </p>
                                            <p class="mb-0 mt-1 text-center">Quantidade de Rifas: <?php echo $quantidadeRifas ?></p>
                                            <p class="mb-0 mt-1 text-center">Valor das Rifas: R$ <?php echo number_format((float)($quantidadeRifas * 3), 2, '.', '');?></p>
                                            <p class="mb-0 mt-1 text-center">Data da Venda: <?php echo $dataPagamento ?></p>
                                            <p class="mb-0 mt-3 text-center"><strong>Números do Comprador: 

                                            <?php 
                                                $counter = 0;
                                                foreach ($numerosComprador as &$valor) {
                                                    $counter++;
                                                    if (sizeof($numerosComprador) > $counter) {
                                                        echo("{$valor}, ");
                                                    } else {
                                                        echo ($valor);
                                                    }
                                                }
                                            ?>

                                            </strong></p>
                                            
                                            <a href="menu.php" class="btn mt-4">vender mais</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script type='text/javascript' src='https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js'></script>
    <script type='text/javascript' src=''></script>
    <script type='text/javascript' src=''></script>
    <script type='text/Javascript'></script>
</body>
</html>