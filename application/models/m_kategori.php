<?php

    class M_kategori extends CI_model {

        function getall () {

            return $this->db->get('kategori')->result_array();

        }

        function post ($data) {

            return $this->db->insert('kategori', $data);

        }
        
    }
    