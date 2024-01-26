<?php

class Test extends Controlador
{

    public function __construct()
    {

        if (Sesion::sesionCreada()) {
            Sesion::iniciarSesion($this->datos);
        }
    }

    public function index()
    {
        echo "<pre>";
        print_r($this->datos);
    }

    public function prueba()
    {
        if (Sesion::sesionCreada()) {
            print_r($this->datos);
        } else {
            echo "nada";
        }
    }
}
