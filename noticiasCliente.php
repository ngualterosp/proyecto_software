<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>

      <?php
      // Te recomiendo utilizar esta conección, la que utilizas ya no es la recomendada.
      $link = new PDO('mysql:host=localhost;dbname=badbunny', 'root', ''); // el campo vaciío es para la password.
      ?>


<div class="w3-content">
<?php foreach ($link->query('SELECT * FROM noticia ORDER BY cod_noticia DESC LIMIT 1') as $row){ // aca puedes hacer la consulta e iterarla con each. ?>
  <?php foreach ($link->query('SELECT * FROM noticia ORDER BY cod_noticia DESC LIMIT 1,1') as $row1){?>
    <?php foreach ($link->query('SELECT * FROM noticia ORDER BY cod_noticia DESC LIMIT 2,1') as $row2){?>
<div class="w3-row w3-margin">
<div class="w3-third">
  <img src="data:image/jpg;base64, <?php echo base64_encode(stripslashes($row['ruta_imagen'])); ?>" style="width:100%;min-height:200px">
</div>
<div class="w3-twothird w3-container">
  <center><h1><?php echo $row['titular_noticia'] ?></h1></center>
  <p>
  <?php echo $row['entrada_noticia'] ?>
  </p>
</div>
</div>

<div class="w3-row w3-margin">
<div class="w3-twothird w3-container">
  <center><h1><?php echo $row1['titular_noticia'] ?></h1></center>
  <p>
  <?php echo $row1['entrada_noticia'] ?>
  </p>
</div>
<div class="w3-third">
  <img src="data:image/jpg;base64, <?php echo base64_encode(stripslashes($row1['ruta_imagen'])); ?>" style="width:100%;min-height:200px">
</div>
</div>

<div class="w3-row w3-margin">
<div class="w3-third">
  <img src="data:image/jpg;base64, <?php echo base64_encode(stripslashes($row2['ruta_imagen'])); ?>" style="width:100%;min-height:200px">
</div>
<div class="w3-twothird w3-container">
  <center><h1><?php echo $row2['titular_noticia'] ?></h1></center>
  <p>
  <?php echo $row2['entrada_noticia'] ?>
  </p>
</div>
</div>
<?php } ?>
<?php } ?>
<?php } ?>
</div>
</div>
</body>
</html>
