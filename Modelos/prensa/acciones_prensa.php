<?php

require_once('crud_prensa.php');
require_once('RuedaPrensa.php');

$crud= new CrudPrensa();



if(isset($_POST['insertarRueda']))
{
	$laRueda = new RuedaPrensa();
	$laRueda->setCodigoCiudad($_POST['cod_ciudad']);
	$laRueda->setLugar($_POST['lugar_rueda']);
	$laRueda->setDescripcion($_POST['descripcion_rueda']);


	$crud->insertarRueda($laRueda);

	header('Location: ruedasAdmin.php');
}
elseif(isset($_POST['actualizarRueda']))
{
	$laRueda = new RuedaPrensa();
	$laRueda->setCodigoRuedaPrensa($_POST['cod_rueda_prensa']);
	$laRueda->setCodigoCiudad($_POST['cod_ciudad']);
	$laRueda->setLugar($_POST['lugar_rueda']);
	$laRueda->setFecha($_POST['fecha_rueda']);
	$laRueda->setDescripcion($_POST['descripcion_rueda']);


	$crud->actualizarRueda($laRueda);

	header('Location: ruedasAdmin.php');

}
elseif($_GET['accion']=='e')
{
	$crud->eliminarRueda($_GET['cod_rueda_prensa']);
	header('Location: ruedasAdmin.php');
}

?>