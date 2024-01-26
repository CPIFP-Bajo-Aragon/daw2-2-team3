<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo RUTA_URL ?>/js/editarMiPerfil.js"></script>
<link rel="stylesheet" href="<?php echo RUTA_URL ?>/css/estilos.css">
    <style>

    body {
        background-image: url("/img/media/bg2.jpg");
        background-size: cover;
        background-repeat: no-repeat;
    }

    #cont {
        background: rgba( 255, 255, 255, 0.15 );
        box-shadow: 0 8px 32px 0 rgba( 158, 67, 7, 0.37 );
        backdrop-filter: blur( 15px );
        -webkit-backdrop-filter: blur( 9px );
        border-radius: 10px;
        border: 3px solid rgba( 255, 255, 255, 0.18 );
    }

    #formularioInmueble {
            max-width: 50vw;
            margin: 0 auto;
            padding: 20px;
            background-color: #f5f5f5;
            border-radius: 10px;
        }

        #formularioNegocio {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f5f5f5;
            border-radius: 10px;
            display: flex;
            flex-wrap: wrap;
        }

        #formularioInmueble input {
            margin-right: 10px;
           
            padding: 8px;
            
            border: 1px solid #ccc;
          
            border-radius: 4px;
        
            box-sizing: border-box;
            padding-right: 10px;
        }

        .formulario-row {
            display: flex;
          

        }

    </style>
    <script>

function showContent() {
            var elementInmueble = document.getElementById("formularioInmueble");
            var elementNegocio = document.getElementById("formularioNegocio");
            var radioNegocio = document.getElementById("radioNegocio");
            var radioLocal = document.getElementById("radioLocal");
            var radioVivienda = document.getElementById("radioVivienda");

            if (radioNegocio.checked) {
                elementNegocio.style.display = 'block';
                elementInmueble.style.display = 'none';
            } else if (radioLocal.checked || radioVivienda.checked) {
                elementNegocio.style.display = 'none';
                elementInmueble.style.display = 'block';
            } else {
                elementNegocio.style.display = 'none';
                elementInmueble.style.display = 'none';
            }
        }
    </script>
</body>
</html>