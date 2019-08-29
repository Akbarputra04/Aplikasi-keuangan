<?php

    define("TABEL", "master");
    
    class M_master extends CI_model {

        function getall () {

            return $this->db->get(TABEL)->result_array();

        }

        function getpemasukan ($jenis, $kategori) {
            
            $this->db->where($jenis.'!=', 0);
            $this->db->where('id_kategori', $kategori);
            return $this->db->get(TABEL)->result_array();

        }

        function post ($data) {

            return $this->db->insert(TABEL, $data);

        }
        
    }
    