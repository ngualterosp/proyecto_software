<!DOCTYPE html>
<?php

    require_once "crud_gira.php";
    require_once "gira.php";



    $crud = new CrudGira();
    $gira = new Gira();

    $listaGiras = $crud->obtenerUltimas3Giras();



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


<?php foreach ($listaGiras as $gira) {

  # code...
?>

<div class="w3-third w3-margin-bottom">
  <ul class="w3-ul w3-border w3-center w3-hover-shadow">
    <li class="bg-primary w3-xlarge w3-padding-32"> <img src="data:image/jpg;base64, <?php echo base64_encode(stripslashes($gira->getRuta())); ?>" width="90%"> </li>
     <li>   <?php echo $gira->getNombre()?></li>
    <li>    <?php echo $gira->getFecha()?></li>
    <li>    <?php echo $gira->getDescripcion()?></li>
<li class="w3-light-grey w3-padding-24">
  <center><table>
    <tr>
      <td>

</td>
<td>
  <a href="Modelos/gira/mostrarEventos.php?cod_gira=<?php echo $gira->getCodigoGira() ?>"> <button class="w3-button w3-black btn btn-primary w3-padding-large">Observar Eventos</button> </a>
</td>
</tr>
</table></center>
</li>

  </ul>
</div>



<?php } ?>

</div>
<center>
<p class="mb-5">Compra tus entradas en la tienda Oficial BadBunnyOfficial. <br>
Todos los derechos reservados ®</p>
</center>

</body>
</html>
