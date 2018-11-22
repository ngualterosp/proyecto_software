<?php
//incluye la clase noticia y Crudnoticia
require_once('crud_producto.php');
require_once('producto.php');
require_once('categoria.php');


    $crud= new CrudProducto();


	// si el elemento insertar no viene nulo llama al crud e inserta un noticia
    if ($_GET['accion']=='e') {
    	echo $_GET['cod_producto'];
		$crud->eliminarProducto($_GET['cod_producto']);
		header('Location: tiendaAdmin.php');		
	// si la variable accion enviada por GET es == 'a', envía a la página actualizar.php
	}
	elseif($_GET['accion']=='a')
	{
		header('Location: actualizar_producto.php');
	}
	elseif(isset($_POST['actualizar']))
	{
		$elProducto = new Producto();
		$elProducto->setCodigoProducto($_POST['cod_producto']);
		$elProducto->setCodigoCategoria($_POST['cod_categoria']);
		$elProducto->setCodigoGenero($_POST['genero']);
		$elProducto->setNombre($_POST['nombre']);
		$elProducto->setDescripcion($_POST['descripcion']);
		$elProducto->setValor($_POST['valor']);
		$elProducto->setCantidad($_POST['cantidad']);
		$crud->actualizarProducto($elProducto);
		header('Location: tiendaAdmin.php');
	}
	elseif(isset($_POST['actualizarcat']))
	{
		$laCategoria = new Categoria();
		$laCategoria->setCodigoCategoria($_POST['cod_categoria']);
		
		$laCategoria->setNombre($_POST['categoria']);
		
		$crud->actualizarCategoria($laCategoria);
		header('Location: tiendaAdmin.php');
	}
?>