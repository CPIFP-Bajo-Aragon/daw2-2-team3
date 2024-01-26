<?php

class LoginModelo
{
    private $db;

    public function __construct()
    {
        $this->db = new Base;
    }


    public function loginEmail($email, $clave)
    {
        $this->db->query("SELECT * FROM USUARIO WHERE correo='$email' and contrasena='$clave';");
        return $this->db->registro();
    }

    
}
