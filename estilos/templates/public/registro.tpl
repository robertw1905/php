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
			{if isset($error)}
				<div id="error" class="alert alert-danger" >
				{$error}
				</div>
			{/if}
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
	<script src="includes/js/jquery-1.11.3.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>