<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inicio</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="../../../public/css/estilos.css">
  <script src="https://kit.fontawesome.com/705ab1f76d.js" crossorigin="anonymous"></script>

</head>

<body>
  <header style="background-color: white;">
    <div style="background-color: #CE7106">
      <div class="container-fluid d-flex justify-content-between">
        <a href="<?php echo RUTA_URL ?>" class="navbar-brand text-white">
          <?php echo FECHA_ACT ?>
        </a>
        <a href="<?php echo RUTA_URL ?>/Usuarios/notificaciones" class="navbar-brand text-white me-md-5 me-s-3">
          <?php echo "Tienes <b>".($this->datos["notificaciones"]->notificaciones)."</b> notificaciones";?>
        </a>
      </div>
    </div>
    <nav class="navbar navbar-expand-sm">

      <a class="navbar-brand" href="<?php echo RUTA_URL ?>/Ofertas/verOfertas"><img src="<?php echo RUTA_MEDIA ?>/logocomarca.png" alt="" width="200px"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav ">
          <li class="nav-item">
            <a class="nav-link" href="<?php echo RUTA_URL ?>/Ofertas/verOfertas">Ofertas</a> <!--CAMBIAR URL-->
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo RUTA_URL ?>/Ofertas/publicarOfertas">Publicar</a>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="" role="button" data-bs-toggle="dropdown">Nuestros Pueblos</a>
            <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="<?php echo RUTA_URL ?>/Pueblos">Ver pueblos</a></li>
              <li><a class="dropdown-item " href="/Pueblos/servicios">Servicios</a></li>
              <li><a class="dropdown-item" href="#">A third link</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown d-none d-sm-block d-md-none">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
              <b><?php echo $datos["usuarioSesion"]->nombre; ?></b>
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="<?php echo RUTA_URL ?>/Usuarios/miPerfil">Perfil</a></li>
              <li><a class="dropdown-item" href="<?php echo RUTA_URL ?>/Login/cerrarSesion">Cerrar sesión</a></li>
            </ul>
          </li>
          <li class="nav-item d-block d-sm-none">
            <a class="nav-link " href="<?php echo RUTA_URL ?>/Usuarios/miPerfil">Perfil</a>
          </li>
          <li class="nav-item d-block d-sm-none">
            <a class="nav-link " href="<?php echo RUTA_URL ?>/Login/cerrarSesion">Cerrar sesion</a>
          </li>
        </ul>
      </div>
      <div class="nav-item dropdown  d-sm-none d-none d-md-block">
        <div class="dropdown-toggle me-md-5 me-s-3" role="button" data-bs-toggle="dropdown">Bienvenido,
          <b><?php echo $datos["usuarioSesion"]->nombre; ?></b>
        </div>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="<?php echo RUTA_URL ?>/Usuarios/miPerfil">Perfil</a></li>
          <li><a class="dropdown-item" href="<?php echo RUTA_URL ?>/Login/cerrarSesion">Cerrar sesión</a></li>
        </ul>
      </div>
    </nav>
  </header>