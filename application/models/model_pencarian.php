<?php

class Model_pencarian extends CI_model
{
    public function get_keyword($keyword)
    {
        $this->db->select('*');
        $this->db->from('tb_barang');
        $this->db->like('nama_brg', $keyword);
        $this->db->where('stok > 0');
        $this->db->or_like('keterangan', $keyword);
        $this->db->where('stok > 0');
        $this->db->or_like('kategori', $keyword);
        $this->db->where('stok > 0');
        $this->db->or_like('jenis', $keyword);
        $this->db->where('stok > 0');
        $this->db->or_like('ukuran', $keyword);
        $this->db->where('stok > 0');
        $this->db->or_like('harga', $keyword);
        $this->db->where('stok > 0');
        return $this->db->get()->result();
    }

    public function get_kategori($keyword)
    {
        $this->db->select('*');
        $this->db->from('tb_barang');
        $this->db->like('kategori', $keyword);
        $this->db->where('stok > 0');
        return $this->db->get()->result();
    }

    public function get_ukuran($keyword)
    {
        $this->db->select('*');
        $this->db->from('tb_barang');
        $this->db->like('ukuran', $keyword);
        $this->db->where('stok > 0');
        return $this->db->get()->result();
    }

    public function get_jenis($keyword)
    {
        $this->db->select('*');
        $this->db->from('tb_barang');
        $this->db->like('jenis', $keyword);
        $this->db->where('stok > 0');
        return $this->db->get()->result();
    }
}
