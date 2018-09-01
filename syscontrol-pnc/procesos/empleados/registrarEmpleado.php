<?php
	session_start();
	require_once "../../clases/Conexion.php";
	require_once "../../clases/Empleados.php";

  $id_Empleado = $_POST[''];
  $Nombre1= $_POST['Nombre1'];
  $Nombre2= $_POST['Nombre2'];
  $Nombre3 = $_POST['Nombre3'];
  $Apellido1 = $_POST['Apellido1'];
  $Apellido2 = $_POST['Apellido2'];
  $Apellido3 = $_POST['Apellido3'];
  $Genero = $_POST['generoSelect'];
  $Nit = $_POST['Nit'];
  $Igss = $_POST['Igss'];
  $Dpi = $_POST['Dpi'];
  $Nip = $_POST['Nip'];
  $Originario = $_POST['Originario'];
  $Partida_pros = $_POST['PartidaPresupuestaria'];
  $Telefono = $_POST['Telefono'];
  $Fecha_nac= $_POST['FechaNacimiento'];
  $Grado_est = $_POST['GradoEstudio'];
  $Nom_ma = $_POST['NombreMa'];
  $Nom_pa = $_POST['NombrePa'];
  $Resolucion = $_POST['Resolucion'];
  $Tiemposervicio = $_POST['TiempoServicio'];
  $Fecha_altacomis= $_POST['FechaAlta'];
  $Dar_baja= 0;
  $Profesion_idProfesion= $_POST['3'];
  $Aldea_idAldea= $_POST['Aldea'];

$datos = array(
	$Nombre1,
	$Nombre2,
	$Nombre3,
	$Apellido1,
	$Apellido2,
	$Apellido3,
	$Genero,
	$Nit,
	$Igss,
	$Dpi,
	$Nip,
	$Originario,
	$Partida_pros,
	$Telefono,
	$Fecha_nac,
	$Grado_est,
	$Nom_ma,
	$Nom_pa,
	$Resolucion,
	$Tiemposervicio,
	$Fecha_altacomis,
	$Dar_baja,
	$Profesion_idProfesion,
	$Aldea_idAldea
);

	$obj = new empleados();
	echo $obj->registroEmpleado($datos);


 ?>
