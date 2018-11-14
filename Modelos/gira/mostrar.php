<?php
//incluye la clase noticia y Crudnoticia
require_once('crud_gira.php');
require_once('gira.php');
$crud=new CrudGira();
$gira= new Gira();
//obtiene todos las noticias con el método mostrar de la clase crud
$listaGiras=$crud->mostrar();



?>

<html>
<head>
	<title>Mostrar Girar</title>
</head>
<body>
	<table border=1>
		<head>
			<td>Nombre de la Gira</td>
			<td>Descripcion de la Gira</td>
			<td>Fecha de Inicio</td>
			<td>Actualizar</td>
			<td>Eliminar</td>
		</head>
		<body>
			<?php foreach ($listaGiras as $gira) {?>
			<tr>
				<td><?php echo $gira->getNombre() ?></td>
				<td><?php echo $gira->getDescripcion() ?></td>
				<td><?php echo $gira->getFecha()?> </td>
				<td><a href="actualizar.php?cod_gira=<?php echo $gira->getCodigoGira()?>&accion=a">Actualizar</a> </td>
				<td><a href="administrar_gira.php?cod_gira=<?php echo $gira->getCodigoGira()?>&accion=e">Eliminar</a>   </td>
			</tr>
			<?php } ?>
		</body>
	</table>
	<a href="index.php">Volver</a>
</body>
</html>