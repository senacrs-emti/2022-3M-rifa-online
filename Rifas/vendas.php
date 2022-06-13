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
            $rifaId = $row['id'];
        }
    }

    if (!isset($nomeRifa)) {
        header('Location: erro.php');
    }
?>

<html>
    <head>
        <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <title>Venda - Rifa <?php echo $nomeRifa ?></title>
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
                                            <form action="comprovante.php?rifaId=<?php echo $rifaId ?>" method="post" enctype="multipart/form-data">
                                                <h4 class="mb-4 pb-3">Venda - Rifa <?php echo $nomeRifa ?></h4>
                                                <div class="form-group"> <input required type="text" name="nomecomprador" class="form-style" placeholder="Nome do Comprador *" id="nomeComprador" autocomplete="off"> <i class="input-icon uil uil-at"></i> </div>
                                                <div class="form-group mt-2"> <input required type="email" name="emailcomprador" class="form-style" placeholder="Email do Comprador *" id="emailComprador" autocomplete="off"> <i class="input-icon uil uil-at"></i> </div>
                                                <div class="form-group mt-2"> <input required type="text" name="celularcomprador" class="form-style" placeholder="Celular do Comprador *" id="celularComprador" autocomplete="off"> <i class="input-icon uil uil-at"></i> </div>
                                                <div class="form-group mt-2"> <input type="text" name="instacomprador" class="form-style" placeholder="Instagram do Comprador" id="instaComprador" autocomplete="off"> <i class="input-icon uil uil-at"></i> </div>
                                                <div class="form-group mt-2"> <input required type="number" name="quantidaderifas" class="form-style" placeholder="Quantidade de Rifas *" id="quantidadeRifas" autocomplete="off"> <i class="input-icon uil uil-at"></i> </div>
                                                
                                                <div class="form-group mt-2">
                                                    <select class="form-style" name="metodopagamento">
                                                        <option selected>Método de Pagamento *</option>
                                                        <option value="pix">PIX</option>
                                                        <option value="dinheiro">Dinheiro</option>
                                                    </select>
                                                </div>
                                                
                                                <input type="submit" class="btn mt-4" value="cadastrar venda" id="botaoSubmit" onclick="delay()">

                                                <script>
                                                    function deletarBotao() {
                                                        if (document.getElementById("nomeComprador").value && document.getElementById("emailComprador").value && document.getElementById("celularComprador").value && document.getElementById("quantidadeRifas").value) {
                                                            var botaoSubmit = document.getElementById("botaoSubmit");
                                                            botaoSubmit.setAttribute("disabled");
                                                        }
                                                    }
                                                </script>
                                            </form>
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