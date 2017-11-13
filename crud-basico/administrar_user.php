<?php
require_once('crud_user.php');
require_once('user.php');
 
$crud= new Cruduser();
$user= new user();
 
	// si el elemento insertar no viene nulo llama al crud e inserta un usuario
	if (isset($_POST['insertar'])) {
		$user->setRut($_POST['rut']);
		$user->setNombre($_POST['nombre']);
		$user->setUsuario($_POST['usuario']);
		$user->setContrasena($_POST['contrasena']);
		$user->setCorreo($_POST['correo']);
		//llama a la función insertar definida en el crud
		$crud->insertar($user);
		header('Location: index.php');
	// si el elemento de la vista con nombre actualizar no viene nulo, llama al crud y actualiza el usuario
	}elseif(isset($_POST['actualizar'])){
		$user->setRut($_POST['rut']);
		$user->setNombre($_POST['nombre']);
		$user->setUsuario($_POST['usuario']);
		$user->setContrasena($_POST['contrasena']);
		$user->setCorreo($_POST['correo']);
		$crud->actualizar($user);
		header('Location: index.php');
	// si la variable accion enviada por GET es == 'e' llama al crud y elimina un usuario
	}elseif ($_GET['accion']=='e') {
		$crud->eliminar($_GET['id']);
		header('Location: index.php');		
	// si la variable accion enviada por GET es == 'a', envía a la página actualizar.php 
	}elseif($_GET['accion']=='a'){
		header('Location: actualizar.php');
	}
?>