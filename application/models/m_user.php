<?php

    class M_user extends CI_model {

        function getall () {

            return $this->db->get('user')->result_array();

        }

        function getlevel () {

            return $this->db->get('level')->result_array();

        }

        function delete ($id) {

            $this->db->where('id', $id);
            return $this->db->delete('user');

        }
        
    }
    