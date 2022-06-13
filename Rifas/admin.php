<?php

session_start();

include_once "db.php";

if(isset($_SESSION['admin'])) {
    header('Location: logout.php');
    exit();
}

?>

<html>
    <head>
        <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <title>Log In - Admin</title>
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
                                            <form action="login_admin.php" method="post" enctype="multipart/form-data">
                                                <h4 class="mb-4 pb-3">Log In - Admins</h4>
                                                <div class="form-group"> <input required type="text" name="usuario" class="form-style" placeholder="Usuario" id="usuario" autocomplete="off"> <i class="input-icon uil uil-at"></i> </div>
                                                <div class="form-group mt-2"> <input required type="password" name="senha" class="form-style" placeholder="Senha" id="senha" autocomplete="off"> <i class="input-icon uil uil-lock-alt"></i> </div> 
                                                
                                                <?php
                                                    if(isset($_SESSION['nao_autenticado'])) {
                                                    ?>
                                                        <div class="alert alert-danger mt-4" role="alert">
                                                            Usuário ou senha inválidos!
                                                        </div>
                                                    <?php
                                                    }
                                                    unset($_SESSION['nao_autenticado']);
                                                ?>

                                                <input type="submit" class="btn mt-4" value="login">

                                                <p class="mb-0 mt-4 text-center"><a target="_blank" href="https://www.instagram.com/terceirao_senac_22/" class="link">Entre em contato aqui.</a></p>
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