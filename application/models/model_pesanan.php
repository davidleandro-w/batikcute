<?php

class Model_pesanan extends CI_Model
{

    public function ambil_id_invoice($id_invoice)
    {
        $result = $this->db->where('id', $id_invoice)->limit(1)->get('tb_invoice');
        if ($result->num_rows() > 0) {
            return $result->row();
        } else {
            return false;
        }
    }

    public function ambil_id_pesanan($id_invoice)
    {
        $result = $this->db->where('id_invoice', $id_invoice)->get('tb_pesanan');
        if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return false;
        }
    }

    function belum_dibayar()
    {
        $sql = "SELECT  tb_invoice.id as id,
                        tb_invoice.id_pemesan as id_pemesan,
                        tb_user.email as email,
                        tb_invoice.tgl_pesan as tgl_pesan,
                        tb_invoice.batas_bayar as batas_bayar
                FROM tb_invoice
                JOIN tb_user ON tb_user.id = tb_invoice.id_pemesan
                WHERE tb_invoice.status = 'belum dibayar'
                ORDER BY tgl_pesan";
        $result = $this->db->query($sql);
        return $result->result();
    }

    function harus_dikemas()
    {
        $sql = "SELECT  tb_invoice.id as id,
                        tb_invoice.id_pemesan as id_pemesan,
                        tb_invoice.nama as nama,
                        tb_invoice.alamat as alamat,
                        tb_invoice.no_telp as no_telp,
                        tb_invoice.bank as bank,
                        tb_invoice.kurir as kurir
                FROM tb_invoice                
                WHERE tb_invoice.status = 'terbayar'
                ORDER BY tb_invoice.tgl_pesan";
        $result = $this->db->query($sql);
        return $result->result();
    }

    function kirim($id)
    {
        $sql = "UPDATE tb_invoice
                SET status = 'dikirim'
                WHERE id = $id";
        $this->db->query($sql);
    }

    function dalam_pengiriman()
    {
        $sql = "SELECT  tb_invoice.id as id,
                        tb_invoice.nama as nama,
                        tb_invoice.alamat as alamat,
                        tb_invoice.no_telp as no_telp,
                        tb_invoice.kurir as kurir
                FROM tb_invoice                
                WHERE tb_invoice.status = 'dikirim'
                ORDER BY id";
        $result = $this->db->query($sql);
        return $result->result();
    }

    function selesai()
    {
        $sql = "SELECT  tb_invoice.id as id,
                        tb_invoice.id_pemesan as id_pemesan,
                        tb_invoice.nama as nama,
                        tb_invoice.alamat as alamat,
                        tb_invoice.no_telp as no_telp
                FROM tb_invoice                
                WHERE tb_invoice.status = 'selesai'
                ORDER BY id";
        $result = $this->db->query($sql);
        return $result->result();
    }
}
