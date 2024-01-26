<?php if (Sesion::sesionCreada()) : ?>
    <?php require_once RUTA_APP . '/vistas/inc/header_loggeado.php' ?>
<?php else : ?>
    <?php require_once RUTA_APP . '/vistas/inc/header_no_loggeado.php' ?>
<?php endif; ?>
    <div class="ms-3 me-3">

    <a href="<?php echo RUTA_URL ?>/Pueblos" class="btn btn_light"><i
        class="bi bi-chevron-double-left">Volver</i></a>

        <h1><?php echo $this->datos['infoPueblo']->nombre; ?></h1>

        <h2>Servicios</h2>
        <table class="table">
        <thead>
            <tr>
                
                <th>Nombre</th>
                <th>Descripcion</th>
                <th>Teléfono</th>
                <th>Dirección</th>
                <th>web</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($datos['serviciosPueblo'] as $servicio): ?>
                <tr>
                    <td>
                        <?php echo $servicio->nombre ?>
                    </td>
                    <td>
                        <?php echo $servicio->descripcion ?>
                    </td>
                    <td>
                        <?php echo $servicio->telefono ?>
                    </td>
                    <td>
                        <?php echo $servicio->direccion ?>
                    </td>
                    <td>
                        <a href="<?php echo $servicio->web ?>"><?php echo $servicio->nombre ?></a>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>

       
    </div>
<?php require_once RUTA_APP . '/vistas/inc/footer.php' ?>