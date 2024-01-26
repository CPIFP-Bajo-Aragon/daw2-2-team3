<?php if (Sesion::sesionCreada()) : ?>
    <?php require_once RUTA_APP . '/vistas/inc/header_loggeado.php' ?>
<?php else : ?>
    <?php require_once RUTA_APP . '/vistas/inc/header_no_loggeado.php' ?>
<?php endif; ?>
<script src="../../../public/js/publicarOferta.js"></script>
 <div id="cont" class="container d-flex flex-column align-items-center w-70 p-3 mt-5 rounded-3">
        <h1 class="d-block mb-4" style="color: black">Publicar una oferta</h1>
        <form method="POST" class="d-flex flex-column">
            <div class="mb-3">
                <input type="text" class="form-control" name="username" id="Nombre" placeholder="Nombre de la oferta">
            </div>
            <p style="color: white; text-align:center">Tipo de oferta</p>
            <div class="d-flex justify-content-center flex-row mb-3">
                <input type="radio" class="form-check-input" id="radioNegocio" name="radio" value="O"
                    onchange="showContent()">
                <label class="form-check-label" for="radioNegocio" style="color: white">Negocio</label>

                <input type="radio" class="form-check-input" id="radioLocal" name="radio" value="D"
                    onchange="showContent()">
                <label class="form-check-label" for="radioLocal" style="color: white">Local</label>

                <input type="radio" class="form-check-input" id="radioVivienda" name="radio" value="A"
                    onchange="showContent()">
                <label class="form-check-label" for="radioVivienda" style="color: white">Vivienda</label>

            </div>

            <div id="formularioInmueble" style="display: none;" class="mb-4">

                <div class="formulario-row mb-4">
                    <input type="number" name="cuadrados" id="cuadrados" class="form-input"
                        placeholder="Metros cuadrados" required>
                    <input type="text" name="distribucion" id="distribucion" class="form-input"
                        placeholder="Distribución" required>
                    <input type="text" name="titulo" id="titulo" class="form-input" placeholder="Título">
                    <input type="text" name="caracteristicas" id="caracteristicas" class="form-input"
                        placeholder="Características">
                </div>


                <div class="formulario-row mb-4">
                    <input type="text" name="descripcion" id="descripcion" class="form-input" placeholder="Descripción">
                    <input type="text" name="fotos" id="fotos" class="form-input" placeholder="Fotos">
                    <input type="text" name="direccion" id="direccion" class="form-input" placeholder="Dirección">
                    <input type="number" name="precio" id="precio" class="form-input" placeholder="Precio">
                </div>


                <div class="formulario-row mb-4">
                    <input type="text" name="ubicacion" id="ubicacion" class="form-input" placeholder="Ubicación">
                    <input type="text" name="tipo_alquiler" id="tipo_alquiler" class="form-input"
                    placeholder="Tipo de alquiler">
                    <input type="text" name="planta" id="planta" class="form-input" placeholder="Planta">
                    <input type="text" name="planos" id="planos" class="form-input" placeholder="Planos">
                </div>


                <div class="formulario-row d-flex justify-content-center">

                    <input type="text" name="equipamiento" id="equipamiento" class="form-input"
                        placeholder="Equipamiento">
                        <input type="text" name="estado" id="estado" class="form-input" placeholder="Estado">
                    <input type="text" name="municipio" id="municipio" class="form-input" placeholder="Municipio">
                </div>

               
            </div>

            <div id="formularioNegocio" style="display: none;">
                <input type="text" class="form-control" name="titulo" id="titulo" placeholder="Titulo"><br>
                <input type="text" class="form-control" name="motivo_traspaso" id="motivo_traspaso"
                    placeholder="Motivo del traspaso"><br>
                <input type="number" class="form-control" name="coste_traspaso" id="coste_traspaso"
                    placeholder="Coste del traspaso"><br>
                <input type="number" class="form-control" name="coste_mensual" id="coste_mensual"
                    placeholder="Coste Mensual"><br>
                <input type="text" class="form-control" name="ubicacion" id="ubicacion" placeholder="Ubicacion"><br>
                <input type="text" class="form-control" name="descripcion" id="descripcion"
                    placeholder="Descripcion"><br>
                <input type="number" class="form-control" name="capital_minimo" id="capital_minimo"
                    placeholder="Capital minimo"><br>
            </div>

            <div class="mb-4">
                <label for="Inicio" class="form-label" style="color: white">Fecha de Inicio:</label>
                <input type="date" class="form-control" name="Inicio" id="Inicio">
            </div>
            <div class="mb-4">
                <label for="Fin" class="form-label" style="color: white">Fecha final:</label>
                <input type="date" class="form-control" name="Fin" id="Fin">
            </div>
            <div class="mb-1">
                <input type="text" class="form-control" name="NIF" id="NIF" placeholder="NIF">
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" name="condiciones" id="Condiciones" placeholder="Condiciones">
            </div>

            <button type="submit" class="btn" name="registrarse" style="background-color: #ffffff">Publicar</button>
        </form>
<?php require_once RUTA_APP . '/vistas/inc/footer.php' ?>