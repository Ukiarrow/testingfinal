<html>
<head>
	<title> Ingresar Usuario</title>
</head>
<header>
Ingresa los datos del Usuario
</header>
<form action='administrar_user.php' method='post'>
	<table>
		<tr>
			<td>Nombre:</td>
			<td> <input type='text' name='nombre'></td>
		</tr>
		<tr>
			<td>Rut:</td>
			<td><input type='text' name='rut' ></td>
		</tr>
		<tr>
			<td>Usuario</td>
			<td><input type='text' name='usuario' ></td>
		</tr>
		<tr>
			<td>Contraseña</td>
			<td><input type='text' name='contrasena' ></td>
		</tr>
		<tr>
			<td>Correo</td>
			<td><input type='text' name='correo' ></td>
		</tr>
		<input type='hidden' name='insertar' value='insertar'>
	</table>
	<input type='submit' value='Guardar'>
	<a href="index.php">Volver</a>
</form>
 
</html>