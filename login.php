<<<<<<< Updated upstream
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style2.css" rel="stylesheet">
    <title>Xherom Rifas</title>
</head>

<header>

<div id="logo">
<a href="index.php">
<img src="https://megarifaonline.com.br/wp-content/uploads/2020/11/logotipo_mega_rifa_site.png" style="height: 80px; margin-left: 20px;">
</a>
</div>

</header>

<body>
  <form action="rifacomprada.php">
    <h3 style="font-family: Arial, Helvetica, sans-serif; color: white; text-align: center; margin-top: -5px"><b>ACESSE</b></h3>
    <div style="float: left; margin-right: 20px; margin-bottom: 20px; color: white; font-family: Arial, Helvetica, sans-serif;">
      <label for="email">Email:</label>
      <input type="text" name="email">
    </div>
    <div style="color: white; font-family: Arial, Helvetica, sans-serif;">
      <label for="senha">Senha:</label>
      <input type="password" name="senha">
    </div>
    <br>
    <div style="color: white; font-family: Arial, Helvetica, sans-serif; float: left;">
      <input type="submit" value="LOGAR" style="cursor: pointer; font-size: 16px; font-weight: bold; color: white; background-color: blueviolet; border: 1px solid purple; padding: 7px; border-radius: 8px">
    </div>
    <br>
    <a href="cadastro.php" style="font-family: Arial, Helvetica, sans-serif; margin-left: 70px;">Criar conta</a>
  </form>
</body>
=======
<?php 

include_once "db.php";

include_once "includes/head.php";

?>

<body style="background-color: #1768AC">
  <div class="container py-4">
    <?php
      include_once "includes/navbar.php";
    ?>
    <div class="p-5 mb-4 bg-light rounded-3">
      <div class="container-fluid py-5">
        <form action="processalogin.php" method="post" enctype="multipart/form-data">
          <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" value="email" placeholder="Enter email">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" value="senha" placeholder="Password">
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
  </div>
</body>
</html>
>>>>>>> Stashed changes
