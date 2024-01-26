<?php
    //DESARROLLO
    ini_set('display_errors',1);
    ini_set('display_startup_errors',1);
    error_reporting(E_ALL);
    //DESARROLLO



    define('RUTA_APP',dirname(dirname(__FILE__)));
    // define('RUTA_URL','http://localhost/MVC/');
    define('RUTA_URL','');
    define('RUTA_JS', '/js');
    define('RUTA_CSS', '/css');
    define('RUTA_MEDIA','/img/media');
    define('RUTA_IMG_OFER','/img/ofertas');
    define('NOMBRE_SITIO','Comarca del Bajo Aragón');

    date_default_timezone_set("Europe/Madrid");
    $fechaActual = new DateTime();
    $formatoFecha = new IntlDateFormatter('es_ES', IntlDateFormatter::FULL, IntlDateFormatter::NONE);
    $fechaCompleta = $formatoFecha->format($fechaActual);
    $fecha = explode(" ", $fechaCompleta);
    $fecha = ucwords($fecha[0]). " " . $fecha[1] . " " . $fecha[2]. " " . $fecha[3]. " " . $fecha[4] . " " . $fecha[5];
  
    define('FECHA_ACT', $fecha);
    define('DB_HOST','localhost');
    define('DB_USUARIO','root');
    define('DB_PASSWORD','Admin1234');
    define('DB_NOMBRE','bdComarca');

    //Configuración Tamaño de página en la paginacion
    define('TAM_PAGINA',2);



  