<?php require_once RUTA_APP . '/vistas/inc/header_no_loggeado.php' ?>
<div id="cont" class="container d-flex flex-column align-items-center w-50 p-3 mt-5 rounded-3">
                <h1 class="d-block mb-2" style="color: #ff9700">Crea una cuenta</h1>
                <span class="mb-3" style="color: white">¿Ya tienes una cuenta? <a href="<?php echo RUTA_URL?>/Login">Inicia sesión</a></span>
                <form method="POST">
                    <div class="mb-1">
                        <input type="text" class="form-control" name="username" id="Nombres" placeholder="Nombre">
                    </div>
                    <div class="mb-1">
                        <input type="text" class="form-control" name="apellidos" id="Apellidos" placeholder="Apellido/s">
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" name="NIF" id="NIF" placeholder="NIF / DNI / NIE">
                    </div>
                    <div class="mb-4">
                        <label for="clave" class="form-label" style="color: white">Fecha de Nacimiento:</label>
                        <input type="date" class="form-control" name="FechaN" id="FechaN">
                    </div>
                    <div class="mb-1">
                        <input type="text" class="form-control" name="TELF" id="TELF" placeholder="Teléfono">
                    </div>
                    <div class="mb-1">
                        <input type="email" class="form-control" name="email" id="email" aria-describedby="email" placeholder="Correo Electrónico">
                        <div id="email" class="form-text">No compartiremos tus datos con nadie.</div>
                    </div>
                    <div class="mb-1">
                        <label for="clave" class="form-label" style="color: white">Contraseña</label>
                        <input type="password" class="form-control" name="clave" id="clave" name="clave">
                    </div>
                    <div class="mb-1">
                        <label for="clave2" class="form-label" style="color: white">Confirmar contraseña</label>
                        <input type="password" class="form-control" name="clave2" id="clave2" name="clave2">
                    </div>
                    <button type="submit" class="btn" name="registrarse" style="background-color: #ffffff" >Registrarse</button>
                </form>
                </div>
<script src="<?php echo RUTA_JS;?>/validadorRegistro.js"></script>
<?php require_once RUTA_APP . '/vistas/inc/footer.php' ?>