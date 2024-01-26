<?php require_once RUTA_APP . '/vistas/inc/header_no_loggeado.php' ?>
<div class="container-fluid vh-100 d-flex align-items-center justify-content-center">
    <div class="row">
        <div class="col-md-4 d-none d-md-inline-block offset-1 mb-5">
            <img src="<?php echo RUTA_MEDIA ?>/inicioSesion.jpg" alt="">
        </div>
    </div>
    <div class="row">
        <div class="col-md-4 d-sm-none d-md-inline-block">
        </div>

        <div class="col-md-4 ms-3 col-sm-12 bg-warning border border-5 border-warning rounded-3 p-5 w-100 mb-5">
            <h1 class="d-block m-2">Inicia sesión</h1>
            <span class="mb-3">¿Aún no tienes una cuenta? <a href="<?php echo RUTA_URL ?>/Usuarios/registroUsuario">Regístrate</a></span>
            <form method="POST">
                <div class="mb-3">
                    <label for="email" class="form-label mt-3">Correo</label>
                    <input type="text" class="form-control" name="email" id="email">
                </div>
                <div class="mb-3">
                    <label for="clave" class="form-label">Contraseña</label>
                    <input type="password" class="form-control" id="clave" name="clave">
                </div>
                <button type="submit" class="btn btn-primary" name="enviar">Iniciar sesión</button>
                
            </form>


        </div>

        <div class="col-md-4 d-none d-sm-none d-md-inline-block">

        </div>
    </div>

</div>
<?php require_once RUTA_APP . '/vistas/inc/footer.php' ?>