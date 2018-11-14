<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login Administrador</title>

    <!-- Bootstrap core CSS-->
    <link href="vendor1/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="vendor1/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">

  </head>

  <body>
    <br><br>
    <center><img src="badbunny_admin.png" width="50%"/></center>
    <div class="container">
      <div class="card card-login mx-auto mt-5">
        <div class="card-header">Login</div>
        <div class="card-body">
          <form action="" method="post">
            <div class="form-group">
              <div class="form-label-group">
                <input name="user" type="text" id="usuario" class="form-control" placeholder="Usuario" required="required" >
                <label for="usuario">Usuario</label>
              </div>
            </div>
            <div class="form-group">
              <div class="form-label-group">
                <input name="password" type="password" id="clave" class="form-control" placeholder="Contraseña" required="required">
                <label for="clave">Contraseña</label>
              </div>
            </div>

            <div><input name="login" class="btn btn-primary btn-block" type="submit" value = "Login"/></div>
          </form>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor1/jquery/jquery.min.js"></script>
    <script src="vendor1/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor1/jquery-easing/jquery.easing.min.js"></script>

  </body>

</html>

<?php

    session_start();





    function verificar_login($user,$password,&$result)  // COMPARAMOS SI EXISTE EL RESULTADO
    {

    	$conn = mysqli_connect("localhost","admin", "admin", "badbunny");
    if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }

        $sql = "SELECT * FROM administrador WHERE usuario_admin='$user' and pass_admin='$password'";



		$rec = $conn->query($sql);
        $count = 0;
        while($row = $rec->fetch_assoc())
        {
            $count++;
            $result = $row;
        }
        if($count == 1)
        {

            $_SESSION['cod_admin'] = $row['cod_admin'];
            return 1;
        }
        else
        {
            return 0;
        }
    }




    if(!isset($_SESSION['cod_admin']))
    {
        if(isset($_POST['login']))
        {
          if(empty($_POST['user'])) {
            echo "<p class='error'> * El campo usuario no puede estar vacío </p>";
          }
            if(empty($_POST['password'])) {
            echo "<div class='error'> * El campo constraseña no puede estar vacío </div>";
              }
            if(verificar_login($_POST['user'],$_POST['password'],$result) == 1)
            {
                $_SESSION['cod_admin'] = $result->cod_admin;


                   header("location:inicioAdmin.php"); // Acá es el login correcto, y reenviamos
            }
            else
            {
                echo '<span class="error">Usuario o contraseña incorrecto, intente de nuevo.</span>'; // mensaje de error
            }
        }

        ?>

        <style type="text/css">
        *{
          font-size: 14px;
          font-family: sans-serif;
        }
        form.login {
            background: none repeat scroll 0 0 #F1F1F1;
            border: 1px solid #DDDDDD;
            margin: 0 auto;
            padding: 20px;
            width: 278px;
        }
        form.login div {
            margin-bottom: 15px;
            overflow: hidden;
        }
        form.login div label {
            display: block;
            float: left;
            line-height: 25px;
        }
        form.login div input[type="text"], form.login div input[type="password"] {
            border: 1px solid #DCDCDC;
            float: right;
            padding: 4px;
        }
        form.login div input[type="submit"] {
            background: none repeat scroll 0 0 #DEDEDE;
            border: 1px solid #C6C6C6;
            float: right;
            font-weight: bold;
            padding: 4px 20px;
        }


        .error {
          position: relative;
          z-index: 1;
          padding: 10px;
          border-radius: 10px;
          color: white;
          width: 235px;
          text-align: center;
          font-size: 12px;
          margin: 519px;
          font-weight: bold;
          background: RGB(194, 46, 79);
        }

        .error::after {
    content: '';
    border-bottom: 15px solid RGB(194, 46, 79);
    border-right: 15px solid transparent;
    border-left: 15px solid transparent;
    position: absolute;
    left: 45%;
    top: -14px;
}
        </style>


          <?php
      }
      else
      {
          echo 'Su usuario ingreso correctamente.';
          echo '<a href="logout.php">Logout</a>';
      }
      // eso es logout cunado cerramos sesion vemos como es codigo
    ?>
