<?php
//incluye la clase noticia y Crudnoticia
require_once('crud_gira.php');
require_once('gira.php');


$crud= new CrudGira();
$gira= new Gira();

	// si el elemento insertar no viene nulo llama al crud e inserta un noticia
	if (isset($_POST['submit'])) {
		

		$gira->setNombre($_POST['nom_gira']);
		$gira->setDescripcion($_POST['descripcion_gira']);
		$gira->setRuta(addslashes(file_get_contents($_FILES['ruta_imagen']['tmp_name'])));

		//llama a la función insertar definida en el crud
		$crud->insertar($gira);
		header('Location: ../../giras/girasAdmin.php');
	// si el elemento de la vista con nombre actualizar no viene nulo, llama al crud y actualiza el noticia
	}elseif(isset($_POST['actualizar'])){
		$gira->setCodigoGira($_POST['cod_gira']);
		$gira->setNombre($_POST['nom_gira']);
		$gira->setDescripcion($_POST['descripcion_gira']);
		$crud->actualizar($gira);
		header('Location: ../../giras/girasAdmin.php');

	// si la variable accion enviada por GET es == 'e' llama al crud y elimina un noticia6
	}

	elseif ($_GET['accion']=='e') {
		$crud->eliminar($_GET['cod_gira']);
		header('Location: ../../giras/girasAdmin.php');
	// si la variable accion enviada por GET es == 'a', envía a la página actualizar.php
	}elseif($_GET['accion']=='a'){
		header('Location: actualizar.php');
	}
?>
