<?php
require_once "crud_producto.php";
require_once "categoria.php";
require_once "producto.php";

$crud = new CrudProducto();
$listaCategorias =[];
$listaCategorias = $crud->mostrarCategorias();

?>


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
    background-image: url('../../img/fondoTienda.jpg');
    min-height: 100%;
    background-position: center;
    background-size: cover;
}
</style>
<body>


  <div class="w3-top">
  <div class="w3-bar w3-black w3-card">
    <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="../../index.php" class="w3-bar-item w3-button w3-padding-large fa fa-home">  Inicio</a>
  </div>
</div>

<div class="bgimg w3-display-container w3-animate-opacity w3-text-white">
  <div>
<br><br><br><br><br>
<div class="w3-row-padding">

<?php foreach ($listaCategorias as $categoria){ // aca puedes hacer la consulta e iterarla con each. ?>

<div class="w3-third w3-margin-bottom">
  <ul class="w3-ul w3-border w3-center w3-hover-shadow">
    <li class="w3-black w3-xlarge w3-padding-32"><?php echo $categoria->getNombre() ?></li>
    <li class="w3-padding-16"><img src="data:image/jpg;base64, <?php echo base64_encode(stripslashes($categoria->getRuta())); ?>" width="100%"></li>
    <li class="w3-light-grey w3-padding-24">
      <a class= "w3-button w3-blue-grey w3-padding-large 	fa fa-eye" href="mostrar_productos.php?cod_categoria=<?php echo $categoria->getCodigoCategoria() ?>">  Ver Productos</a>

    </li>
  </ul>
</div>

<?php } ?>

</div>
  </div>
</div>

</body>
</html>
