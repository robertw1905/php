<?php

class Acceso{
	protected $user;
	protected $pass;
	protected $email;
	protected $apellido;
	protected $id;

	public function __construct($usuario,$apellido,$email,$password,$id){
		$this->user = $usuario;
		$this->pass = $password;
		$this->email = $email;
		$this->apellido = $apellido;
		$this->id = $id;
	}
	public function Login(){
		$db = new Conexion();
		$sql = $db->query("SELECT nombres, contrasena FROM usuario_table
		WHERE nombres = '$this->user' AND contrasena = '$this->pass';");
		$dato = $db->recorrer($sql);
		if (strtolower($dato['nombres']) == strtolower($this->user) and $dato['contrasena'] == $this->pass){
			session_start();
			$_SESSION['user']= $this->user;
			return "public/usuarios.tpl";
		}else{
			return "index.php?error=datos_incorrectos";#aqui
		}
	}

	public function Registro(){

		$db = new Conexion();
		$sql = $db->query("SELECT nombres, correo FROM usuario_table 
			WHERE nombres = '$this->user' OR correo = '$this->email';");
		$existe = $db->recorrer($sql);

		if (strtolower($existe['nombres'])!= strtolower($this->user) and strtolower($existe['correo']) != strtolower($this->email)){
			$sql = $db->query("INSERT INTO usuario_table (nombres,apellidos,contrasena,correo) VALUES ('$this->user','$this->apellido',
			'$this->pass','$this->email');");
			session_start();
			$_SESSION['user'] = $this->user;
			return "public/usuarios.tpl";
		}else if(strtolower($existe['nombres']) == strtolower($this->user) and strtolower($existe['correo']) != strtolower($this->email)){
			header('location: index.php?modo=registro&error=usuario_usado');
		}else if(strtolower($existe['correo']) == strtolower($this->email) and strtolower($existe['nombres']) != strtolower($this->user)){
			header('location: index.php?modo=registro&error=email_usado');
		}else if (strtolower($existe['nombres'])== strtolower($this->user) and strtolower($existe['correo']) == strtolower($this->email)){
			header('location: index.php?modo=registro&error=email_usuario_usado');
		}
		

	}

	public function modificar(){
		$bd = new Conexion();
		$bd->query("update usuario_table set nombres='$this->user',apellidos='$this->apellido',correo='$this->email',contrasena='$this->pass'
			where id = '$this->id';");
	}

	public function borrar(){
		$bd = new Conexion();
		$bd->query("delete from usuario_table where id = '$this->id';");
	}
}
?>