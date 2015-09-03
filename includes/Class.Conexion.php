<?php
class Conexion extends mysqli{

	public function __construct(){
		parent::__construct('p:mysql7.000webhost.com','a2431727_root','abc123','a2431727_usuario');
		$this->query("SET NAMES 'utf8';");
		$this->connect_errno ? die('Error con la conexión') : $x = 'Conectado';
		//echo $x;
		unset($x);
	}

	public function recorrer($y){
		return mysqli_fetch_array($y);
	}

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
			$num_rows= mysqli_num_rows($resultado);
			for($i=0;$i<$num_rows;$i++){
				$row = mysqli_fetch_assoc($resultado);
				array_push($valores, $row);
			}
			return $valores;
		}
	}

}
?>