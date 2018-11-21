<?php
//incluye la clase noticia y Crudnoticia
require_once('crud_gira.php');
require_once('evento.php');
require_once('gira.php');



    $crud= new CrudGira();


	// si el elemento insertar no viene nulo llama al crud e inserta un noticia
    
	if(isset($_POST['actualizarEvento']))
	{
		
		$elEvento = new Evento();
		$elEvento->setCodigoEvento($_POST['cod_evento']);
		$elEvento->setCodigoGira($_POST['cod_gira']);
		$elEvento->setCodigoCiudad($_POST['cod_ciudad']);
		$elEvento->setNombre($_POST['nom_evento']);
		$elEvento->setDescripcion($_POST['descripcion_evento']);
		
		
		$crud->actualizarEvento($elEvento);
		header('Location: ../../giras/girasAdmin.php');
	}
	elseif(isset($_POST['actualizarcat']))
	{
		$laCategoria = new Categoria();
		$laCategoria->setCodigoCategoria($_POST['cod_categoria']);
		
		$laCategoria->setNombre($_POST['categoria']);
		
		$crud->actualizarCategoria($laCategoria);
		header('Location: tiendaAdmin.php');
	}
	elseif(isset($_POST['insertarEvento']))
	{

        $elEvento = new Evento();
		$elEvento->setCodigoGira($_POST['cod_gira']);
		$elEvento->setCodigoCiudad($_POST['cod_ciudad']);
		$elEvento->setNombre($_POST['nom_evento']);
		$elEvento->setDescripcion($_POST['descripcion_evento']);
		$crud->insertarEvento($elEvento);
		header('Location: ../../giras/girasAdmin.php');
	}
	elseif ($_GET['accion']=='e') {
    	echo $_GET['cod_evento'];
		$crud->eliminarEvento($_GET['cod_evento']);
		header('Location: ../../giras/girasAdmin.php');		
	// si la variable accion enviada por GET es == 'a', envía a la página actualizar.php
	}
	elseif($_GET['accion']=='a')
	{
		header('Location: actualizar_gira.php');
	}
?>