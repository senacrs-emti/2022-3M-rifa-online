<?php
    include_once "db.php";

    include_once "verifica_admin.php";
?>


<?php
    $usuarioVendedor = $_POST['usuariovendedor'];
    $senhaVendedor = $_POST['senhavendedor'];

    $senhaCripto = md5($senhaVendedor);

    $sql = "INSERT INTO `vendedores` (`usuario`, `senha`) VALUES ('{$usuarioVendedor}', '{$senhaCripto}');";

    mysqli_query($conn, $sql);
    
?>

<html>
    <head>
        <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <title>Cadastro de Vendedores</title>
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
                                            <h4 class="mb-2 pb-3">Sucesso! Vendedor cadastrado.</h4>
                                            <p class="mb-0 mt-1 text-center">Usuário do Vendedor: <?php echo $usuarioVendedor ?></p>
                                            <p class="mb-0 mt-1 text-center">Senha do Vendedor: <?php echo $senhaVendedor ?></p>
                                            
                                            <a href="cadastro.php" class="btn mt-4">cadastrar mais</a>
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