<?php 

$rifas = [
  "DIA DOS NAMORADOS",
  "DIA DOS PAIS",
  "ANA"
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet">
    <title>Xherom Rifas</title>
</head>

<header>

<div id="logo">
<a href="index.php">
<img src="https://megarifaonline.com.br/wp-content/uploads/2020/11/logotipo_mega_rifa_site.png" style="height: 80px; margin-left: 20px;">
</a>
</div>

<div id="perfil">
<a href="cadastro.php">
<svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="white" class="bi bi-person-circle" viewBox="0 0 16 16" href="login.php">
  <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
  <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
</svg>
</a>
</div>

</header>

<body>
    
<div id="bloco-home">    
<img src="https://megarifaonline.com.br/wp-content/uploads/2020/11/logotipo_mega_rifa_site.png" style="height: 100px; margin-top: 30px;">
<br>
<p style="color: white; font-family: Arial, Helvetica, sans-serif; margin-left: 300px; margin-right: 300px; text-align: justify;">&nbsp A equipe da Xherom tem o orgulho de lhe disponibilizar as melhores rifas do mercado. Nosso time é formado pelos profissionais mais capacitados e dispostos a oferecerem o melhor suporte a nossos consumidores.</p>
<p style="color: white; font-family: Arial, Helvetica, sans-serif; margin-left: 300px; margin-right: 300px; text-align: justify;">&nbsp Dê aquele presente que você tanto quer, para aquela pessoa que você tanto ama, ou se presenteie com nossos conjuntos imperdíveis. Qualquer dúvida, contate-nos!!!</p>
<br>
<p style="color: white; font-family: Arial, Helvetica, sans-serif; margin-left: 300px; margin-right: 300px; text-align: justify;">Whatsapp: (51) 98484-8484</p>
<p style="color: white; font-family: Arial, Helvetica, sans-serif; margin-left: 300px; margin-right: 300px; text-align: justify;">Instagram: @xheromrifas</p>
<br>
<label for="rifas" style="color: white; font-family: Arial, Helvetica, sans-serif; font-size: 18px;">ESCOLHA SUA RIFA:</label>
<br>



<form action="pagina-rifa.php">
  <select id="rifas" name="rifas" style="margin-top: 20px; margin-bottom: 20px">
  <?php
    $counter = 0;
    foreach ($rifas as &$rifa) {
    ?>
      <option value="<?php echo $counter?>"><?php echo $rifa?></option>
    <?php
    $counter++;
  }
  ?>
  </select>
<br>

  <input id="ir" type="submit" value="IR"style="cursor: pointer; font-weight: bold; color: white; margin-bottom: 50px; padding: 10px; background-color: darkgoldenrod; border-radius: 15px; border: 1px solid darkgoldenrod;">
</form>

</div>

</body>

</html>