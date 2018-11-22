<?php
//incluye la clase noticia y CrudNoticia
	require_once('crud_gira.php');
	require_once('gira.php');
	$crud= new CrudGira();
	$gira=new Gira();
	//busca la noticia utilizando el id, que es enviado por GET desde la vista mostrar.php
	$gira=$crud->obtenerGira($_GET['cod_gira']);
?>
<!DOCTYPE html>
<html lang="en">

  <head>

		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<link rel="stylesheet" type="text/css" href="view.css" media="all">
		<script type="text/javascript" src="view.js"></script>
		<script type="text/javascript" src="calendar.js"></script>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="">
		<meta name="author" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Administrador</title>

    <!-- Bootstrap core CSS-->
    <link href="../../vendor1/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="../../vendor1/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="../../vendor1/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../../css/sb-admin.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

      <a class="navbar-brand mr-1" href="../../inicioAdmin.php">🐰 BadBunny 🐰</a>



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
            <a class="dropdown-item" href="../../index.php">Cerrar Sesion</a>
          </div>
        </li>
      </ul>

    </nav>

    <div id="wrapper">

      <!-- Sidebar -->
      <ul class="sidebar navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="../../inicioAdmin.php">
            <i class="fa fa-home"></i>
            <span>Inicio</span>
          </a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="../../noticias/noticiasAdmin.php">
            <i class="fa fa-newspaper-o"></i>
            <span>Noticias</span>
          </a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="../../giras/girasAdmin.php">
            <i class="fa fa-plane"></i>
            <span>Giras</span>
          </a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="../prensa/ruedasAdmin.php">
            <i class="fa fa-microphone"></i>
            <span>Rueda de prensa</span>
          </a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="../tienda/tiendaAdmin.php">
            <i class="fa fa-shopping-cart"></i>
            <span>Tienda</span>
          </a>
        </li>
				<li class="nav-item active">
          <a class="nav-link" href="../../live.php">
            <i class="fa fa-video-camera"></i>
            <span>Live</span>
          </a>
        </li>
      </ul>

			<div id="content-wrapper">

				<img id="top" src="top.png" alt="">
				<div id="form_container">

		<h1><a>Modificar Gira</a></h1>
		<form action='administrar_gira.php' method='post'>
			<div class="form_description">
	<h2>Modificar Gira</h2>
	<p></p>
</div>

<input type="hidden" name="cod_gira" value='<?php echo $gira->getCodigoGira() ?>'>
<li id="li_1" >
<label class="description" for="titular">Nombre de la Gira</label>
<div>
<input type='text' required class="element text medium form-control" name='nom_gira' value='<?php echo $gira->getNombre()?>'>
</div>
</li>
<li id="li_3" >
<label class="description" for="entrada">Descripción Gira</label>
<div>
<input type='text' required class="element text medium form-control" name='descripcion_gira' value='<?php echo $gira->getDescripcion()?>' ></input>
</div>
</li>


<center>
<input type='hidden' name='actualizar' value='actualizar'>
<input class="btn btn-primary " type="submit" value="Modificar" />
<a href="../../giras/girasAdmin.php"> Volver </a>
</center>
</form>

<div id="footer">

</div>
</div>
<img id="bottom" src="bottom.png" alt="">


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
    <script src="../../vendor1/jquery/jquery.min.js"></script>
    <script src="../../vendor1/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../../vendor1/jquery-easing/jquery.easing.min.js"></script>

    <!-- Page level plugin JavaScript-->
    <script src="../../vendor1/chart.js/Chart.min.js"></script>
    <script src="../../vendor1/datatables/jquery.dataTables.js"></script>
    <script src="../../vendor1/datatables/dataTables.bootstrap4.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../../js/sb-admin.min.js"></script>

    <!-- Demo scripts for this page-->
    <script src="../../js/demo/datatables-demo.js"></script>
    <script src="../../js/demo/chart-area-demo.js"></script>

  </body>

</html>
