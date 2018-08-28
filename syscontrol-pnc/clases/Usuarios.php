<?php

	class usuarios{

		public function registroUsuario($datos){

			$c = new conectar();
         $conexion= $c->conexion();

        $sql = "INSERT INTO usuario(id_Usuario,
			  Usuario,
			  Contraseña,
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

		public function obtenDatosUsuarios($idusuario){
			$c = new conectar();
   		$conexion = $c->conexion();

			$consulta = "SELECT
									id_Usuario,
									Usuario,
									Es_admin,
									Nombre,
									Correo
			 				 FROM Usuario
							 WHERE id_Usuario = '$idusuario'";
			$result = mysqli_query($conexion, $consulta);
			$ver= mysqli_fetch_row($result);
			$datos = array(
				'id_Usuario'=> $ver[0],
				'Usuario'=> $ver[1],
				'Es_admin'=> $ver[2],
				'Nombre'=> $ver[3],
				'Correo'=> $ver[4]
			);
			return $datos;
		}

		public function actualizarUsuarios($datos){
			$c = new conectar();
   		$conexion = $c->conexion();

			$update = "UPDATE Usuario SET
												Usuario='$datos[1]',
												Es_admin='$datos[2]',
												Nombre='$datos[3]',
												Correo='$datos[4]'
												WHERE id_Usuario='$datos[0]'";
			return mysqli_query($conexion,$update);
		}

		public function eliminarUsuario($idUsuario){
			$c = new conectar();
   		$conexion = $c->conexion();

			$delete = "DELETE FROM Usuario
									WHERE id_Usuario = '$idUsuario'";
			return mysqli_query($conexion,$delete);
		}
	}
 ?>
