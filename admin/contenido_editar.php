<?php

require_once "../componentes/header.php";
require_once '../clases/contenido.php';


$contenido = new Contenidos();
    if (isset($_GET["id"])) {
        $contenido->setIdContenidos($_GET["id"]);
        $contenido->autor_idusuarios=1;
        
    if($_POST){
        $contenido->idclasificaciones=1;
        $contenido->imagen=$_POST["imagen"];
        $contenido->titulo= $_POST["titulo"];
        $contenido->subtitulo= $_POST["subtitulo"];
        $contenido->contenido= $_POST["contenido"];

        $contenido->modificar();
    }
        
    }
/*$contenido->idcontenidos=28;
$contenido->idclasificaciones=4;
$contenido->autor_idusuarios=1;
$contenido->titulo="prueba 123";
$contenido->modificar();*/


?>




<div class="container">
<form method="POST" >
                <input type="hidden" name="id" value="<?php echo $contenido->idcontenidos ?>">
    <div class="card  w-75 align-item: center">
        <div class="row margin-left: 20px">
            <h2>Contenido</h2>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-3">
                    <label  for="clasificacion" class="form-label" name="clasificacion">Clasificación</label>
                    
                </div>
                <div class="col-9">
                <input type="tex" class="form-control" name="clasificion" placeholder="clasi" value ="<?php echo $contenido->idclasificaciones?>">
                </div>
                
            </div> <br>

            <div class="row">
                <div class="col-3">
                <label for="imagen"class="form-label" name="imagen" >Imagen</label>
                </div>
                <div class="col-9">
                <input type="url" class="form-control" name="imagen" placeholder="URL de imágen" value ="<?php echo $contenido->imagen?>">
                </div>
            </div> <br>

            <div class="row">
                <div class="col-3">
                <label for="titulo"class="form-label" name="titulo" >Título</label>
                </div>
                <div class="col-9">
                <input type="text" class="form-control" name="titulo" placeholder="Título del Contenido" value ="<?php echo $contenido->titulo?>">
                </div>
            </div><br>

            <div class="row">
                <div class="col-3">
                <label for="resumen"class="form-label" name="titulo">Resumen</label>
                </div>
                <div class="col-9">
                <input  type="text" class="form-control" name="subtitulo" placeholder="Resumen del Contenido" value="<?php echo $contenido->subtitulo?>"></input>
                </div>
            </div><br>

            <div class="row">
                <div class="col-3">
                <label for="contenido"class="form-label" name="contenido">Contenido</label>
                </div>
                <div class="col-9">
                <input  type="text" class="form-control" name="contenido" placeholder="Texto del contenido" value="<?php print $contenido->contenido?>"></input>
                </div>
            </div><br>
            <div class="row">
                <div class="col-9 mt-5">
                    <a type="submit" class="btn btn-primary" href="../admin/contenidos.php"   >Cancelar</a> 
                </div>
                <div class="col-3 mt-5" >
                    <button  type="submit" class="btn btn-primary" style="float: right" name="btn_guardar" >Guardar</button>
                </div>
            </div>
            </div>
        
        </div>
    </div>
    </form>
</div>
<br>


<?php
require_once "../componentes/footer.php";

?>
