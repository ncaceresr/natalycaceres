<?php
class conexionDB{

    public $conexion;

        public function __construct(){
            $servername = "127.0.0.1";
            $username= "root";
            $password= "09111983";
            $this->conexion = new mysqli($servername,$username,$password, "mydb");
            if($this->conexion->connect_errno){
                echo "fallo al conectar a MySQL: (". $this->conexion->connect_errno .")" . $this->conexion->connect_error;
            }
        }

        public function ejecutar($sql){
            $resultado=$this->conexion->query($sql);
            return $resultado;
        }

        public function pdo($sql, $parametros){
            $resultado = $this->conexion->prepare($sql);
            $resultado->execute($parametros);
            return $resultado;
        }

        public function cerrar(){
            $this->conexion->close();
        }
}




?>