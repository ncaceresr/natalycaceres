<?php

require_once "conexionDB.php";

class Clasif {
    public $idclasificaciones;
    public $nombre;

    public function __construct(){

    }

    public function listar(){
        $db = new conexionDB();
        $query="SELECT * FROM mydb.clasificaciones WHERE idclasificaciones=? and nombre=?";
        $resultado=$db->ejecutar_pdo($query, array($this->idclasificaciones, $this->nombre));
        return $resultado;

    }
}
?>