<?php
require_once 'configuracion.ini.php';
require $path."componentes/header.php";
require_once $path."clases/contenido.php";
require_once $path."clases/usuario.php";
?>

<div class="container">
<?php
        $contenido = new Contenidos();
        //$contenido->idcontenidos=28; 
        if(isset($_GET["id"])){
            $contenido->setIdContenidos($_GET["id"]);
        $contenido->obtener();
        }    

        
  ?>
<div class="container">
<div class="row">
    <img src= "<?php echo $contenido->imagen;?>" class = "rounded mx-auto d-block" alt="img" style=" width: 1920px; height: 500px ; margin-left:auto; margin-right:auto;">
        </div>
    <div class="row">
    <h1><?php echo $contenido->titulo;?></h1>
    <br></br>
    <h3><?php echo $contenido->subtitulo;?></h3>
    <p style="text-align:right">
    <?php echo $contenido->nombre;?> 
    <?php echo $contenido->apellido;?><br>
    <?php echo $contenido->email;?><br>
</p>
    <br></br>

    </div>
    <div class="row">
        <p style="text-align: justify;"><?php echo $contenido->contenido;?> </p>
        <br></br>
    </div>

    <br></br>



    
</div>

<?php
require $path."componentes/footer.php";
?>