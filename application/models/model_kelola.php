<?php

class Model_kelola extends CI_Model
{
    function user_tampil($role_id)
    {
        $sql = "SELECT *
                FROM tb_user                
                WHERE role_id='$role_id'";

        $result = $this->db->query($sql);
        if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return false;
        }
    }

    function barang_tampil($tag)
    {
        if ($tag == "all") {
            $sql = "SELECT *
                FROM tb_barang";
        } elseif ($tag == "batik_cap" or $tag == "batik_tulis") {
            $sql = "SELECT *
                FROM tb_barang
                WHERE jenis = '$tag'";
        } else {
            $sql = "SELECT *
                FROM tb_barang
                WHERE kategori = '$tag'";
        }

        $result = $this->db->query($sql);
        if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return false;
        }
    }
}
