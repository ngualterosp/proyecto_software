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

<form>
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
  <textarea rows="4" cols="40" placeholder="Deja tu comentario para BadBunny...">
</textarea>

</form>
<br><br>
<a class="btn btn-dark text-light btn-xl js-scroll-trigger">Enviar</a>


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
