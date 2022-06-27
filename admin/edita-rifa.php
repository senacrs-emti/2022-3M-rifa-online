<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style2.css" rel="stylesheet">
    <title>Xherom Rifas | Administração</title>
</head>

<body>
<form action="rifas.php">
    <h3 style="font-family: Arial, Helvetica, sans-serif; color: white; text-align: center; margin-top: -5px"><b>EDITAR INFORMAÇÕES</b></h3>
    <div style="margin-right: 20px; color: white; font-family: Arial, Helvetica, sans-serif;">
      <label for="rifa">Rifa:</label>
      <input type="text" name="nome">
    </div>
    <br>
    <div style="color: white; font-family: Arial, Helvetica, sans-serif;">
      <label for="datainicio">Data de Início:</label>
      <input type="date" name="inicio">
    </div>
    <br>
    <div style="margin-right: 10px; color: white; font-family: Arial, Helvetica, sans-serif;">
      <label for="datafinal">Data de Encerramento:</label>
      <input type="date" name="user">
    </div>
    <br>
    <div style="color: white; font-family: Arial, Helvetica, sans-serif;">
      <label for="email">Disponíveis:</label>
      <input type="number" name="email">
    </div>
    <br>
    <div style="margin-right: 10px; color: white; font-family: Arial, Helvetica, sans-serif;">
      <label for="status">Status:</label>
      <select name="status">
        <option selected disabled style="text-align:center">-- selecione --</option>
        <option>Em andamento</option>
        <option>Encerrada</option>
      </select>  
    </div>
    <br>
    <div style="float: left; color: white; font-family: Arial, Helvetica, sans-serif;">
      <label for="confirm">Preço (R$):</label>
      <input type="number" name="confirm">
    </div>
    <br>
    <br>
    <div style="color: white; font-family: Arial, Helvetica, sans-serif;">
      <input type="submit" value="EDITAR" style="cursor: pointer; font-size: 16px; font-weight: bold; color: white; background-color: blueviolet; border: 1px solid purple; padding: 7px; border-radius: 8px">
    </div>
</form>
</body>