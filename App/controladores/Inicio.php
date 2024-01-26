<?php

    class Inicio extends Controlador {
        public function __construct() {
        }

        public function index() {
            $this->vista('inicio_no_loggeado');
        }
    }