<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Syscontrol-pnc</title>
		<link rel="stylesheet" href="librerias/bootstrap/css/bootstrap.css">
		<script src="librerias/jquery-3.2.1.min.js"></script>
	</head>
	<body style="background-color: black">
		<br><br><br><br>
		<div class="container">
			<div class="row">
				<div class="col-sm-4"></div>
				<div class="col-sm-4">
					<div class="panel panel-primary">
						<div class="panel panel-heading">
								Syscontrol-PNC
						</div>
						<div class="panel panel-body">
							<p>
								<img src="img/pnc.jpg"  height="190px">
							</p>
							<form id="formLogin">
									<label for="">Usuario</label>
									<input type="text" class="form-control input-sm" name="Usuario" id="Usuario">
									<label for="">Contraseña</label>
									<input type="password" class="form-control input-sm"name="Password" id="Password">
									<p></p>
									<span class="btn btn-primary btn-sm">Login</span>
									<a href="registro.php" class="btn btn-danger btn-sm">Registrar</a>
							</form>
						</div>
					</div>
				</div>
				<div class="col-sm-4"></div>
			</div>
		</div>
	</body>
</html>
