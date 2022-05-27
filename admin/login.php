<?php
require_once "../configuracion.ini.php";


require_once "../clases/usuario.php";


    session_start();
    if (isset($_SESSION['usuario'])) {
        if ($_GET["logout"] == 1) {
            session_destroy();
        } else {
            header("Location: contenidos.php");
            exit();
        }
    }

    $username = null;
    $password = null;
    $usuarioValido = null;
    $usuarioNoValido = null;

    if (!empty($_POST)) {
        $username = $_POST['email'];
        $password = $_POST['contrasena'];

        $usuario = new Usuario();
        $usuarioValido=$usuario->autenticar($username,$password);
        if ($usuarioValido){
            $_SESSION['usuario'] = $username;
            header("Location: contenidos.php");
            exit();
        }else{
            $usuarioNoValido ="Usuario o contraseña incorrectos";
            
        }

       /* if ($usuario == 'admin@admin.cl' && $contrasena =='mayo') {
            $usuarioValido = "Usuario válido";
            $_SESSION["usuario"] = $usuario;
            header("Location: contenidos.php");
        } else {
            $usuarioNoValido = "Usuario no válido";
        }*/
    }

require "../componentes/header.php";
require "../componentes/carrusel.php";


?>


    
<div class="container ">
    <div class="row" style="margin-top: 15%";>
        <div class="col-md-4 offset-md-4">
        <div class="card" style="width: 18rem;">
            <img src="https://picsum.photos/id/237/200/300" class="card-img-top" alt="img">
        <div class="card-body">
            <h5 class="card-title">Loggin</h5>
            <form accion="" method="POST">
                        <input type="email" id="email" name="email" placeholder="email" required>
                    <br></br>
                        <input type="password" id="password" name="contrasena" placeholder="password" required>
                    <br></br>
                    <div class="mb-3">
                                            <?php
                                                if ($usuarioValido) {
                                            ?>
                                                <div class="alert alert-success" role="alert">
                                                <alert message >   Usuario válido, será redicreccionado/a</alert>
                                                </div>
                                            <?php
                                                }
                                            ?>

                                            <?php
                                                if (!$usuarioNoValido)   {
                                            ?>
                                                <div class="alert alert-danger" role="alert">
                                                 <alert>   Usuario/a no válido/a, deberá intentar nuevamente.</alert>
                                                 
                                                </div>
                                            <?php
                                                }
                                            ?>
                                        </div>
                            <button type="submit"  class="btn btn-primary" style="float: right" name="login">INGRESAR</button>
                    </div>
            </form>
        </div>
        </div>
    </div>

</div>
<br></br>



<?php
require_once "../componentes/footer.php";
?>