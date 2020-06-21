<?php

class Model_barang extends CI_model
{

    public function tampil_data()
    {
        $sql = 'SELECT *
                        FROM tb_barang                                                
                        WHERE stok > 0';

        $result = $this->db->query($sql);
        if ($result->num_rows() > 0) {
            return $result;
        } else {
            return false;
        }
        //return $this->db->where_not_in('stok', '0')->get('tb_barang');
    }

    public function find($id)
    {
        $result = $this->db->where('id_brg', $id)
            ->limit(1)
            ->get('tb_barang');
        if ($result->num_rows() > 0) {
            return $result->row();
        } else {
            return array();
        }
    }

    public function detail_brg($id_brg)
    {
        $result = $this->db->where('id_brg', $id_brg)->get('tb_barang');
        if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return false;
        }
    }
}
