<?php
    require_once '../componentes/header.php';

require_once '../clases/contenido.php';

$contenido = new Contenidos();
/*$contenido->autor_idusuario=1;
$contenido->idclasificaciones=3;
$contenido->imagen= "";
$contenido->titulo= '¡Hola!';
$contenido->subtitulo= 'pruebas';
$contenido->contenido= 'lorem ipsum dolor sit amet, consectet';

$contenido->agregar();*/



?>


<?php   
require_once '../clases/clasificaciones.php';
    $clasificaciones=new Clasif();
    $clasificaciones->idclasificaciones=1;
    $clasificaciones->listar(); 
    
    
    ?>
<!--ID:  <?php echo $clasificaciones->idclasificaciones; ?> <br>
Nombre: <?php echo $clasificaciones->nombre; ?> <br> -->

<div class="container">
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
                    <select class="form-select" > 
                        <option selected >Elija una opción</option>
                        <option value=" <?php   
                        require_once '../clases/clasificaciones.php';
                        $clasificaciones=new Clasif();
                        $clasificaciones->idclasificaciones=1;
                        $clasificaciones->listar(); ?>" >  <?php echo $clasificaciones->idclasificaciones;?> . <?php echo $clasificaciones->nombre; ?>               
                        </option>
                        <option value=" <?php   
                        require_once '../clases/clasificaciones.php';
                        $clasificaciones=new Clasif();
                        $clasificaciones->idclasificaciones=2;
                        $clasificaciones->listar(); ?>" >  <?php echo $clasificaciones->idclasificaciones;?> . <?php echo $clasificaciones->nombre; ?>               
                        </option>
                        <option value=" <?php   
                        require_once '../clases/clasificaciones.php';
                        $clasificaciones=new Clasif();
                        $clasificaciones->idclasificaciones=3;
                        $clasificaciones->listar(); ?>" >  <?php echo $clasificaciones->idclasificaciones;?> . <?php echo $clasificaciones->nombre; ?>               
                        </option>
                        <option value=" <?php   
                        require_once '../clases/clasificaciones.php';
                        $clasificaciones=new Clasif();
                        $clasificaciones->idclasificaciones=4;
                        $clasificaciones->listar(); ?>" >  <?php echo $clasificaciones->idclasificaciones;?> . <?php echo $clasificaciones->nombre; ?>               
                        </option>
                    </select>
                </div>
            </div> <br>

            <div class="row">
                <div class="col-3">
                <label for="imagen"class="form-label" name="imagen">Imagen</label>
                </div>
                <div class="col-9">
                <input type="url" class="form-control" name="url" placeholder="URL de imágen">
                </div>
            </div> <br>

            <div class="row">
                <div class="col-3">
                <label for="titulo"class="form-label" name="titulo" >Título</label>
                </div>
                <div class="col-9">
                <input type="text" class="form-control" name="titulo" placeholder="Título del Contenido">
                </div>
            </div><br>

            <div class="row">
                <div class="col-3">
                <label for="resumen"class="form-label" name="titulo">Resumen</label>
                </div>
                <div class="col-9">
                <textarea  type="text" class="form-control" name="Resumen" placeholder="Resumen del Contenido"></textarea>
                </div>
            </div><br>

            <div class="row">
                <div class="col-3">
                <label for="contenido"class="form-label" name="contenido">Contenido</label>
                </div>
                <div class="col-9">
                <textarea  type="text" class="form-control" name="contenido" placeholder="Texto del contenido"></textarea>
                </div>
            </div><br>

        </div>
        </div>

    </div>
</div>
<br>


<?php
require_once '../componentes/footer.php';

?>
