<?php
    include_once "db.php";

    include_once "verifica_admin.php";


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
                                            <form action="cadastrar.php" method="post" enctype="multipart/form-data">
                                                <h4 class="mb-4 pb-3">Cadastro de Vendedores</h4>
                                                <div class="form-group"> <input required type="text" name="usuariovendedor" class="form-style" placeholder="Usuario do Vendedor *" id="usuariovendedor" autocomplete="off"> <i class="input-icon uil uil-at"></i> </div>
                                                <div class="form-group mt-2"> <input required type="password" name="senhavendedor" class="form-style" placeholder="Senha do Vendedor *" id="senhavendedor" autocomplete="off"> <i class="input-icon uil uil-at"></i> </div>
                                                
                                                <input type="submit" class="btn mt-4" value="cadastrar vendedor">
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