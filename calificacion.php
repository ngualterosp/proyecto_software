<!DOCTYPE html>
<?php
  // Te recomiendo utilizar esta conección, la que utilizas ya no es la recomendada.
  $link = new PDO('mysql:host=localhost;dbname=badbunny', 'root', ''); // el campo vaciío es para la password.
  ?>
<html>
<title>CALIFICACION DE ARTISTA</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>
<center>
  <h2 class="section-heading" align=center>Calificación y comentarios</h2>

<form id="form_35166" class="appnitro"  method="post" action="">
  <p class="clasificacion" >
    <input id="radio1" type="radio" name="estrellas" value="5"><!--
    --><label for="radio1" >★</label><!--
    --><input id="radio2" type="radio" name="estrellas" value="4"><!--
    --><label for="radio2">★</label><!--
    --><input id="radio3" type="radio" name="estrellas" value="3"><!--
    --><label for="radio3">★</label><!--
    --><input id="radio4" type="radio" name="estrellas" value="2"><!--
    --><label for="radio4">★</label><!--
    --><input id="radio5" type="radio" name="estrellas" value="1"><!--
    --><label for="radio5">★</label>
  </p>
  <div>
    <textarea id="comentario" name="comentario" placeholder="Deja un comentario a BadBunny..." class="element textarea medium form-control"
    required rows=5 cols=20></textarea>
  </div>
<br><br>

<input class="btn btn-dark text-light btn-xl js-scroll-trigger"
 id="saveForm" type="submit" name="submit" value="Enviar" href="#historia"/>
</form>

<div id="segundaCapa">
  <?php
          $conn = mysqli_connect("localhost","root", "", "badbunny");
         // Check connection
                if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
                }

                if(isset($_POST['comentario']))
                {
                      $comentarioVar=$_POST['comentario'];
                 $sql = "INSERT into comentario(DES_COMENTARIO) values ('$comentarioVar')";

                      if($conn->query($sql) == true)
                      {
                        echo "Tu comentario fue enviado correctamente";
                      }
                      else
                      {
                        echo $cod_admin;
                        echo "Error";
                      }

                }

  ?>

</div>

<style>
label{ color:grey;}
input[type = "radio"]{ display:none;}

.clasificacion{
      direction: rtl;/* right to left */
      unicode-bidi: bidi-override;/* bidi de bidireccional */
  }

  label:hover{color:orange;}
  label:hover ~ label{color:orange;}
  input[type = "radio"]:checked ~ label{color:orange;}

#form {
  width: 500px;
  margin: auto;
  height: 500px;
}

#form p {
  text-align: center;
  width: 500px;
}

#form label {
  font-size: 100px;
  width: 100px;
}

input[type="radio"] {
  display: none;
  width: 500px;
}

label {
  color: grey;
  width:20px
}

.clasificacion {
  direction: rtl;
  unicode-bidi: bidi-override;
  width: 500px;
}

label:hover,
label:hover ~ label {
  color: orange;
}

input[type="radio"]:checked ~ label {
  color: orange;
}

</style>
</center>
</body>
</html>
