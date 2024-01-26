<?php 

    class PuebloModelo {
        private $db;

        public function __construct() {
            $this->db = new Base;
        }

        public function obtenerPueblos() {
            $this->db->query("SELECT * FROM MUNICIPIO");
            return $this->db->registros();
        }

        public function infoPueblo($id) {
            $this->db->query("SELECT * FROM MUNICIPIO WHERE id_municipio=$id");
            return $this->db->registro();
        }

        public function serviciosPueblo($id) {
            $this->db->query("SELECT * FROM SERVICIO s 
                                    NATURAL JOIN DISPONER_SERVICIO ds
                                    WHERE ds.id_municipio=$id");
            return $this->db->registros();
        }

        
    }