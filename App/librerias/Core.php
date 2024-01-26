<?php

//Acceso a URL

/*
*mapear la url ingresada en el navegador
*1-Controlador
*2-Metodo 
*3-Parametros
*Ejemplo: /articulo/actualizar/4
*/


class Core{
    protected $controladorActual='Inicio';
    protected $metodoActual='index';
    protected $parametros=[];

    public function __construct(){
        $url = $this->getUrl();
        if (isset($url[0])) {
            if (file_exists('../App/controladores/'.ucwords($url[0].'.php'))) {
                $this->controladorActual = ucwords($url[0]);
                unset($url[0]);                    
            } else {
                //error;
            }
        }

        require_once '../App/controladores/'.$this->controladorActual.'.php';
        $this->controladorActual = new $this->controladorActual;
        
        if (isset($url[1])) {
            if (method_exists($this->controladorActual, $url[1])) {
                $this->metodoActual = $url[1];
                unset($url[1]);
            }
        }
        
        $this->parametros = $url ? array_values($url) : [];

        call_user_func_array([$this->controladorActual,$this->metodoActual], $this->parametros);
    }

    private function getUrl() {
        if(isset($_GET['url'])) {
            $url = $_GET['url'];
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = rtrim($url, '/');
            $url = ltrim($url, '/');
            $url_array = explode('/', $url);
            return $url_array;
        }
    }
}