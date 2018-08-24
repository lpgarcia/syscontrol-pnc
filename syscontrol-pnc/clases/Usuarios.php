<?php

	class usuarios{

		public function registroUsuario($datos){

			$c = new conectar();
         $conexion= $c->conexion();

        $sql = "INSERT INTO Usuario(id_Usuario,
			  Usuario,
			  Contrasenia,
			  Es_admin,
			  Nombre,
			  Correo,
			  Empleado_id_Empleado) VALUES (NULL,
			  											  '$datos[0]',
														  '$datos[1]',
														  '$datos[2]',
														  '$datos[3]',
														  '$datos[4]',
														  '$datos[5]')";

			$query = mysqli_query($conexion,$sql);
			return $query;
      }

		public function loginUser($datos){
		  $c = new conectar();
  		  $conexion = $c->conexion();

		  $_SESSION['usuario'] = $datos[0];
		  $_SESSION['iduser'] = self::obtenerId($datos);
		  $pass = sha1($datos[1]);
		  //$pass = $datos[1];
		  $sql = "SELECT * FROM  Usuario
		  						WHERE Usuario = '$datos[0]'
								AND Contrasenia = '$pass'";

		  $result = mysqli_query($conexion,$sql);
		  if (mysqli_num_rows($result) > 0) {
		  	 return 1;
		  } else {
		  	 return 0;
		  }
		}

		public function obtenerId($datos){
			$c = new conectar();
   		$conexion = $c->conexion();

			$pass = sha1($datos[1]);
			$sql = "SELECT id_Usuario
					  FROM Usuario
					  WHERE Usuario = '$datos[0]'
					  AND Contrasenia = '$pass'";
			$result = mysqli_query($conexion, $sql);
			return mysqli_fetch_row($result)[0];
		}
	}
 ?>
