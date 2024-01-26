<?php

    class Login extends Controlador{

        private $loginModelo;
        public function __construct(){
            $this->loginModelo=$this->modelo('LoginModelo');
            $this->datos['menuActivo'] = 2;

        }

        public function index($error=''){
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
               
                $email=trim($_POST['email']);
                $claveEncriptada = hash('sha256', trim($_POST['clave']));
                $usuarioSesion=$this->loginModelo->loginEmail($email,$claveEncriptada);
                
                if(isset($usuarioSesion) && !empty($usuarioSesion)){
                    Sesion::crearSesion($usuarioSesion);
                    redireccionar("/Ofertas/verOfertas");
                }else{
                    redireccionar("/Login/index/error_1");
                }
                
            } else {
                if(Sesion::sesionCreada()){ //si ya estamos logeados redireccionamos a raíz
                    redireccionar("/Usuarios");
                }
                $this->datos['error']=$error;
                $this->vista("usuarios/inicia_sesion",$this->datos);
            }
        }

        public function cerrarSesion(){
            Sesion::cerrarSesion();
            redireccionar("/Usuarios");
        }

        
    }