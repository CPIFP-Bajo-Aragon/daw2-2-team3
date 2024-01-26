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
        <div class="nav-item text-white">
          <a href="<?php echo RUTA_URL ?>/Usuarios/registroUsuario" class="navbar-brand">
            REGÍSTRATE
          </a>
          |
          <a href="<?php echo RUTA_URL ?>/Login" class="navbar-brand">
            <b>INICIAR SESIÓN</b>
          </a>
        </div>

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
            <a class="nav-link" href="<?php echo RUTA_URL ?>/">Publicar</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="" role="button" data-bs-toggle="dropdown">Nuestros Pueblos</a>
            <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="<?php echo RUTA_URL ?>/Pueblos">Ver pueblos</a></li>
              <li><a class="dropdown-item " href="#">Servicios</a></li>
              <li><a class="dropdown-item" href="#">A third link</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>