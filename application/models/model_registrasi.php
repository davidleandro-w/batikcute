<?php

class Model_registrasi extends CI_Model
{
    function registrasi($params)
    {
        $this->db->insert('tb_user', $params);
        return $this->db->insert_id();
    }
}
