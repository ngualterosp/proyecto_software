<!DOCTYPE html>
<?php
  // Te recomiendo utilizar esta conección, la que utilizas ya no es la recomendada.
  $link = new PDO('mysql:host=localhost;dbname=badbunny', 'root', ''); // el campo vaciío es para la password.

  ?>
<html>
<title>GIRAS USUARIO</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>
<br>

<div class="w3-container">
  <center>
  <h2>GIRAS Y EVENTOS PRÓXIMOS DE BAD BUNNY</h2><br><br>
</center>
</div>

<div class="w3-row-padding">
    <?php foreach ($link->query('SELECT * FROM gira ORDER BY cod_gira DESC LIMIT 1') as $row){ // aca puedes hacer la consulta e iterarla con each. ?>
      <?php foreach ($link->query('SELECT * FROM gira ORDER BY cod_gira DESC LIMIT 1,1') as $row1){?>
        <?php foreach ($link->query('SELECT * FROM gira ORDER BY cod_gira DESC LIMIT 2,1') as $row2){?>



<div class="w3-third w3-margin-bottom">
  <ul class="w3-ul w3-border w3-center w3-hover-shadow">
    <li class="bg-primary w3-xlarge w3-padding-32"> --IMAGEN--</li>
    <li>  <?php echo $row['nom_gira'] ?></li>
    <li>    <?php echo $row['fecha_inicio'] ?></li>
    <li>    <?php echo $row['descripcion_gira'] ?>
</li>
<li class="w3-light-grey w3-padding-24">
  <a href="tiendaCliente.php"> <button class="w3-button w3-black btn btn-primary w3-padding-large">Comprar entradas</button> </a>
</li>

  </ul>
</div>

<div class="w3-third w3-margin-bottom">

  <ul class="w3-ul w3-border w3-center w3-hover-shadow">
    <li class="bg-primary w3-xlarge w3-padding-32"> --IMAGEN--</li>
    <li>  <?php echo $row1['nom_gira'] ?></li>
    <li>    <?php echo $row1['fecha_inicio'] ?></li>
    <li>    <?php echo $row1['descripcion_gira'] ?>
    <li class="w3-light-grey w3-padding-24">
<a href="tiendaCliente.php"> <button class="w3-button w3-black btn btn-primary w3-padding-large">Comprar entradas</button> </a>
    </li>
  </ul>
</div>

<div class="w3-third w3-margin-bottom">
  <ul class="w3-ul w3-border w3-center w3-hover-shadow">
    <li class="bg-primary w3-xlarge w3-padding-32"> --IMAGEN--</li>
    <li>  <?php echo $row2['nom_gira'] ?></li>
    <li>    <?php echo $row2['fecha_inicio'] ?></li>
    <li>    <?php echo $row2['descripcion_gira'] ?>
    <li class="w3-light-grey w3-padding-24">
<a href="tiendaCliente.php"> <button class="w3-button w3-black btn btn-primary w3-padding-large">Comprar entradas</button> </a>
    </li>
  </ul>
</div>
<?php } ?>
<?php } ?>
<?php } ?>
</div>
<center>
<p class="mb-5">Compra tus entradas en la tienda Oficial BadBunnyOfficial. <br>
Todos los derechos reservados ®</p>
</center>

</body>
</html>
