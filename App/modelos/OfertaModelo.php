<?php 

    class OfertaModelo {
        private $db;

        public function __construct() {
            $this->db = new Base;
        }

        public function obtenerUsuarios() {
            $this->db->query("SELECT * FROM USUARIO");
            return $this->db->registros();
        }

       public function obtenerOfertas(){
        $this->db->query("SELECT * FROM OFERTA");
        return $this->db->registros();
       }
        
       public function EliminaOfertas($id){
        $this->db->query("DELETE FROM OFERTA WHERE id_oferta=$id");
        return $this->db->registros();
       }

       public function TipoOfertas($tipo){
        $this->db->query("SELECT * FROM OFERTA WHERE tipo_oferta=$tipo");
        return $this->db->registros();
       }
        
    }