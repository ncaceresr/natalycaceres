<?php
class Usuario {
    public $idusuario;
    public $email;
    public $nombre;
    public $apellido;
    public $contrasena;

    public function __construct() {

    }

    public function buscar(){
        $db = new conexionDB();
        $query= "SELECT nombre=?, apellido=? FROM mydb.usuarios WHERE idusuarios=?";
        $parametros= array($this->nombre,$this->apellido,$this->idusuarios);
        $db->ejecutar_pdo($query,$parametros);
        $db->cerrar();
    }
}




?>