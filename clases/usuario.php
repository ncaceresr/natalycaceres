<?php
require_once "conexionDB.php";

class Usuario {
    public $idusuario;
    public $email;
    public $nombre;
    public $apellido;
    public $contrasena;
    public $activo;

    public function __construct() {

    }

    public function buscar(){
        $db = new conexionDB();
        $query= "SELECT nombre=?, apellido=? FROM mydb.usuarios WHERE idusuarios=?";
        $parametros= array($this->nombre,$this->apellido,$this->idusuarios);
        $db->ejecutar_pdo($query,$parametros);
        $db->cerrar();
    }

    public function autenticar($email, $contrasena){
    $db = new conexionDB();
    $sql="SELECT * FROM mydb.usuarios WHERE email=? AND contrasena=? AND activo=1";
    $parametros= array($email,$contrasena);
    $resultado = $db->ejecutar_pdo($sql,$parametros);
    if($resultado->num_rows>0){
        $fila=$resultado->fetch_assoc();
        $this->idusuarios=$fila["idusuarios"];
        $this->email=$fila["email"];
        $this->nombre=$fila["nombre"];
        $this->apellido=$fila["apellido"];
        $this->contrasena=$fila["contrasena"];
        $this->activo=$fila["activo"];
        return true;
    }
    else{
        return false;
    }
    }
}

?>