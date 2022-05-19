
    <?php
        require_once '../componentes/header.php';

        require_once '../clases/contenido.php';
        
        session_start ();
        

    ?>
    <a href="logout.php">Cerrar Seción</a>

<div class="container">
    <input type="button" onClick="window.location.href='../admin/contenido.php'" value=" Agregar" ></input>
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
                                        <img src= "<?php echo $reg["imagen"]?>" class = "card-img-top"alt="img" style="width: 10%; ">
                                            <div class="card-body">
                                                
                                                    <?php echo $reg["titulo"]?><br>
                                                    <?php echo $reg["subtitulo"]?> <br>
                                                    <?php echo $reg["contenido"]?><br>
                                                    
                                            </div>
                                    </div>
                                
                            </div>                        
                            <br></br>


            <?php    
                    }
                    
            ?>
        </div>
        <br></br>
</div>


<?php
require_once '../componentes/footer.php';
?>