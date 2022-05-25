
<?php
require_once '../componentes/header.php';
require_once '../clases/contenido.php';


$contenido = new Contenidos();
    if (isset($_GET["id"])) {
        $contenido->setIdContenidos($_GET["id"]);
    

        $contenido->eliminar();
    }
 ?>       
   <div class="container">
<h2>SE HA ELIMINADO CORRECTAMENTE</h2>

<a href="../admin/contenidos.php" type="button">ir a contenidos</a>
</div>

<?php
require_once "../componentes/footer.php"
?>
