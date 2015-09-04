<?php /* Smarty version 3.1.27, created on 2015-09-04 08:17:42
         compiled from "C:\xampp\htdocs\php\estilos\templates\public\usuarios.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2892755e937869df589_63256404%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e233b5de57fec36cf56f64492b6550f8229e5aa1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php\\estilos\\templates\\public\\usuarios.tpl',
      1 => 1441347460,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2892755e937869df589_63256404',
  'variables' => 
  array (
    'resultado' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_55e93786ae8f84_04668087',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55e93786ae8f84_04668087')) {
function content_55e93786ae8f84_04668087 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2892755e937869df589_63256404';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset ="UTF-8">
	<title>Capa</title>
	<meta name="viewport" content="width=device-width, user-sclable=no, initial-scale=1.0, maximun-sclale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
</head>
<body>
	<div align="center"><h3>Usuarios del Sistema</h3>
			<div class="container">
				<form action="index.php?modo=registro" method="post">
					<div class="table-responsive">
						<table border = "1" class="table table-bordered table-hover">
							<tr class="success"><th>Nombre</th><th>Apellido</th><th>Email</th><th>Acciones</th></tr>
							<?php if ($_smarty_tpl->tpl_vars['resultado']->value != NULL) {?>
							    <?php if (count($_smarty_tpl->tpl_vars['resultado']->value) > 0) {?>
							       	<?php
$_from = $_smarty_tpl->tpl_vars['resultado']->value;
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
"><?php echo $_smarty_tpl->tpl_vars['item']->value['nombres'];?>
</td>
											<td><?php echo $_smarty_tpl->tpl_vars['item']->value['apellidos'];?>
</td>
											<td><?php echo $_smarty_tpl->tpl_vars['item']->value['correo'];?>
</td>
											<td><a href="index.php?modo=modificar&id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">Modificar</a><br/>
											<a href="index.php?modo=borrar&id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">Borrar</a></td>
										</tr>
							        <?php
$_smarty_tpl->tpl_vars['item'] = $foreach_item_Sav;
}
?>
							    <?php } else { ?>
					    		<?php }?>
							<?php }?>
						</table>
					</div>
					<center><input class="btn btn-primary" type="submit" value="Registrar"></center>
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