<?php
	require_once('crud_user.php');
	require_once('user.php');
	$crud= new Cruduser();
	$user=new user();
	//busca usuario con el rut
	$user=$crud->obtenerUsuario($_GET['id']);
?>
<html>
<head>
	<title>Actualizar Usuario</title>
</head>
<body>
	<form action='administrar_user.php' method='post'>
	<table>
		<tr>
			<td>Rut:</td>
			<td> <input type='text' name='rut' value='<?php echo $user->getRut()?>'></td>
		</tr>
		<tr>
			<td>Nombre:</td>
			<td><input type='text' name='nombre' value='<?php echo $user->getNombre()?>' ></td>
		</tr>
		<tr>
			<td>Usuario:</td>
			<td><input type='text' name='usuario' value='<?php echo $user->getUsuario() ?>'></td>
		</tr>
		<tr>
			<td>Contraseña:</td>
			<td> <input type='text' name='contrasena' value='<?php echo $user->getContrasena()?>'></td>
		</tr>
		<tr>
			<td>Correo:</td>
			<td> <input type='text' name='correo' value='<?php echo $user->getCorreo()?>'></td>
		</tr>
		<input type='hidden' name='actualizar' value'actualizar'>
	</table>
	<input type='submit' value='Guardar'>
	<a href="index.php">Volver</a>
	</form>
</body>
</html>