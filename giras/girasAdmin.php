
  <?php
require_once "../Modelos/gira/conexion.php";
require_once "../Modelos/gira/gira.php";
require_once "../Modelos/gira/crud_gira.php";
$crud=new CrudGira();
$gira= new Gira();
//obtiene todos las noticias con el método mostrar de la clase crud
$listaGira=$crud->mostrar();




if(isset($_GET['insert']))

        header("location:formi.php");
          if(isset($_GET['mod']))


header("location:modificar.php?cod_noticia=");
        if(isset($_POST['mod']))
          header("location:actualizar.php?cod_noticia=$noticia->getCodigo()")




?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Administrador</title>

    <!-- Bootstrap core CSS-->
    <link href="../vendor1/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="../vendor1/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="../vendor1/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../css/sb-admin.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

      <a class="navbar-brand mr-1" href="../inicioAdmin.php">🐰 BadBunny 🐰</a>



      <!-- Navbar Search -->
      <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Buscar" aria-label="Search" aria-describedby="basic-addon2">
          <div class="input-group-append">
            <button class="btn btn-primary" type="button">
              <i class="fas fa-search"></i>
            </button>
          </div>
        </div>
      </form>

      <!-- Navbar -->
      <ul class="navbar-nav ml-auto ml-md-0">
        <li class="nav-item dropdown no-arrow">
          <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-user-circle fa-fw"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="../index.php">Cerrar Sesion</a>
          </div>
        </li>
      </ul>

    </nav>

    <div id="wrapper">

      <!-- Sidebar -->
      <ul class="sidebar navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="../inicioAdmin.php">
            <i class="fa fa-home"></i>
            <span>Inicio</span>
          </a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="../noticias/noticiasAdmin.php">
            <i class="fa fa-newspaper-o"></i>
            <span>Noticias</span>
          </a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="../giras/girasAdmin.php">
            <i class="fa fa-plane"></i>
            <span>Giras</span>
          </a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="../Modelos/prensa/ruedasAdmin.php">
            <i class="fa fa-microphone"></i>
            <span>Rueda de prensa</span>
          </a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="../Modelos/tienda/tiendaAdmin.php">
            <i class="fa fa-shopping-cart"></i>
            <span>Tienda</span>
          </a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="../live.php">
            <i class="fa fa-video-camera"></i>
            <span>Live</span>
          </a>
        </li>
      </ul>

      <div id="content-wrapper">


<?php



?>


<form action="" method="get">
       <input name="insert" class="btn btn-primary " type="submit" value = "Insertar Gira" />




       <br></br>
        <table class="table table-striped">

        		<thead>
        		<tr>
        			<th>Nombre Gira</th>
        			<th>Descripcion Gira</th>
              <th>Fecha Inicio</th>
              <th>Modificar</th>
              <th>Eliminar</th>
              <th>Eventos Asociados</th>
        		</tr>
        		</thead>


         <?php foreach ($listaGira as $gira){ // aca puedes hacer la consulta e iterarla con each. ?>
        <tr>
          <td><?php echo $gira->getNombre() // aca te faltaba poner los echo para que se muestre el valor de la variable.  ?></td>
            <td><?php echo $gira->getDescripcion() ?></td>
            <td><?php echo $gira->getFecha() ?></td>
            <td><a  class="btn btn-primary" href="../Modelos/gira/actualizar.php?cod_gira=<?php echo $gira->getCodigoGira() ?>&accion=a">Modificar</a></td>
            <td><a  class="btn btn-primary " href="../Modelos/gira/administrar_gira.php?cod_gira=<?php echo $gira->getCodigoGira()?>&accion=e" />Eliminar</td>
            <td><a  class="btn btn-primary " href="../Modelos/gira/eventosXgira.php?cod_gira=<?php echo $gira->getCodigoGira()?>" />Eventos Asociados</td>
        </tr>
        <?php
          }
        ?>



      </table>

    </form>


        <!-- /.container-fluid -->

        <!-- Sticky Footer -->
        <footer class="sticky-footer">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright © Your Website 2018</span>
            </div>
          </div>
        </footer>

      </div>
      <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="login.html">Logout</a>
          </div>
        </div>
      </div>
    </div>



    <!-- Bootstrap core JavaScript-->
    <script src="../vendor1/jquery/jquery.min.js"></script>
    <script src="../vendor1/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../vendor1/jquery-easing/jquery.easing.min.js"></script>

    <!-- Page level plugin JavaScript-->
    <script src="../vendor1/chart.js/Chart.min.js"></script>
    <script src="../vendor1/datatables/jquery.dataTables.js"></script>
    <script src="../vendor1/datatables/dataTables.bootstrap4.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../js/sb-admin.min.js"></script>

    <!-- Demo scripts for this page-->
    <script src="../js/demo/datatables-demo.js"></script>
    <script src="../js/demo/chart-area-demo.js"></script>

  </body>

</html>
