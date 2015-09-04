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
			{if isset($error)}
			<div id="error" class="alert alert-danger" >
				{$error}
			</div>
			{/if}
			<form action="index.php?modo=login" method="POST">
				<div class="table-responsive">
					<table class="table table-bordered table-hover">
						<tr>
							<td class="success text-center"><label for="l_user">User:</label></td>
							<td><input type="text" class="form-control" name="user" placeholder="Usuario:"/></td>
						</tr>
						<tr>
							<td class="success text-center"><label for="l_pass">Pass:</label></td>
							<td><input type="password" class="form-control" name="pass" placeholder="Contraseña:"/>
							<input type="hidden"  name="login" value="1" /></td>
						</tr>
						<tr>
							<td colspan="2"><center><input type="submit" class="btn btn-primary" value="Iniciar Sesion" /></center></td>
						</tr>
					</table>
				</div>
			</form>
			{if $cero eq 0}
			<div class="alert alert-success">
				<a href="index.php?modo=registro">Registrate</a>
			</div>
			{/if}
		</div>
	</div>
	<script src="includes/js/jquery-1.11.3.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>
