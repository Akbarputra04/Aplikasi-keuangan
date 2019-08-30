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

        function getbyid ($id) {

            $this->db->where('id', $id);
            return $this->db->get(TABEL)->row_array();

        }

        function getbyjenis ($jenis, $today) {

            $this->db->where($jenis.'!=', 0);
            $this->db->like('tanggal', '2019-08-27', 'both');
            $this->db->select_sum($jenis, $jenis);
            return $this->db->get(TABEL)->row_array();

        }

        function post ($data) {

            return $this->db->insert(TABEL, $data);

        }

        function update ($data, $id) {
            
            $this->db->where('id', $id);
            return $this->db->update(TABEL, $data);

        }

        function delete ($id) {

            $this->db->where('id', $id);
            return $this->db->delete(TABEL);

        }
        
    }
    