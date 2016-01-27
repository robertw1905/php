<?php

class Conexion{ // ConexionPGSQL

//declaración de variables

	public $host; // para conectarnos a localhost o el ip del servidor de postgres

	public $db; // seleccionar la base de datos que vamos a utilizar

	public $user; // seleccionar el usuario con el que nos vamos a conectar

	public $pass; // la clave del usuario

	public $conexion;  //donde se guardara la conexión

	public $url; //dirección de la conexión que se usara para destruirla mas adelante

	public $conn;

//creación del constructor

	function __construct(){

	}

//creación de la función para cargar los valores de la conexión.

	public function cargarValores(){

		$this->host='localhost';

		$this->db='postgres';

		$this->user='postgres';

		$this->pass='123456';

		$this->conexion="host='$this->host' dbname='$this->db' user='$this->user' password='$this->pass'";

}

//función que se utilizara al momento de hacer la instancia de la clase

	function conectar(){

		$this->cargarValores();

		$this->url=pg_connect($this->conexion);

		return true;

	}

// función para realizar las consultas.

	public function consulta($consulta)
	{
		$valores = array();
		$resultado = $this->query($consulta);

		if(!$resultado)
		{
			throw new Exception("No Funciona la Consulta. El Error es el siguiente: ".$this->error);
		}
		else
		{
			$num_rows= pg_numrows($resultado);
			for($i=0;$i<$num_rows;$i++){
				$row = pg_fetch_assoc($resultado);
				array_push($valores, $row);
			}
			return $valores;
		}
	}

//función para destruir la conexión.

	function destruir(){

		pg_close($this->url);

	}

	function query($sql)
	{
		return pg_query($sql);
	}

	public function recorrer($y){
		return pg_fetch_array($y);
	}

}

//instanciación de la clase conexión a postgresql.

$conexion = new Conexion();

$conexion->conectar();

if($conexion->conectar()==true){

	//echo "conexion exitosa";

}else{

	echo "no se pudo conectar";

}

?>