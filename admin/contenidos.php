
    <?php
        
        require_once "../componentes/header.php"; 
        require_once '../clases/contenido.php';
        //require_once '../admin/eliminar.php';
        
        session_start ();
        

    ?>
    

<div class="container">
    <a style="float:right; borderr-radius:12px; background-color:gray; border:gray ;font-size:16px; font-weight:bold" type="submit" href="logout.php" class="btn btn-primary">Cerrar Seción</a>
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
                                                    
                                                    <h2> <?php echo $reg["titulo"]?> </h2> <br>
                                                    <h3> <?php echo $reg["subtitulo"]?> </h3> <br>
                                                    <p text-align="justify"><?php echo $reg["contenido"]?> </p> <br>
                                                <div class="row">
                                                    <div class="col-6 mt-5">
                                                        <form method="POST" action="../admin/eliminar.php">
                                                            <input type="hidden" name="id" value="<?php $reg['idcontenidos'];?>"/>
                                                        <!--<button type="button" class="btn btn-outline-danger btn-space" style="float:right" onClick= "eliminar(<?php echo $reg["idcontenidos"] ;?>)">Eliminar </button> -->
                                                        <a  onClick="eliminar(<?php echo $reg["idcontenidos"] ;?>)" href="../admin/eliminar.php?id=<?php echo $reg["idcontenidos"]?>" class="btn btn-outline-danger btn-space" type="submit">Eliminar 2</a>
                                                    </form>
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

<script src="eliminar.js"></script>
<?php


require_once "../componentes/footer.php";
?>