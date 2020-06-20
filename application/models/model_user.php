<?php

class Model_user extends CI_model
{

    public function detail_user()
    {
        $id_user = $this->session->userdata('id_user');
        $result = $this->db->where('id', $id_user)->get('tb_user');
        if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return false;
        }
    }

    function get_tb_user()
    {
        $id = $this->session->userdata('id_user');
        return $this->db->get_where('tb_user', array('id' => $id))->row_array();
    }

    function update_tb_user($params)
    {
        $id = $this->session->userdata('id_user');
        $this->db->where('id', $id);
        return $this->db->update('tb_user', $params);
    }
}
