<?php /* Smarty version 3.1.27, created on 2015-09-04 21:59:46
         compiled from "C:\xampp\htdocs\php\estilos\templates\public\index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1528855e9f832468e88_09220205%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4ab9be269b6aca00255040d522c493c633febbb9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php\\estilos\\templates\\public\\index.tpl',
      1 => 1441349019,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1528855e9f832468e88_09220205',
  'variables' => 
  array (
    'error' => 0,
    'cero' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_55e9f83255b184_02487688',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55e9f83255b184_02487688')) {
function content_55e9f83255b184_02487688 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1528855e9f832468e88_09220205';
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset ="UTF-8">
	<title>Login</title>
	<meta name="viewport" content="width=device-width, user-sclable=no, initial-scale=1.0, maximun-sclale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
</head>
<body>
	<div align="center"><h3>Login</h3>
		<div class="container">
			<?php if (isset($_smarty_tpl->tpl_vars['error']->value)) {?>
			<div id="error" class="alert alert-danger" >
				<?php echo $_smarty_tpl->tpl_vars['error']->value;?>

			</div>
			<?php }?>
			<form action="index.php?modo=login" method="POST">
				<div class="table-responsive">
					<table class="table table-bordered table-hover">
						<tr>
							<td class="success text-center"><label for="l_user">Usuario:</label></td>
							<td><input type="text" class="form-control" name="user" placeholder="Usuario:"/></td>
						</tr>
						<tr>
							<td class="success text-center"><label for="l_pass">contrase&ntildea:</label></td>
							<td><input type="password" class="form-control" name="pass" placeholder="Contraseña:"/>
							<input type="hidden"  name="login" value="1" /></td>
						</tr>
						<tr>
							<td colspan="2"><center><input type="submit" class="btn btn-primary" value="Iniciar Sesión" /></center></td>
						</tr>
					</table>
				</div>
			</form>
			<?php if ($_smarty_tpl->tpl_vars['cero']->value == 0) {?>
			<div class="alert alert-success">
				<a href="index.php?modo=registro">Registrate</a>
			</div>
			<?php }?>
		</div>
	</div>
	<?php echo '<script'; ?>
 src="includes/js/jquery-1.11.3.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"><?php echo '</script'; ?>
>
</body>
</html>
<?php }
}
?>