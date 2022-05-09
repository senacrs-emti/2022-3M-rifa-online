<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style2.css" rel="stylesheet">
    <title>Xherom Rifas</title>
</head>

<body>
  <form action="pagina-rifa">
    <h3 style="font-family: Arial, Helvetica, sans-serif; color: white; text-align: center; margin-top: -5px"><b>CADASTRE-SE</b></h3>
    <div style="float: left; margin-right: 20px; color: white; font-family: Arial, Helvetica, sans-serif;">
      <label for="nome">Nome:</label>
      <input type="text" name="nome">
    </div>
    <div style="color: white; font-family: Arial, Helvetica, sans-serif;">
      <label for="sobrenome">Sobrenome:</label>
      <input type="text" name="sobrenome">
    </div>
    <br>
    <div style="float: left; margin-right: 10px; color: white; font-family: Arial, Helvetica, sans-serif;">
      <label for="user">Usuário:</label>
      <input type="text" name="user">
    </div>
    <div style="color: white; font-family: Arial, Helvetica, sans-serif;">
      <label for="email">Email:</label>
      <input type="text" name="email">
    </div>
    <br>
    <div style="float: left; margin-right: 10px; color: white; font-family: Arial, Helvetica, sans-serif;">
      <label for="senha">Senha:</label>
      <input type="pasword" name="senha">
    </div>
    <div style="float: left; color: white; font-family: Arial, Helvetica, sans-serif;">
      <label for="confirm">Confirmar senha:</label>
      <input type="password" name="confirm">
    </div>
    <br>
    <br>
    <div style="color: white; font-family: Arial, Helvetica, sans-serif;">
      <input type="submit" value="CADASTRAR" style="font-size: 16px; font-weight: bold; color: white; background-color: blueviolet; border: 1px solid purple; padding: 7px; border-radius: 8px">
    </div>
    <div style="color: white; font-family: Arial, Helvetica, sans-serif;">
      <a href="login.php" style="float: right; margin-top: -25px;">Já tem cadastro?</a>
    </div>
  </form>
</body>