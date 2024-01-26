<?php

class Pueblos extends Controlador
{
    private $usuarioModelo;
    private $puebloModelo;

    public function __construct()
    {
        $this->puebloModelo = $this->modelo('PuebloModelo');
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
        $this->datos["pueblos"] = $this->puebloModelo->obtenerPueblos();
        
        $this->vista("pueblos/pueblos_comarca", $this->datos);
    }

    public function visitar($pueblo)
    {
        $this->datos["infoPueblo"] = $this->puebloModelo->infoPueblo($pueblo);
        $this->datos["serviciosPueblo"] = $this->puebloModelo->serviciosPueblo($pueblo);
        $this->vista("pueblos/visitar_pueblos", $this->datos);
    }
}
