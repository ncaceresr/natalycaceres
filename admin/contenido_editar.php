<?php
require_once "../configuracion.ini.php";
require_once "../componentes/header.php";
require "../componentes/carrusel.php";
require_once '../clases/contenido.php';
require_once '../clases/clasificaciones.php';


$contenido = new Contenidos();
    if (isset($_GET["id"])) {
        $contenido->setIdContenidos($_GET["id"]);
        $contenido->autor_idusuarios=1;
        
    if($_POST){
        $contenido->idclasificaciones=$_POST["idclasificaciones"];
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

$clasif=new Clasif();

$clasif->listar();


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
               <!-- <input type="text" class="form-control" name="idclasificaciones" placeholder="clasi" value ="<?php echo $contenido->idclasificaciones?>">-->
                <select class="form-select" name="idclasificaciones">
                    <option selected> <?php echo $contenido->idclasificaciones ?> </option>
                    <option value= "<?php echo $clasif->idclasificaciones=1;?>" name="idclasificaciones"> 1.
                        <?php echo $clasif->nombre='Noticias';?>  </option>
                        <option value= "<?php echo $clasif->idclasificaciones=2;?>" name="idclasificaciones"> 2.
                        <?php echo $clasif->nombre='Asociación';?>  </option>
                        <option value= "<?php echo $clasif->idclasificaciones=3;?>" name="idclasificaciones"> 3.
                        <?php echo $clasif->nombre='Información';?> </option>  </option>
                        <option value= "<?php echo $clasif->idclasificaciones=4;?>" name="idclasificaciones"> 4.
                        <?php echo $clasif->nombre='Otros';?>  </option>

                </select>

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
