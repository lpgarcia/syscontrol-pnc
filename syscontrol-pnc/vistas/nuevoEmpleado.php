<?php
	session_start();
	if(isset($_SESSION['usuario']) and $_SESSION['usuario'] == 'admin'){

 ?>

<!-- BLOQUE PARA LLENAR LOS SELECT -->
<?php
	require_once "../clases/Conexion.php";
	$c = new conectar();
	$conexion = $c->conexion();
//consultas para select
	$consultaPuesto = "SELECT id_Puesto, Puesto
										FROM Puesto";
	$consultaGrado = "SELECT id_Grado, Grado
										FROM GradoJerarquico";
	$consultaSede = "SELECT id_Destino, Sede
										FROM Destino";
//query de la base de datos
	$result = mysqli_query($conexion, $consultaPuesto);
	$resutlGrado = mysqli_query($conexion, $consultaGrado);
	$resultSede = mysqli_query($conexion, $consultaSede);
 ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Nuevo Empleado</title>
		<?php require_once "menu.php"; ?>
	</head>
	<body>
	<div class="conteiner">
		<form id="formEmpleados" class="">



<!-- fila para titulo -->
			<div class="row">
				<div class="col-sm-4"></div>
				<div class="col-sm-4">
					<h1>INGRESAR PERSONAL</h1>
					<br><br>
				</div>
				<div class="col-sm-4"></div>
			</div>


<!-- fila para primera parte de formulario -->
			<div class="row">
				<div class="col-sm-2"></div>

				<div class="col-sm-3">
					<hr>
					<h4>INFORMACION PERSONAL</h4>
					<!-- formulario 1 -->
					<div class="form-group">
	  		      <label for="">Primer Nombre</label>
	  		      <input type="text" class="form-control input-sm" name="Nombre1" id="Nombre1">

	  				<label for="">Primer Apellido</label>
	  				<input type="text" class="form-control input-sm" name="Apellido1" id="Apellido1">

	  				<label for="">Genero</label>
	  		      <select id="generoSelect" name="generoSelect" class="form-control input-sm">
	  		        <option value="M">M</option>
	  				  <option value="F">F</option>
	  		      </select>

	  				<label for="">DPI</label>
	  				<input type="text" class="form-control input-sm" name="Dpi" id="Dpi">

	  				<label for="">Originario</label>
	  				<input type="text" class="form-control input-sm" name="Originario" id="Originario">

	  				<label for="">Nombre Mama</label>
	  				<input type="text" class="form-control input-sm" name="NombreMa" id="NombreMa">
	  		    </div>

					<!-- fin formulario 1 -->
				</div>

				<div class="col-sm-3">
				<hr>
				<br><br>
		    <div class="form-group">
				 <label for="">Segundo Nombre</label>
				 <input type="text" class="form-control input-sm" name="Nombre2" id="Nombre2">

				 <label for="">Segundo Apellido</label>
				 <input type="text" class="form-control input-sm" name="Apellido2" id="Apellido2">

				 <label for="">NIT</label>
				 <input type="text" class="form-control input-sm" name="Nit" id="Telefono">

				 <label for="">Telefono</label>
				 <input type="text" class="form-control input-sm" name="Telefono" id="Telefono">
		    </div>

						<!-- fin de formulario -->
				</div>

				<div class="col-sm-3">
					<hr>
					<br><br>
					<!-- formulario 2 -->
					<div class="form-group">
					 <label for="">Tercer Nombre</label>
	  				 <input type="text" class="form-control input-sm" name="Nombre3" id="Nombre3" placeholder="---">

	  				 <label for="">Tercer Apellido</label>
	  				 <input type="text" class="form-control input-sm" name="Apellido3" id="Apellido3" placeholder="---">

	  				 <label for="">IGSS</label>
	  				 <input type="text" class="form-control input-sm" name="Igss" id="Igss">

	  				 <label for="">Fecha Nacimiento</label>
	  				 <input type="text" class="form-control input-sm" name="FechaNacimiento" id="FechaNacimiento">


						<label for="">Grado de Estudio</label>
						<input type="text" class="form-control input-sm" name="GradoEstudio" id="GradoEstudio">

						<label for="">Nombre Papa</label>
						<input type="text" class="form-control input-sm" name="NombrePa" id="NombrePa">
					</div>
					<!-- fin formulario 3 -->
				</div>
			   <div class="col-sm-3"></div>
			</div>


<!-- fila para segunda parte del formulario -->
			<div class="row">
				<br>
				<div class="col-sm-2">

				</div>

				<div class="col-sm-3">
					<hr>
					<h4>RECIDENCIA</h4>
					<label for="">Departamento</label>
					<input type="text" class="form-control input-sm" name="Departamento" id="Departamento">
				</div>

				<div class="col-sm-3">
					<hr>
					<br><br>
					<label for="">Municipio</label>
					<input type="text"class="form-control input-sm" name="MunicipioAldea" id="MunicipioAldea">
				</div>

				<div class="col-sm-3">
					<hr>
					<br><br>
					<label for="">Aldea</label>
					<input type="text"  class="form-control input-sm" name="Aldea" id="Aldea">
				</div>

				<div class="col-sm-2"></div>

			</div>

<!-- fila para Tercera parte del formulario -->
						<div class="row">
							<br>
							<div class="col-sm-2">

							</div>

							<div class="col-sm-3">
								<hr>
								<h4>INFORMACION LABORAL</h4>

								<label for="">NIP</label>
								<input type="text" class="form-control input-sm" name="Nip" id="Nip">

								<label for="">Fecha de Ingreso Comiaria</label>
								<input type="text" class="form-control input-sm" name="FechaIngreso" id="FechaIngreso">

								<label for="">Fecha Graduacion</label>
								<input type="text" class="form-control input-sm" name="FechaGraduacion" id="FechaGraduacion">

								<label for="">Puesto</label>
								<select class="form-control input-sm" name="puestoSelect" id="puestoSelect">
									<option value="A">Seleccione un Puesto</option>
<?php while($verPuesto=mysqli_fetch_row($result)):?>
									<option value="<?php echo $verPuesto[0] ?> "> <?php echo $verPuesto[1] ?> </option>
<?php endwhile; ?>
								</select>

							</div>

							<div class="col-sm-3">
								<hr>
								<br><br>
								<label for="">Partida Presupuestaria</label>
								<input type="text"class="form-control input-sm" name="PartidaPresupuestaria" id="PartidaPresupuestaria">

								<label for="">Tiempo de Servicio</label>
								<input type="text" class="form-control input-sm" name="TiempoServicio" id="TiempoServicio">

								<label for="">Sede</label>
								<select class="form-control input-sm" name="sedeSelect" id="sedeSelect">
									<option value="A">Seleccione una Sede</option>
<?php
while($verSede=mysqli_fetch_row($resultSede)):
?>
									<option value="<?php echo  $verSede[0] ?>"> <?php echo $verSede[1] ?> </option>

<?php endwhile; ?>

								</select>

								<label for="">Fecha de Alta</label>
								<input type="text" class="form-control input-sm" name="FechaAlta" id="FechaAlta">
							</div>

							<div class="col-sm-3">
								<hr>
								<br><br>
								<label for="">Resolucion</label>
								<input type="text"  class="form-control input-sm" name="Resolucion" id="Resolucion">

								<label for="">Promocion</label>
								<input type="text" class="form-control input-sm" name="Promocion" id="Promocion">


								<label for="">Grado Gerarquico</label>
								<select class="form-control input-sm" name="gradoGerarquicoSelect" id="gradoGerarquicoSelect">
									<option value="A">Seleccione un Grado</option>
<?php while($verGrado = mysqli_fetch_row($resutlGrado)): ?>
									<option value="<?php echo $verGrado[0] ?>"> <?php echo $verGrado[1] ?> </option>
<?php endwhile; ?>

								</select>

								<label for="">Fecha</label>
								<input type="text" class="form-control input-sm" name="" id="">
							</div>

							<div class="col-sm-2"></div>

						</div>

<!-- fila para los botones -->
						<div class="row">
							<br><br>
							<div class="col-sm-3"></div>
							<div class="col-sm-4">
								<span class="btn btn-default" id="empleadoRegistro">Registrar Empleado</span>
							</div>
							<div class="col-sm-4"></div>
						</div>
						<br><br>
      </form>
	</div>
	</body>
</html>

<?php
}else{
	header('location:../index.php');
}
 ?>
