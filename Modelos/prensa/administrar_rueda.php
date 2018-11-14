<?php
//incluye la clase noticia y Crudnoticia
require_once('crud_prensa.php');
require_once('prensa.php');


$crud= new CrudPrensa();
$rueda_prensa= new Prensa();

	// si el elemento insertar no viene nulo llama al crud e inserta un noticia
	if (isset($_POST['insertar'])) {
		$rueda_prensa->setLugar($_POST['lugar_rueda']);
		$rueda_prensa->setEntrada($_POST['entrada']);

		//llama a la función insertar definida en el crud
		$crud->insertar($rueda_prensa);
		header('Location: index.php');
	// si el elemento de la vista con nombre actualizar no viene nulo, llama al crud y actualiza el noticia
	}elseif(isset($_POST['actualizar'])){
		$rueda_prensa->setCodigo($_POST['cod_rueda_prensa']);
		$rueda_prensa->setLugar($_POST['lugar_rueda']);
		$rueda_prensa->setEntrada($_POST['entrada']);
		$crud->actualizar($rueda_prensa);
		header('Location: ../../prensas/prensaAdmin.php');

	// si la variable accion enviada por GET es == 'e' llama al crud y elimina un noticia6
	}elseif ($_GET['accion']=='e') {
		$crud->eliminar($_GET['cod_rueda_prensa']);
		header('Location: ../../prensas/prensaAdmin.php');
	// si la variable accion enviada por GET es == 'a', envía a la página actualizar.php
	}elseif($_GET['accion']=='a'){
		header('Location: actualizar.php');
	}
?>
