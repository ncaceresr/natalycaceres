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
        $query ="INSERT INTO Contenidos values (NULL, ?,?,?,?,?,? )";
        $parametros= array($this->autor_idusuario,$this->idclasificaciones,$this->imagen,$this->titulo,$this->subtitulo,$this->contenido);
        $db->ejecutar_pdo($query,$parametros);
        $db->cerrar();
    }

    public function modificar( ){
        $db=new conexionDB();
        $query="update mydb.contenidos set autor_idusuario=?, idclasificaciones=?,imagen=?,titulo=?,subtitulo?,contenido=? where idcontenidos=?";
        $parametros=array($this->autor_idusuario,$this->idclasificaciones,$this->imagen,$this->titulo,$this->subtitulo,$this->contenido);
        $db->ejecutar_pdo($query,$parametros);
        $db->cerrar();
    }

    public function eliminar(){
        $db=new conexionDB();
        $query="delete from mydb.contenidos WHERE idcontenidos=?";
        $db->ejecutar_pdo($query,array($this->idcontenidos));
        $db->cerrar();

    }

    public function obtener(){
        $db = new conexionDB();
        $query="SELECT * FROM mydb.contenidos WHERE idcontenidos= ?";
        $resultado= $db->ejecutar_pdo($query,array($this->idcontenidos));
        if($resultado->num_rows>0){
            $fila = $resultado->fetch_assoc();
            $this->idcontenido=$fila["idcontenidos"];
            $this->autor_idusuario=$fila["autor_idusuarios"];
            $this->idclasificaciones=$fila["idclasificaciones"];
            $this->imagen=$fila["imagen"];
            $this->titulo=$fila["titulo"];
            $this->subtitulo=$fila["subtitulo"];
            $this->contenido=$fila["contenido"];
        } else {
            $this->idcontenidos=null;
            $this->autor_idusuario=null;
            $this->idclasificaciones=null;
            $this->imagen=null;
            $this->titulo=null;
            $this->subtitulo=null;
            $this->contenido=null;
        }
        $db->cerrar();
        
    }

    public function listar (){
        $db = new conexionDB();
        $sql = "select * from mydb.contenidos";
        $resultado =$db->ejecutar_pdo($sql, array());
        return $resultado;
    }
}


?>