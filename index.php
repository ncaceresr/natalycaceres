<?php
require_once 'configuracion.ini.php';
require $path."componentes/header.php";
require "./componentes/carrusel.php";
require_once $path."clases/contenido.php";
?>

<div class="container">
    <div class="row style= align-center">
        <?php
            $contenido = new Contenidos();
            $registro = $contenido->listar2();
            while($reg = $registro->fetch_assoc()){
        ?>
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                        <div class="col-md-4">
                        <img src= "<?php echo $reg["imagen"]?>" class = "card-img-top"alt="img" style="width: 100%; ">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                            <h2> <?php echo $reg["titulo"]?> </h2><br>
                            <?php echo $reg["subtitulo"]?> <br>
                            </div>
                        </div>
                </div>
            </div>
        <?php
            }
        ?>
    </div>

</div>


    

<?php
require $path."componentes/footer.php";
?>