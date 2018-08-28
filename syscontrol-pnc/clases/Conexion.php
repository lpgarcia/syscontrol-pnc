<?php
    class conectar{

//por favor compañeros crean un usuario para la bd, con los datos siguientes		 
        private $servidor = 'localhost';
        private $usuario = 'syscontrolpnc';
        private $password = 'Syscontrol-PNC1';
        private $bd = 'pncsm';

        public function conexion(){
            $conexion = mysqli_connect($this->servidor,
                                       $this->usuario,
                                       $this->password,
                                       $this->bd);
            return $conexion;
        }
    }

// probando la conexion
/*    $obj = new conectar();
    if ($obj->conexion()) {
      echo "Conexion";
    } else {
      echo "Error";
    }
*/
 ?>
