<!DOCTYPE html>
<html>
<title>Tienda</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<style>
body,h1 {font-family: "Raleway", sans-serif}
body, html {height: 100%}
.bgimg {
    background-image: url('img/fondoTienda.jpg');
    min-height: 100%;
    background-position: center;
    background-size: cover;
}
</style>
<body>

  <?php
  // Te recomiendo utilizar esta conección, la que utilizas ya no es la recomendada.
  $link = new PDO('mysql:host=localhost;dbname=badbunny', 'root', ''); // el campo vaciío es para la password.

  ?>

  <div class="w3-top">
  <div class="w3-bar w3-black w3-card">
    <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="index.php" class="w3-bar-item w3-button w3-padding-large fa fa-home">  Inicio</a>
    <div class="w3-dropdown-hover w3-hide-small">
      <button class="w3-padding-large w3-button fa fa-shopping-cart" title="More">  Productos <i class="fa fa-caret-down"></i></button>
      <div class="w3-dropdown-content w3-bar-block w3-card-4">
        <?php foreach ($link->query('SELECT * from categoria') as $row){ // aca puedes hacer la consulta e iterarla con each. ?>
        <a class="w3-bar-item w3-button"><?php echo $row['nom_categoria'] ?> <i class="	fa fa-mail-forward"></i></a>
        <?php } ?>
      </div>
    </div>
  </div>
</div>

<div class="bgimg w3-display-container w3-animate-opacity w3-text-white">
  <div>
<br><br><br><br><br>
<div class="w3-row-padding">

<?php foreach ($link->query('SELECT * from producto ORDER BY cod_producto DESC') as $row1){ // aca puedes hacer la consulta e iterarla con each. ?>

<div class="w3-third w3-margin-bottom">
  <ul class="w3-ul w3-border w3-center w3-hover-shadow">
    <li class="w3-black w3-xlarge w3-padding-32"><?php echo $row1['nom_producto'] ?></li>
    <li class="w3-padding-16">imagen</li>
    <li class="w3-padding-16"><?php echo $row1['descripcion_producto'] ?></li>
    <li class="w3-padding-16">Cantidad: <input type="number" name="quantity" min="1" max="5"></li>
    <li class="w3-padding-16">
      <h2 class="w3-wide">$<?php echo $row1['valor_producto'] ?></h2>
    </li>
    <li class="w3-light-grey w3-padding-24">
      <button class="w3-button w3-blue-grey w3-padding-large">Comprar</button>
    </li>
  </ul>
</div>

<?php } ?>

</div>
  </div>
</div>

</body>
</html>
