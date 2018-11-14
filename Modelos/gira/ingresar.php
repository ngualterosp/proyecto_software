<html>
<head>
	<title> Ingresar Gira</title>
</head>
<header>
Ingresa los datos de la Gira
</header>
<form action='administrar_gira.php' method='post'>
	<table>
		<tr>
			<td>Nombre Gira:</td>
			<td> <input type='text' name='nom_gira'></td>
		</tr>
		<tr>
			<td>Descripcion gira:</td>
			<td><input type='text' name='descripcion_gira' ></td>
		</tr>
		
		<input type='hidden' name='insertar' value='insertar'>
	</table>
	<input type='submit' value='Guardar'>
	<a href="index.php">Volver</a>
</form>

</html>