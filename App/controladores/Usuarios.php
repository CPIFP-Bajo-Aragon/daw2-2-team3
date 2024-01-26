<?php

class Usuarios extends Controlador
{
    private $usuarioModelo;

    public function __construct()
    {
        
        $this->usuarioModelo = $this->modelo('UsuarioModelo');

        if (Sesion::sesionCreada()) {
            Sesion::iniciarSesion($this->datos);
            $this->datos["notificaciones"] = $this->usuarioModelo->notificaciones($this->datos['usuarioSesion']->nif);;
        }
        
        $this->datos["rolesPermitidos"] = [1];
        $this->datos['menuActivo'] = 1;
    }

    public function index()
    {
        if (Sesion::sesionCreada()) {
            redireccionar("/ofertas/verOfertas");
        } else {
            $this->vista("inicio_no_loggeado");
        }
    }

    public function miPerfil()
    {
        if (Sesion::sesionCreada()) {
            $this->vista("usuarios/miPerfil", $this->datos);
        } else {
            $this->vista("ofertas/verOfertas");
        }
    }

    public function editarMiPerfil()
    {
        if (Sesion::sesionCreada()) {
            
             if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $this->usuarioModelo->cambiarInfoUsuario($this->datos);
                redireccionar(('/'));
             } else{
                $this->vistaApi($this->usuarioModelo->obtenerUsuario($this->datos['usuarioSesion']->nif)); 
             }
        } else {
            $this->vista("ofertas/verOfertas");
        }
    }

    public function notificaciones()
    {
        if (Sesion::sesionCreada()) {
            $this->datos["notificacionesUsuario"] = $this->usuarioModelo->obtenerNotificaciones($this->datos['usuarioSesion']->nif);
            $this->vista("usuarios/notificaciones", $this->datos);
        } else {
            $this->vista("inicio_no_loggeado");
        }
    }


    public function registroUsuario($error = "")
    {
        if (Sesion::sesionCreada()) {
            redireccionar("/Usuarios", $this->datos);
        } else {
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {

                $claveEncriptada = hash('sha256', $_POST['clave']);

                $usuarioNuevo = [
                    'Nif' => trim($_POST['NIF']),
                    'Nombre' => trim($_POST['username']),
                    'Apellidos' => trim($_POST['apellidos']),
                    'Email' => trim($_POST['email']),
                    'FechaN' => ($_POST['FechaN']),
                    'TELF' => trim($_POST['TELF']),
                    'Clave' => trim($claveEncriptada),
                ];

                // TO-DO: Eliminar si funciona Asíncrono.
                // $existe = $this->usuarioModelo->existeUsuario($usuarioNuevo);
                // if($existe > 0) {
                //     redireccionar("/usuarios/registroUsuario/errorNif");
                // }

                $ejecucion = $this->usuarioModelo->registroUsuario($usuarioNuevo);

                if ($ejecucion == true) {
                    $estructuraDoc = './usuarios/' . $usuarioNuevo['Nif'] . '/docs';
                    $estructuraImg = './usuarios/' . $usuarioNuevo['Nif'] . '/imgs';
                    if(!mkdir($estructuraDoc, 0777, true)) {
                        die('Fallo al crear las carpetas...');
                    }
                    if(!mkdir($estructuraImg, 0777, true)) {
                        die('Fallo al crear las carpetas...');
                    }
                    redireccionar("/Login");
                }
            } else {
                $this->datos['error'] = $error;
                $this->vista("usuarios/registroUsuario", $this->datos);
            }
        }
    }
}
