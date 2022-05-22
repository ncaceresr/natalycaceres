<?php
    session_start();
    if (isset($_SESSION['usuario'])) {
        if ($_GET["logout"] == 1) {
            session_destroy();
        } else {
            header("Location: contenidos.php");
            exit();
        }
    }

    $usuario = null;
    $contrasena = null;
    $usuarioValido = null;
    $usuarioNoValido = null;

    if (!empty($_POST)) {
        $usuario = $_POST['usuario'];
        $contrasena = $_POST['contrasena'];

        if ($usuario == 'admin@admin.cl' && $contrasena =='mayo') {
            $usuarioValido = "Usuario válido";
            $_SESSION["usuario"] = $usuario;
            header("Location: contenidos.php");
        } else {
            $usuarioNoValido = "Usuario no válido";
        }
    }

?>


<?php
require_once 'configuracion.ini.php';
require $path."componentes/header.php";
?>


    
<div class="container ">
    <div class="row" style="margin-top: 15%";>
        <div class="col-md-4 offset-md-4">
        <div class="card" style="width: 18rem;">
            <img src="https://picsum.photos/id/237/200/300" class="card-img-top" alt="img">
        <div class="card-body">
            <h5 class="card-title">Loggin</h5>
            <form accion="" method="POST">
                        <input type="email" id="usuario" name="usuario" placeholder="email" required>
                    <br></br>
                        <input type="password" id="password" name="contrasena" placeholder="password" required>
                    <br></br>
                    <div class="mb-3">
                                            <?php
                                                if (!is_null($usuarioValido)) {
                                            ?>
                                                <div class="alert alert-success" role="alert">
                                                    Usuario válido, será redicreccionado/a
                                                </div>
                                            <?php
                                                }
                                            ?>

                                            <?php
                                                if (!is_null($usuarioNoValido))   {
                                            ?>
                                                <div class="alert alert-danger" role="alert">
                                                    Usuario/a no válido/a, deberá intentar nuevamente.
                                                </div>
                                            <?php
                                                }
                                            ?>
                                        </div>
                            <button type="submit"  class="btn btn-primary" style="float: right">INGRESAR</button>
                    </div>
            </form>
        </div>
        </div>
    </div>

</div>
<br></br>



<?php
require $path."componentes/footer.php";
?>