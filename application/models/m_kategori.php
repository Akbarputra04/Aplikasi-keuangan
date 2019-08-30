<?php

    class M_kategori extends CI_model {

        function getall () {

            return $this->db->get('kategori')->result_array();

        }

        function getbyid ($id) {

            $this->db->where('id_kategori', $id);
            return $this->db->get('kategori')->row_array();

        }

        function post ($data) {

            return $this->db->insert('kategori', $data);

        }

        function update ($data, $id) {

            $this->db->where('id_kategori', $id);
            return $this->db->update('kategori', $data);

        }

        function delete ($id) {

            $this->db->where('id_kategori', $id);
            return $this->db->delete('kategori');

        }
        
    }
    