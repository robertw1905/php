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
					{if $dato!=NULL}
					    {if count($dato)>0}
							 {foreach key=key item=item from=$dato}
					       	<tr>
					       		<td><input type="hidden" name ="id" value="{$item['id']}">
					       			<input type="hidden" name ="modificar" value="1">
					       			<input class="form-control" type="text" name ="nombre" value="{$item['nombres']}"/></td>
								<td><input class="form-control" type="text" name ="apellido" value="{$item['apellidos']}"/></td>
								<td><input class="form-control" type="email" name ="email" value="{$item['correo']}"/></td>
								<td><input class="form-control" type="text" name ="pass" value="{$item['contrasena']}"/></td>
							{/foreach}
					       
					    {else}
					    {/if}
					{/if}
					</table>
				</div>
				<center><input class="btn btn-primary" type="submit" value="Enviar"><a href="index.php?modo=usuarios" class="btn btn-default pull-right">Inicio</a></center>
			</form>
		</div>
	</div>
	<script src="includes/js/jquery-1.11.3.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>