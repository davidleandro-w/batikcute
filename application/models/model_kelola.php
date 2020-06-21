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

    function user_hapus($id)
    {
        return $this->db->delete('tb_user', array('id' => $id));
    }

    function add_tb_user($params)
    {
        $this->db->insert('tb_user', $params);
        return $this->db->insert_id();
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

    function barang_hapus($id_brg)
    {
        return $this->db->delete('tb_barang', array('id_brg' => $id_brg));
    }

    function add_tb_barang($params)
    {
        $this->db->insert('tb_barang', $params);
        return $this->db->insert_id();
    }

    function get_tb_user($id)
    {
        return $this->db->get_where('tb_user', array('id' => $id))->row_array();
    }

    function update_tb_user($id, $params)
    {
        $this->db->where('id', $id);
        return $this->db->update('tb_user', $params);
    }

    function get_tb_barang($id)
    {
        return $this->db->get_where('tb_barang', array('id_brg' => $id))->row_array();
    }

    function update_tb_barang($id, $params)
    {
        $this->db->where('id_brg', $id);
        return $this->db->update('tb_barang', $params);
    }

    function stok_tampil($status)
    {
        if ($status == "habis") {
            $sql = "SELECT *
            FROM tb_barang
            WHERE stok <= 0";
        } else {
            $sql = "SELECT *
            FROM tb_barang
            WHERE stok > 0";
        }
        $result = $this->db->query($sql);
        return $result->result();
    }

    function stok_pilih($id)
    {
        $sql = "SELECT *
        FROM tb_barang
        WHERE id_brg = $id";
        $result = $this->db->query($sql);
        return $result->row();
    }

    function stok_tambah($id, $jmlh)
    {
        $sql = "UPDATE tb_barang
                SET stok = stok + $jmlh
                WHERE id_brg= $id";
        $this->db->query($sql);
    }

    function stok_sync($id, $jmlh)
    {
        $sql = "UPDATE tb_barang
                SET stok = $jmlh
                WHERE id_brg= $id";
        $this->db->query($sql);
    }
}
