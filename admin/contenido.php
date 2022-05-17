<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    
    <title>Ingresar_modificar</title>
</head>
<body>
    
    <nav class="nav justify-content-center">
        <a class="nav-link active" aria-current="page" href="#">Inicio</a>
        <a class="nav-link" href="#">Contenidos</a>
        <a class="nav-link" href="#">Quienes Somos</a>
    </nav> <br>

    <div id="My_carrusel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="https://picsum.photos/1950/200?img1" class="d-block w-100" alt="img1">
        </div>
        <div class="carousel-item">
            <img src="https://picsum.photos/1950/200?img2" class="d-block w-100" alt="img2">
        </div>
        <div class="carousel-item">
            <img src="https://picsum.photos/1950/200?img3" class="d-block w-100" alt="img3">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="My_carrusel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="false"></span>
        <span class="visually-hidden">Anterior</span>
    </button>
        <button class="carousel-control-next" type="button" data-bs-target="My_carrusel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Siguiente</span>
    </button>
    </div> <br>

    <?php

require_once '../clases/contenido.php';

$contenido = new Contenidos();
/*$contenido->autor_idusuario=1;
$contenido->idclasificaciones=3;
$contenido->imagen= "";
$contenido->titulo= '¡Hola!';
$contenido->subtitulo= 'pruebas';
$contenido->contenido= 'lorem ipsum dolor sit amet, consectet';

$contenido->agregar();*/

$contenido->idcontenido='2';
$contenido->obtener();

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


</body>
</html>

    


