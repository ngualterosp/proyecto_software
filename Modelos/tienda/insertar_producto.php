
<?php
session_start();
require_once "conexion.php";
require_once "crud_producto.php";
require_once "producto.php";
require_once "categoria.php";


$crud = new CrudProducto();
$listaGeneros = $crud->mostrarGeneros();
$categoria = new Categoria();
$codigoAA=(integer)($_GET['cod_categoria']);
$categoria = $crud->obtenerCategoria($codigoAA);

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
          <a class="nav-link" href="tiendaAdmin.php">
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

						<h1><a>Insertar Producto</a></h1>
						<form id="form_35166" class="appnitro"  method="post" action="" enctype="multipart/form-data">
									<div class="form_description">
							<h2>Insertar Producto</h2>
							<p></p>
						</div>
							<ul >

									<li id="li_1" >
						<label class="description" for="categoria">En categoria: <?php echo $categoria->getNombre()?> </label>

						</li>

									<li id="li_3" >
						<label class="description" for="nombre">Nombre producto </label>
						<div>
							<input id="nombre" name="nombre" class="element text medium form-control" type="text" maxlength="255" value="" required/>
						</div>
						</li>

						<li id="li_3">
							<label class="description" for="genero">Genero </label>
				<div>
				   <select name="genero" class="element text medium form-control">

				        	<?php

				        	foreach ($listaGeneros as $genero)
				        	{
				        		$codigoElGenero = $genero->getCodigoGenero();

				        		?>



				         <option value="<?php echo $codigoElGenero?>"><?php echo $genero->getNombre(); ?></option>

				        		<?php
				        	}



				        	 ?>


				</select>
				</div>
				</li>




									<li id="li_4" >
						<label class="description" for="descripcion">Descripcion del Producto </label>
						<div>
							<input id="descripcion" placeholder="Descripción del producto" name="descripcion" class="element text medium form-control" type="text" maxlength="255" value="" required/>
						</div>
						</li>

						<li id="li_5" >
						<label class="description" for="valor">Valor del producto </label>
						<div>
              <input type="text" name="valor" required placeholder="Valor" class="element text medium form-control"
               id="valor" value="" onkeypress="return filterFloat(event,this);"/>
						</div>
						</li>
            <li id="li_6" >
            <label class="description" for="cantidad">Cantidad </label>
            <div>
              <input id="cantidad" placeholder="cantidad" type="number" class="element text medium form-control" name="cantidad" min="1" max="10000" required>
            </div>
            </li>
            <li id="li_7">
              <div>
                <input type="file" required name="ruta_imagen"/>
              </div>
            </li>

									<center><li class="buttons">
							    <input type="hidden" name="form_id" value="35166" />

								<input id="saveForm" class="btn btn-primary" type="submit" name="submit" value="Agregar" />
                <a href="tiendaAdmin.php"> Volver </a>
						</li></center>
							</ul>
						</form>

				<div id= segundaCapa>

					<?php

							        $db = Db::conectar();
				                    if(isset($_POST['nombre']))
				                    {

				                    	  $codigoCategoria= $categoria->getCodigoCategoria();
				                    	  $codigoGenero=$_POST['genero'];
                                $cantidadProducto= $_POST['cantidad'];
				                          $nombreProducto=$_POST['nombre'];
				                          $descripcionProducto=$_POST['descripcion'];
				                          $valorProducto=$_POST['valor'];

				                          $elProducto = new Producto();
				                          $elProducto->setCodigoCategoria($codigoCategoria);
				                          $elProducto->setCodigoGenero($codigoGenero);
				                          $elProducto->setNombre($nombreProducto);
				                          $elProducto->setDescripcion($descripcionProducto);
				                          $elProducto->setValor($valorProducto);
                                  $elProducto->setCantidad($cantidadProducto);
                                  $elProducto->setRuta(addslashes(file_get_contents($_FILES['ruta_imagen']['tmp_name'])));


				                          $crud->insertarProducto($elProducto);



				                    }

				                    ?>

				</div>

						<div id="footer">

						</div>
					</div>
					<img id="bottom" src="bottom.png" alt="">


        <!-- /.container-fluid -->
        <script type="text/javascript">
        <!--
        function filterFloat(evt,input){
            // Backspace = 8, Enter = 13, ‘0′ = 48, ‘9′ = 57, ‘.’ = 46, ‘-’ = 43
            var key = window.Event ? evt.which : evt.keyCode;
            var chark = String.fromCharCode(key);
            var tempValue = input.value+chark;
            if(key >= 48 && key <= 57){
                if(filter(tempValue)=== false){
                    return false;
                }else{
                    return true;
                }
            }else{
                  if(key == 8 || key == 13 || key == 0) {
                      return true;
                  }else if(key == 46){
                        if(filter(tempValue)=== false){
                            return false;
                        }else{
                            return true;
                        }
                  }else{
                      return false;
                  }
            }
        }
        function filter(__val__){
            var preg = /^([0-9]+\.?[0-9]{0,2})$/;
            if(preg.test(__val__) === true){
                return true;
            }else{
               return false;
            }

        }
        -->
        </script>

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
    <script src="vendor1/bootstrap/js/bootstrap.bundle.min.js"></script>

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
