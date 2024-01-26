<?php 

    class UsuarioModelo {
        private $db;

        public function __construct() {
            $this->db = new Base;
        }

        public function obtenerUsuarios() {
            $this->db->query("SELECT * FROM USUARIO");
            return $this->db->registros();
        }

        public function existeUsuario($datos) {
            $nif=$datos['Nif'];
            $correo=$datos['Email'];
            $this->db->query("SELECT * FROM USUARIO WHERE nif='$nif' OR correo='$correo';");
            return $this->db->rowCount();
        }

        public function registroUsuario($datos) {
            $this->db->query("INSERT INTO USUARIO (nif, nombre, apellidos, correo, contrasena, fecha_nacimiento, tlfn) VALUES (:nif, :nombre, :apellidos, :email, :clave, :fecha, :tlfn)");
            //Vinculamos los valores
            $this->db->bind(':nif', $datos['Nif']);
            $this->db->bind(':nombre' ,$datos['Nombre']);
            $this->db->bind(':apellidos' ,$datos['Apellidos']);
            $this->db->bind(':email' ,$datos['Email']);
            $this->db->bind(':clave' ,$datos['Clave']);
            $this->db->bind(':fecha' ,$datos['FechaN']);
            $this->db->bind(':tlfn' ,$datos['TELF']);

            if ($this->db->execute()) {
                return true;
             } else{
                return false;
             }

        }

        public function iniciaSesion($datos) {
            $email=$datos['email'];
            $clave=$datos['clave'];
            $this->db->query("SELECT * FROM USUARIO WHERE email='$email' and clave='$clave';");
            return $this->db->rowCount();
            // return $this->db->registros();
        }

        public function notificaciones($id) {
            $this->db->query("SELECT COUNT(*) as notificaciones FROM NOTIFICACION WHERE id_usuario='$id' and leida='0';");
            return $this->db->registro();
        }

        public function obtenerNotificaciones($id) {

            $this->db->query("SELECT * FROM NOTIFICACION WHERE id_usuario='$id';");
            return $this->db->registros();
        }

        public function obtenerUsuario($nif) {

            $this->db->query("SELECT * FROM USUARIO WHERE nif = '$nif';");
            return $this->db->registro();
        }

        public function cambiarInfoUsuario() {

            $this->db->query("UPDATE USUARIO SET nombre = :nombre, apellidos = :apellidos, correo = :correo  WHERE nif = :nif;");
            //Vinculamos los valores
            $this->db->bind(':nombre', $_POST['nombre']);
            $this->db->bind(':apellidos' , $_POST['apellidos']);
            $this->db->bind(':correo' , $_POST['correo']);
            $this->db->bind(':nif' , $_POST['nif']);
            if ($this->db->execute()) {
                return true;
             } else{
                return false;
             }


        }
    }