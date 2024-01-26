<?php

class Ofertas extends Controlador
{
    private $usuarioModelo;
    private $ofertaModelo;

    public function __construct()
    {
        $this->ofertaModelo = $this->modelo('OfertaModelo');
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
    }

    public function publicarOfertas()
    {
        if (Sesion::sesionCreada()) {
            $this->vista("ofertas/publicarOfertas", $this->datos);
        } else {
            $this->vista("ofertas/verOfertas");
        }
    }

    public function verOfertas()
    {
        if (Sesion::sesionCreada()) {
            $this->vista("ofertas/verOfertas", $this->datos);
        } else {
            $this->vista("ofertas/verOfertas");
        }
    }
}
