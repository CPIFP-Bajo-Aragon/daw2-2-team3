<?php if (Sesion::sesionCreada()) : ?>
    <?php require_once RUTA_APP . '/vistas/inc/header_loggeado.php' ?>
<?php else : ?>
    <?php require_once RUTA_APP . '/vistas/inc/header_no_loggeado.php' ?>
<?php endif; ?>
    <div class="container">
        <h1>PUEBLOS DE LA COMARCA</h1>

        <table class="table table-hover">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>CCPP</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($datos['pueblos'] as $pueblo): ?>

                <tr>
                    <td id="id_<?php echo $pueblo->id_municipio ?>">
                        <?php echo $pueblo->id_municipio ?>
                    </td>
                    <td id="nombre_<?php echo $pueblo->id_municipio ?>">
                    <a class="link" href="<?php echo RUTA_URL ?>/Pueblos/visitar/<?php echo $pueblo->id_municipio ?>"><?php echo $pueblo->nombre ?></a>
                        
                    </td>
                    <td id="ccpp_<?php echo $pueblo->id_municipio ?>">
                        <?php echo $pueblo->codigo_postal ?>
                    </td>
                </tr>
                
            <?php endforeach ?>
        </tbody>
    </table>

    </div>
<?php require_once RUTA_APP . '/vistas/inc/footer.php' ?>