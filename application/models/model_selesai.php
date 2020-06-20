<?php

class Model_selesai extends CI_model
{

    public function tampil_data()
    {
        $result = $this->db->where('id_pemesan', $this->session->userdata('id_user'))
            ->where('status', "selesai")
            ->get('tb_invoice');
        if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return false;
        }
    }
}
