<?php
    class Controlador {

        protected $datos = ['rolesPermitidos' => []];
        

        public function modelo($modelo) {
            require_once '../App/modelos/' . $modelo . '.php';
            return new $modelo;
        }

        public function vista($vista, $datos = []) {
            if (file_exists('../App/vistas/' . $vista . '.php')) {
                require_once '../App/vistas/' . $vista . '.php';
            } else {
                die('la vista no existe');
            }
        }

        public function vistaApi($datos) {
            header('Access-Control-Allow-Origin: *');
            header('Content-Type: application/json');
            echo json_encode($datos);
            exit();
        }
    }