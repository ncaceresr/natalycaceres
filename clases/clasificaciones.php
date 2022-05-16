<?php

require_once "conexionDB.php";

class Clasif {
    public $idclasificaciones;
    public $nombre;

    public function __construct(){

    }

    public function listar(){
        $db = new conexionDB();
        $query="SELECT * FROM mydb.clasificaciones WHERE idclasificaciones=" . $this->idclasificaciones;
        $resultado=$db->ejecutar($query);
        $fila = $resultado->fetch_assoc();
        $this->idclasificaciones=$fila["idclasificaciones"];
        $this->nombre=$fila["nombre"];
        $db->cerrar();
        return $fila;

    }
}

?>