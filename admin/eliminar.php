
<?php
require_once '../clases/contenido.php';

$contenidos = new Contenidos();
//if (isset($_GET["id"])){
    //$contenidos->setIdContenidos($_GET["id"]);
$contenidos->idcontenidos=39;
$contenidos->eliminar();
//}
?>
