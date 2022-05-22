
    <?php
        require_once 'configuracion.ini.php';
        require $path."componentes/header.php";;

        require_once '../clases/contenido.php';
        
        session_start ();
        

    ?>
    <a href="logout.php">Cerrar Seción</a>

<div class="container">
    <button type="submit" class="btn btn-primary" onClick="window.location.href='../admin/contenido.php'" value= "<?php $contenido = new Contenidos() ?>" nombre="btn_agregar">Agregar</button>
    <br>
<br>
</div>

<div class="container">
        <div class="row">
            <?php
                    $contenido = new Contenidos();
                    $registro = $contenido->listar();
                    while($reg = $registro->fetch_assoc()){
            ?>

                            <div class="col-md-4">
                            
                                    <div class="card" style="width:18rem">
                                        <img src= "<?php echo $reg["imagen"]?>" class = "card-img-top"alt="img" style="width: 100%; ">
                                            <div class="card-body">
                                                
                                                    <?php echo $reg["titulo"]?><br>
                                                    <?php echo $reg["subtitulo"]?> <br>
                                                    <?php echo $reg["contenido"]?><br>
                                                <div class="row">
                                                    <div class="col-6 mt-5">
                                                        <button type="submit" class="btn btn-danger" onClick="" value="Eliminar" style="float: right" name="btn_eliminar">Eliminar</button> 
                                                    </div>
                                                    <div class="col-6 mt-5" >
                                                        <a href="../admin/contenido_editar.php?id=<?php echo $reg["idcontenidos"]?>" class="btn btn-primary" type="submit"  >Editar</a>
                                                    </div>
                                                </div>
                                            </div>
                                    </div>
                                    <br></br>
                            </div>                        
                            


            <?php    
                    }
                    
            ?>


        </div>
        <br></br>
</div>


<?php
require $path."componentes/footer.php";
?>