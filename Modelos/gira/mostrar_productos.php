<?php
require_once "crud_producto.php";
require_once "categoria.php";
require_once "producto.php";

$crud = new CrudProducto();

$codigoCategoria = $_GET['cod_categoria'];
$listaProductos =[];
$listaProductos = $crud->mostrarProductos($codigoCategoria);




?>


<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        <meta name="description" content="Bootstrap HTML5">
        <meta name="keywords" content="HTML5, CSS3, JavaScript">
    </head>
    <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
    <link rel="stylesheet" href="https://bootswatch.com/united/bootstrap.min.css">
    <script src="bootstrap.min.js"></script>
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
    <a href="tiendaCliente.php" class="w3-bar-item w3-button w3-padding-large fa fa-reply">  Categorias</a>
  </div>
</div>

<div class="bgimg w3-display-container w3-animate-opacity w3-text-white">
  <div>
<br><br><br><br><br>
<div class="w3-row-padding">

<?php foreach ($listaProductos as $producto){ // aca puedes hacer la consulta e iterarla con each. ?>

<div class="w3-third w3-margin-bottom">
  <ul class="w3-ul w3-border w3-center w3-hover-shadow">
    <li class="w3-black w3-xlarge w3-padding-32"><?php echo $producto->getNombre() ?></li>
    <li class="w3-padding-16"> <img src="../../img/camiseta.jpg" width="80%"> </li>
    <li class="w3-padding-16"><?php echo $producto->getDescripcion() ?></li>
      <h2 class="w3-wide">$<?php echo $producto->getValor() ?> USD. </h2>
    </li>
    <li class="w3-light-grey w3-padding-24">
       <a href="#" class="btn btn-default producto" precio="<?php echo $producto->getValor() ?>" nombre="<?php echo $producto->getNombre() ?>" role="button">Comprar</a>
    </li>
  </ul>
</div>



<?php } ?>

</div>
  </div>
</div>

<script src="minicart.js"></script>
  <script>
    // configuración inicial del carrito
    paypal.minicart.render({
    strings:{
      button:'Pagar'
     ,buttonAlt: "Total"
     ,subtotal: 'Total:'
     ,empty: 'No hay productos en el carrito'
    }
    });
    // Eventos para agregar productos al carrito

     $('.producto').click(function(e){
         e.stopPropagation();
        paypal.minicart.cart.add({
      business: 'badbunny@gmail.com', // Cuenta paypal para recibir el dinero
      item_name: $(this).attr("nombre"),
       amount: $(this).attr("precio"),
       currency_code: 'USD',

      });
     });

  </script>
</body>
</html>
