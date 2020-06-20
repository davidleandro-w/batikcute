<?php

class Model_pengiriman extends CI_model
{

    public function tampil_data()
    {
        $result = $this->db->where('id_pemesan', $this->session->userdata('id_user'))
            ->where('status', "dikirim")
            ->get('tb_invoice');
        if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return false;
        }
    }

    public function set_diterima($id_invoice)
    {
        $this->db->select('status');
        $this->db->from('tb_invoice');
        $this->db->where('id', $id_invoice);
        $this->db->set('status', 'selesai');
        $this->db->update('tb_invoice');
    }
}
