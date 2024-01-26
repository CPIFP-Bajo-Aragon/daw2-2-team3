<?php if(Sesion::sesionCreada()): ?>
<?php require_once RUTA_APP.'/vistas/inc/header_loggeado.php' ?>
<?php else: ?>
<?php require_once RUTA_APP.'/vistas/inc/header_no_loggeado.php' ?>
<?php endif; ?>
<div class="container">

<h1 class="">NOTIFICACIONES</h1>

<table class="table table-hover">
        <thead>
            <tr>
                <th>Contenido</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($datos['notificacionesUsuario'] as $notificaciones): ?>
                <?php if($notificaciones->leida==0):?>
                <tr class="table-secondary">
                <?php else: ?>
                    <tr class="">
                <?php endif; ?>
                    <td id="id_<?php echo $notificaciones->id_notificacion ?>">
                        <?php echo $notificaciones->contenido ?>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>





<?php require_once RUTA_APP.'/vistas/inc/footer.php' ?>