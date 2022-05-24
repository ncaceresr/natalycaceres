<?php

require_once "conexionDB.php";

class Clasif {
    public $idclasificaciones;
    public $nombre;

    public function __construct(){

    }

    public function listar(){
        $db = new conexionDB();
        $query="SELECT  nombre=? FROM mydb.clasificaciones WHERE idclasificaciones=?";
        $parametros= array($this->idclasificaciones,$this->nombre);
        $resultado=$db->ejecutar_pdo($query, $parametros);
        return $resultado;

    }

    public function setIdClas($id){
        $this->idclasificaciones=$id;
        $this->obtener();
    }
}
?>