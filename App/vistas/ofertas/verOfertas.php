<?php if(Sesion::sesionCreada()): ?>
<?php require_once RUTA_APP.'/vistas/inc/header_loggeado.php' ?>
<?php else: ?>
<?php require_once RUTA_APP.'/vistas/inc/header_no_loggeado.php' ?>
<?php endif; ?>

<div class="container mt-3">
    <h2>OFERTAS</h2>

    <div class="col">
        <div class="container">
            <a href="#demo" class="btn btn-secondary" data-bs-toggle="collapse">Filtros</a>
            <div id="demo" class="collapse container">
                <div class="col-10">
                    filtros
                </div>
            </div>
        </div>

<!-- CAMBIAR URL DE IMAGENES -->

            <div class="card m-3">
                <div class="row g-0">
                    <div class="col-md-4 g-0">
                        <img src="<?php echo RUTA_MEDIA ?>/casa.png" class="img-fluid rounded-start" alt="Card image">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Oferta en alcañiz</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                                additional content. This content is a little bit longer.</p>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"data-bs-target="#myModal">Open modal</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card m-3">
                <div class="row g-0">
                    <div class="col-md-2 g-0" style="background-image: url('<?php echo RUTA_MEDIA ?>/casa.png'); background-size: cover; background-position: center">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Oferta en alcañiz</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                                additional content. This content is a little bit longer.</p>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"data-bs-target="#myModal">Open modal</button>
                        </div>
                    </div>

                    <div class="col-md-2 g-0">
                        <div style="display: grid; grid-template-columns: 1fr; grid-template-rows: 1fr; align-items: center; justify-content: center; width: 100%; height: 100%;">
                            <img style="grid-column-start: 0; grid-column-end: 1; width: auto; height: 100%; opacity: 0.3;" src="img/media/casa.png" class="img-fluid" alt="Card image">
                            <img style="grid-column-start: 0; grid-column-end: 1; width: 60%; height: 60%;" src="img/media/casa.png" class="img-fluid" alt="Card image">
                        </div>
                    </div>

                </div>
            </div>
           


        </div>
    </div>



    <!-- MODAL -->
    <div class="modal" id="myModal">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Modal Heading</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <h3>Some text to enable scrolling..</h3>
                    <p>Some text to enable scrolling.. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                        eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                        nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
                        dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur
                        sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est
                        laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                        aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                        commodo consequat.</p>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                </div>

            </div>
        </div>
    </div>
    <!-- MODAL -->

<?php require_once RUTA_APP.'/vistas/inc/footer.php' ?>


