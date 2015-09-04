<?php
include ('includes/comunes.php');
include ('includes/class.Conexion.php');

$modo = isset($_GET['modo']) ? $_GET['modo'] : 'default';
	switch ($modo){
		case 'login':
			if (isset($_POST['login'])){
				if (!empty($_POST['user']) and !empty($_POST['pass'])) {
					include('includes/class.Acceso.php');
					$login = new Acceso($_POST['user'],null,null,$_POST['pass'],null);
					$url = $login->Login();
					if($url == "public/usuarios.tpl"){
						$bd = new Conexion();
						$dato = $bd->consulta("select * from usuario_table");
						$template = new Smarty(1);
						$template->assign(array('resultado' => $dato));
						$template->display('public/usuarios.tpl');
					}else{
						header('location: index.php?error=datos_incorrectos');
					}
					

				}else{
					header('location: index.php?error=campos_vacios'); 
				}
			}else{
				header('location: index.php');
			}
			break;
		case 'usuarios':
			$bd = new Conexion();
			$dato = $bd->consulta("select * from usuario_table");
			$template = new Smarty(1);
			$template->assign(array('resultado' => $dato));
			$template->display('public/usuarios.tpl');
			break;
		case 'registro':
			if (isset($_POST['registro'])){
				if(!empty($_POST['nombre']) and !empty($_POST['apellido']) and !empty($_POST['email']) and !empty($_POST['pass'])){
					include('includes/class.Acceso.php');
					$registro = new Acceso($_POST['nombre'],$_POST['apellido'],$_POST['email'], $_POST['pass'],null);
					$url = $registro->Registro();
					if($url == "public/usuarios.tpl"){
						$bd = new Conexion();
						$dato = $bd->consulta("select * from usuario_table");
						$template = new Smarty(1);
						$template->assign(array('resultado' => $dato));
						$template->display('public/usuarios.tpl');
					}
				}else {
					header('location: index.php?modo=registro&error=campos_vacios');	
				}
			}else if (isset($_GET['error']) and $_GET['error'] == 'campos_vacios'){
				$template = new Smarty(1);
				$template->assign(array('error' => 'ERROR: Debes llenar todos los campos para poder registrarte'));
				$template->display('public/registro.tpl');	
			}else if (isset($_GET['error']) and $_GET['error'] == 'usuario_usado'){
				$template = new Smarty(1);
				$template->assign(array('error' => 'ERROR: El usuario ingresado ya existe'));
				$template->display('public/registro.tpl');	
			}else if (isset($_GET['error']) and $_GET['error'] == 'email_usado'){
				$template = new Smarty(1);
				$template->assign(array('error' => 'ERROR: El email ingresado ya existe'));
				$template->display('public/registro.tpl');	
			}else if (isset($_GET['error']) and $_GET['error'] == 'email_usuario_usado'){
				$template = new Smarty(1);
				$template->assign(array('error' => 'ERROR: El email y el usuario ingresado ya existe'));
				$template->display('public/registro.tpl');	
			}else{
				$template = new Smarty(1);
				$template->display('public/registro.tpl');	
			}
			
			break;
		case 'modificar':
			if(isset($_POST['modificar'])){
				include('includes/class.Acceso.php');
				$registro =new Acceso($_POST['nombre'],$_POST['apellido'],$_POST['email'],$_POST['pass'],$_POST['id']);
				$registro->modificar();
				$bd = new Conexion();
				$dato = $bd->consulta("select * from usuario_table");
				$template = new Smarty(1);
				$template->assign(array('resultado' => $dato));
				$template->display('public/usuarios.tpl');
			}else{
				$bd = new Conexion();
				$dato = $bd->consulta("select * from usuario_table where id = '".$_GET['id']."';");
				$template = new Smarty(1);
				$template->assign(array('dato' => $dato));
				$template->display('public/modificar.tpl');	
				
			}
			break;
		case 'borrar':
				include('includes/class.Acceso.php');
				$registro =new Acceso(null,null,null,null,$_GET['id']);
				$registro->borrar($_GET['id']);
				$bd = new Conexion();
				$dato = $bd->consulta("select * from usuario_table");
				$template = new Smarty(1);
				$template->assign(array('resultado' => $dato));
				$template->display('public/usuarios.tpl');
			break;
		case 'claveperdida':
			echo 'clave perdida';
			break;
		default:
			if(isset($_GET['error']) and $_GET['error']=='campos_vacios'){
				$template = new Smarty(1);
				$template->assign(array('error' => 'ERROR: Debes llenar todos los campos.'));
				$template->display('public/index.tpl');	
			}else if (isset($_GET['error']) and $_GET['error']=='datos_incorrectos'){
				$template = new Smarty(1);
				$template->assign(array('error' => 'ERROR: Datos Incorrectos.'));
				$template->display('public/index.tpl');	
			}else if (isset($_GET['error']) and $_GET['error']=='acceso'){
				$template = new Smarty(1);
				$template->assign(array('error' => 'La sessión a caducado o no has iniciado sesión.'));
				$template->display('public/index.tpl');	
			}else{
				$template = new Smarty(1);
				$bd = new Conexion();
				$dato = $bd->consulta("select count(*) total from usuario_table");
				$template->assign(array('cero' => $dato[0]['total']));
				$template->display('public/index.tpl');	
			}
			break;
	}

	
?>
