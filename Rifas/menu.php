<?php

include_once "db.php";

include_once "verifica_vendedor.php";

?>

<html>
    <head>
        <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <title>Menu - Rifas Atuais</title>
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
                                                <h4 class="mb-4 pb-3">Menu - Rifas Atuais</h4>

                                                <div class="form-group mt-2" id="rifasSelect">
                                                    <select class="form-style" >
                                                        <?php
                                                            $sql = "SELECT * FROM rifas";
                                                            $resultado = mysqli_query($conn, $sql);
                                                            
                                                            if ($resultado) {
                                                                while ($row = mysqli_fetch_array($resultado)) {
                                                                ?>
                                                                    <option value="<?php echo $row['id']; ?>"><?php echo $row['nome']; ?></option>
                                                                <?php
                                                                }
                                                            }
                                                        ?>

                                                    </select>
                                                </div>
                                                
                                                <a href="vendas.php?rifaId=1" class="btn mt-4" id="buttonRifas">vender rifas</a>

                                                <script>
                                                    const selectElement = document.getElementById('rifasSelect');

                                                    selectElement.addEventListener('change', (event) => {
                                                        const result = document.getElementById('buttonRifas');
                                                        result.href = `vendas.php?rifaId=${event.target.value}`;
                                                    });
                                                </script>
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