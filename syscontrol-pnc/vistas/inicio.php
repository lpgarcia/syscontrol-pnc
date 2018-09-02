<?php
	session_start();
	if(isset($_SESSION['usuario'])){

 ?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
		<?php require_once "menu.php"; ?>
	</head>
	<body>
		<br><br><br>
		<p></p>
		<div class="container">
			<div class="row">
				<div class="col-sm-4">
					MISION
					“Proteger la vida, la integridad física, la seguridad de las personas y sus
					bienes, el libre ejercicio de los derechos y libertades, así como prevenir,
					investigar y combatir el delito preservando el orden y la seguridad pública”.				</div>

				<div class="col-sm-4">
					<h1>SYSCONTROL-PNC</h1>
				</div>

				<div class="col-sm-4">
					VISION
“Ser una institución altamente calificada con vocación y reconocida excelencia,
conformada por personal con sólida formación humana, altas competencias,
respeto al ordenamiento jurídico y derechos humanos, con capacidad de generar
corresponsabilidad comunitaria para el logro de la convivencia pacífica.
				</div>
			</div>

			<br><br><br>
			<div class="row">
				<div class="col-sm-4">

				</div>

				<div class="col-sm-4">
					para agregar mas informacion
				</div>

				<div class="cols-sm-4">

				</div>
			</div>

		</div>
	</body>
</html>

<?php
}else{
	header('location:../index.php');
}
 ?>
