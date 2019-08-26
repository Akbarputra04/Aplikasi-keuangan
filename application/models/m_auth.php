<?php

    class M_auth extends CI_model {

        function cekuser($data) {
            $this->db->where($data['userlogin']);
            return $this->db->get('user')->row_array();
        }

    }