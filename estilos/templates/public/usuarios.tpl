<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset ="UTF-8">
	<title>Usuarios</title>
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
							{if $resultado!=NULL}
							    {if count($resultado)>0 }
							       	{foreach key=key item=item from=$resultado}
							       		<tr>
							       			<td><input type="hidden" name ="id" value="{$item['id']}">{$item['nombres']}</td>
											<td>{$item['apellidos']}</td>
											<td>{$item['correo']}</td>
											<td><a href="index.php?modo=modificar&id={$item['id']}">Modificar</a><br/>
											<a href="index.php?modo=borrar&id={$item['id']}">Borrar</a></td>
										</tr>
							        {/foreach}
							    {else}
					    		{/if}
							{/if}
						</table>
					</div>
					<center><input class="btn btn-primary" type="submit" value="Registrar">
						<a href="index.php" class="btn btn-default pull-right">Salir</a></center>
				</form>
			</div>
</div>
	<script src="includes/js/jquery-1.11.3.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>