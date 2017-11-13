<?php
	class user{
		private $nombre;
		private $rut;
		private $usuario;
		private $contrasena;
		private $correo;
 
		function __construct(){}
 
		public function getNombre(){
			return $this->nombre;
		}
 
		public function setNombre($nombre){
			$this->nombre = $nombre;
		}
  
		public function getRut(){
			return $this->rut;
		}
 
		public function setRut($rut){
			$this->rut = $rut;
		}
 
		public function getUsuario(){
			return $this->usuario;
		}
 
		public function setUsuario($usuario){
			$this->usuario = $usuario;
		}
		public function getContrasena(){
			return $this->contrasena;
		}
 
		public function setContrasena($contrasena){
			$this->contrasena = $contrasena;
		}

		public function getCorreo(){
			return $this->correo;
		}
 
		public function setCorreo($correo){
			$this->correo = $correo;
		}
	}
?>