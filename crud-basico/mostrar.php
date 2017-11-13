<?php
require_once('crud_user.php');
require_once('user.php');
$crud=new Cruduser();
$user= new user();

$listaUsuarios=$crud->mostrar();
?>
 
<html>
<head>
	<title>Mostrar Usuarios</title>
</head>
<body>
	<table border=1>
		<head>
			<td>Nombre</td>
			<td>Rut</td>
			<td>Usuario</td>
			<td>Correo</td>


			<td>Actualizar</td>
			<td>Eliminar</td>
		</head>
		<body>
			<?php foreach ($listaUsuarios as $user) {?>
			<tr>
				<td><?php echo $user->getRut()?></td>
				<td><?php echo $user->getNombre()?></td>
				<td><?php echo $user->getUsuario()?></td>
				<td><?php echo $user->getCorreo()?></td>
				<td><a href="actualizar.php?id= <?php echo $user->getRut()?> &accion=a">Actualizar</a></td>
				<td><a href="administrar_user.php?id= <?php echo $user->getRut()?> &accion=e">Eliminar</a></td>
			</tr>
			<?php }?>
		</body>
	</table>
	<a href="index.php">Volver</a>
</body>
</html>