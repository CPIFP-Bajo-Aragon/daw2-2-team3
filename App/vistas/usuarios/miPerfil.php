<?php require_once RUTA_APP . '/vistas/inc/header_loggeado.php' ?>

<div id="modal-container"></div>

<div class="container-fluid d-flex justify-content-center mt-3">
    <p>PERFIL</p>
</div>
<div class="container-fluid border border-dark w-50 bg-white text-center">
    <div class="d-flex flex-column">
        <h4 class="mt-3">Opciones del perfil</h4>
        <span>Nombre: <?php echo $this->datos['usuarioSesion']->nombre; ?></span>
        <span>Apellidos: <?php echo $this->datos['usuarioSesion']->apellidos; ?></span>
        <h4 class="mt-3">Información de contacto</h4>
        <span>Correo: <?php echo $this->datos['usuarioSesion']->correo; ?></span>
        <span class="mb-5">DNI: <?php echo $this->datos['usuarioSesion']->nif; ?></span>
    </div>
    <div class="d-flex justify-content-between">
        <p>Cambiar contraseña</p>
        <p>
            <!-- <i class="fa fa-pencil" aria-hidden="true" ></i> -->
          
        <button onclick="openModalEditPerfil()">Editar</button>
    </p>
    </div>
</div>

<div class="container-fluid w-50 mt-4 d-flex justify-content-start">
    <p>Ver mis documentos</p>
    <i class="fa fa-file-text-o" aria-hidden="true"></i>
</div>


<?php require_once RUTA_APP . '/vistas/inc/footer.php' ?>