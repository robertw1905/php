<?php /* Smarty version 3.1.27, created on 2015-09-04 08:18:27
         compiled from "C:\xampp\htdocs\php\estilos\templates\public\modificar.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:3246055e937b3704e05_32232985%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8e4e5ce419fda30890734448c6ae2ad3b09ba17d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php\\estilos\\templates\\public\\modificar.tpl',
      1 => 1441347497,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3246055e937b3704e05_32232985',
  'variables' => 
  array (
    'dato' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_55e937b380e801_51378449',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55e937b380e801_51378449')) {
function content_55e937b380e801_51378449 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '3246055e937b3704e05_32232985';
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset ="UTF-8">
	<title>Modificar</title>
	<meta name="viewport" content="width=device-width, user-sclable=no, initial-scale=1.0, maximun-sclale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
</head>
<body>
	<div align="center"><h3>Modificar</h3>
		<div class="container">
			<form action="index.php?modo=modificar" method="post">
				<div class="table-responsive">
					<table border = "1" class="table table-bordered table-hover">
						<tr><th colspan="4" class="text-center">Modificar Información</th></tr>
						<tr class="success"><th>Nombre</th><th>Apellido</th><th>Email</th><th>Contraseña</th></tr>
					<?php if ($_smarty_tpl->tpl_vars['dato']->value != NULL) {?>
					    <?php if (count($_smarty_tpl->tpl_vars['dato']->value) > 0) {?>
							 <?php
$_from = $_smarty_tpl->tpl_vars['dato']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['item']->_loop = false;
$_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
$foreach_item_Sav = $_smarty_tpl->tpl_vars['item'];
?>
					       	<tr>
					       		<td><input type="hidden" name ="id" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">
					       			<input type="hidden" name ="modificar" value="1">
					       			<input class="form-control" type="text" name ="nombre" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['nombres'];?>
"/></td>
								<td><input class="form-control" type="text" name ="apellido" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['apellidos'];?>
"/></td>
								<td><input class="form-control" type="email" name ="email" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['correo'];?>
"/></td>
								<td><input class="form-control" type="text" name ="pass" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['contrasena'];?>
"/></td>
							<?php
$_smarty_tpl->tpl_vars['item'] = $foreach_item_Sav;
}
?>
					       
					    <?php } else { ?>
					    <?php }?>
					<?php }?>
					</table>
				</div>
				<center><input class="btn btn-primary" type="submit" value="Enviar"><a href="index.php?modo=usuarios" class="btn btn-default pull-right">Inicio</a></center>
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