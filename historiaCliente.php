<!DOCTYPE html>
<html>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>

<div class="w3-container">
  <div class="w3-card-4" style="width:70%">
    <div class="w3-container">
      <p><h1>Historia</h1></p>
      <hr>
      <img src="img/historia2.jpeg" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="width:200px">
      <p align="justify">
        <?php
        require_once('historia.txt');
        ?>
      </p><br><br><br>
    </div>
  </div>
</div>

</body>
</html>
