<?php
// incluye la clase Db
require_once('conexion.php');
 
	class Cruduser{
		// constructor de la clase
		public function __construct(){}
 
		// método para insertar user
		public function insertar($user){
			$db=Db::conectar();
			$insert=$db->prepare('INSERT INTO usuarios values(:rut,:nombre,:usuario,:contrasena,:correo)');
			$insert->bindValue('rut',$user->getRut());
			$insert->bindValue('nombre',$user->getNombre());
			$insert->bindValue('usuario',$user->getUsuario());
			$insert->bindValue('contrasena',$user->getContrasena());
			$insert->bindValue('correo',$user->getCorreo());
			$insert->execute();
 
		}
 
		// método para mostrar usuarios
		public function mostrar(){
			$db=Db::conectar();
			$listaUsuarios=[];
			$select=$db->query('SELECT * FROM usuarios');
 
			foreach($select->fetchAll() as $user){
				$myUsuario= new user();
				$myUsuario->setRut($user['rut']);
				$myUsuario->setNombre($user['nombre']);
				$myUsuario->setUsuario($user['usuario']);
				$myUsuario->setContrasena($user['contrasena']);
				$myUsuario->setCorreo($user['correo']);
				$listaUsuarios[]=$myUsuario;
			}
			return $listaUsuarios;
		}
 
		// método para eliminar user
		public function eliminar($rut){
			$db=Db::conectar();
			$eliminar=$db->prepare('DELETE FROM usuarios WHERE rut=:rut');
			$eliminar->bindValue('rut',$rut);
			$eliminar->execute();
		}
 
		// método para buscar usuario
		public function obtenerUsuario($rut){
			$db=Db::conectar();
			$select=$db->prepare('SELECT * FROM usuarios WHERE rut=:rut');
			$select->bindValue('rut',$rut);
			$select->execute();
			$user=$select->fetch();
			$myUsuario= new user();
			$myUsuario->setRut($user['rut']);
			$myUsuario->setNombre($user['nombre']);
			$myUsuario->setUsuario($user['usuario']);
			$myUsuario->setContrasena($user['contrasena']);
			$myUsuario->setCorreo($user['correo']);
			return $myUsuario;
		}
 
		// método para actualizar user
		public function actualizar($user){
			$db=Db::conectar();
			$actualizar=$db->prepare('UPDATE usuarios SET rut=:rut, nombre=:nombre, usuario=:usuario, contrasena=:contrasena, correo=:correo  WHERE rut=:rut');
			$actualizar->bindValue('rut',$user->getRut());
			$actualizar->bindValue('nombre',$user->getNombre());
			$actualizar->bindValue('usuario',$user->getUsuario());
			$actualizar->bindValue('contrasena',$user->getContrasena());
			$actualizar->bindValue('correo',$user->getCorreo());
			$actualizar->execute();
		}
	}
?>