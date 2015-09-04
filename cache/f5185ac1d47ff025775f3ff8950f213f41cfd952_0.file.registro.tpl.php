<?php /* Smarty version 3.1.27, created on 2015-09-04 22:00:16
         compiled from "C:\xampp\htdocs\php\estilos\templates\public\registro.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1166555e9f850b5a406_24524781%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f5185ac1d47ff025775f3ff8950f213f41cfd952' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php\\estilos\\templates\\public\\registro.tpl',
      1 => 1441349581,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1166555e9f850b5a406_24524781',
  'variables' => 
  array (
    'error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_55e9f850c0a082_27031087',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55e9f850c0a082_27031087')) {
function content_55e9f850c0a082_27031087 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1166555e9f850b5a406_24524781';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset ="UTF-8">
	<title>Registro</title>
	<meta name="viewport" content="width=device-width, user-sclable=no, initial-scale=1.0, maximun-sclale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<div align="center"><h3>Usuarios del Sistema</h3>
			<?php if (isset($_smarty_tpl->tpl_vars['error']->value)) {?>
				<div id="error" class="alert alert-danger" >
				<?php echo $_smarty_tpl->tpl_vars['error']->value;?>

				</div>
			<?php }?>
			<form action="index.php?modo=registro" method="post">
				<div class="table-responsive">
					<table border="1" class="table table-bordered table-hover">
						<tr><th colspan="6" class="text-center">Registro</th></tr>
						<tr class="success">
							<td><label>Nombre</label></td>
							<td><label>Apellido</label></td>
							<td><label>Email</label></td>
							<td><label>Password</label></td>
						</tr>
						<tr>
							<td><input class="form-control" type="text" name="nombre">
								<input type="hidden" name="registro" value="1"></td>
							<td><input class="form-control" type="text" name="apellido"></td>
							<td><input class="form-control" type="email" name="email"></td>
							<td><input class="form-control" type="password" name="pass"></td>
						</tr>
					</table>
				</div>
				<center><input class="btn btn-primary" type="submit" value="Enviar"/><a href="index.php?modo=usuarios" class="btn btn-default pull-right">Inicio</a><center>
			</form>
		</div>
	</div>
	<?php echo '<script'; ?>
 src="includes/js/jquery-1.11.3.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"><?php echo '</script'; ?>
>
</body>
</html><?php }
}
?>