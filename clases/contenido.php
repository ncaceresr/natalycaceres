<?php

require_once "conexionDB.php";

class Contenidos {
    public $idcontenido;
    public $autor_idusuario;   
    public $idclasificaciones;
    public $imagen;
    public $titulo;
    public $subtitulo;
    public $contenido;


    public function __construct() {

    }

    public function agregar(){

        $db = new conexionDB();
        $query ="INSERT INTO Contenidos values (NULL, '" . $this->autor_idusuario ."','" . $this->idclasificaciones . "','" . $this->imagen . "',
        '" . $this->titulo . "','" . $this->subtitulo . "','" . $this->contenido ."' )";
        $db->ejecutar($query);
        $db->cerrar();
    }

    public function editarContendio($nuevoContenido ){
        $this->contenido = $nuevoContenido;
    }

    public function eliminar(){


    }

    public function obtener(){
        $db = new conexionDB();
        $query="SELECT * FROM mydb.contenidos WHERE idcontenidos=" . $this->idcontenido;
        $resultado=$db->ejecutar($query);
        $fila = $resultado->fetch_assoc();
        $this->idcontenido=$fila["idcontenidos"];
        $this->autor_idusuario=$fila["autor_idusuarios"];
        $this->idclasificaciones=$fila["idclasificaciones"];
        $this->imagen=$fila["imagen"];
        $this->titulo=$fila["titulo"];
        $this->subtitulo=$fila["subtitulo"];
        $this->contenido=$fila["contenido"];
        $db->cerrar();
        return $fila;
    }

    public function listar (){
        $db = new conexionDB();
        $sql = "select * from mydb.contenidos";
        $resultado =$db->ejecutar($sql);
        return $resultado;
    }
}


?>