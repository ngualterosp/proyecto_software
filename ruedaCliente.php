<!DOCTYPE html>
<html>
<title>Rueda de prensa cliente</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>
<div class="w3-container">

<center><h2>Próximas ruedas de prensa de Bad Bunny</h2></center><br>
<?php foreach ($link->query('SELECT * FROM rueda_prensa ORDER BY cod_rueda_prensa DESC LIMIT 1') as $row){ // aca puedes hacer la consulta e iterarla con each. ?>
  <?php foreach ($link->query('SELECT * FROM rueda_prensa ORDER BY cod_rueda_prensa DESC LIMIT 1,1') as $row1){?>
    <?php foreach ($link->query('SELECT * FROM rueda_prensa ORDER BY cod_rueda_prensa DESC LIMIT 2,1') as $row2){?>
      <?php foreach ($link->query('SELECT * FROM rueda_prensa ORDER BY cod_rueda_prensa DESC LIMIT 3,1') as $row3){?>
        <?php foreach ($link->query('SELECT * FROM rueda_prensa ORDER BY cod_rueda_prensa DESC LIMIT 4,1') as $row4){?>

<button onclick="myFunction('Demo1')" class="w3-btn w3-block w3-black w3-left-align">
<?php echo $row['lugar_rueda'] ?>
</button>
<div id="Demo1" class="w3-container w3-hide">
  <h4><?php echo $row['fecha_rueda'] ?></h4>
  <p><?php echo $row['descripcion_rueda'] ?></p>
</div>
<button onclick="myFunction('Demo2')" class="w3-btn w3-block w3-black w3-left-align">
<?php echo $row1['lugar_rueda'] ?>
</button>
<div id="Demo2" class="w3-container w3-hide">
  <h4><?php echo $row1['fecha_rueda'] ?></h4>
  <p><?php echo $row1['descripcion_rueda'] ?></p>
</div>
<button onclick="myFunction('Demo3')" class="w3-btn w3-block w3-black w3-left-align">
<?php echo $row2['lugar_rueda'] ?>
</button>
<div id="Demo3" class="w3-container w3-hide">
  <h4><?php echo $row2['fecha_rueda'] ?></h4>
  <p><?php echo $row2['descripcion_rueda'] ?></p>
</div>

<button onclick="myFunction('Demo4')" class="w3-btn w3-block w3-black w3-left-align">
<?php echo $row3['lugar_rueda'] ?>
</button>
<div id="Demo4" class="w3-container w3-hide">
  <h4><?php echo $row3['fecha_rueda'] ?></h4>
  <p><?php echo $row3['descripcion_rueda'] ?></p>
</div>

<button onclick="myFunction('Demo5')" class="w3-btn w3-block w3-black w3-left-align">
<?php echo $row4['lugar_rueda'] ?>
</button>
<div id="Demo5" class="w3-container w3-hide">
  <h4><?php echo $row4['fecha_rueda'] ?></h4>
  <p><?php echo $row4['descripcion_rueda'] ?></p>
</div>

<?php } ?>
<?php } ?>
<?php } ?>
<?php } ?>
<?php } ?>
</div>
<script>
function myFunction(id) {
    var x = document.getElementById(id);
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else {
        x.className = x.className.replace(" w3-show", "");
    }
}

</script>
</body>
</html>
