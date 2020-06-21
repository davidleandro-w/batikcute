<?php

class Model_laporan extends CI_Model
{
    function invoice()
    {
        $sql = "SELECT *
        FROM tb_invoice                
        WHERE DATE_FORMAT(tgl_pesan, '%Y %M') = DATE_FORMAT(CURRENT_DATE, '%Y %M')
        ORDER BY tgl_pesan ASC";

        $result = $this->db->query($sql);
        return $result->result();
    }

    function pesanan()
    {
        $sql = "SELECT *
        FROM tb_pesanan as p
        JOIN tb_invoice as i on i.id = p.id_invoice
        WHERE DATE_FORMAT(i.tgl_pesan, '%Y %M') = DATE_FORMAT(CURRENT_DATE, '%Y %M')
        ORDER BY p.id ASC";

        $result = $this->db->query($sql);
        return $result->result();
    }

    function stok()
    {
        $sql = "SELECT *
        FROM tb_barang as b
        ORDER BY b.id_brg ASC";

        $result = $this->db->query($sql);
        return $result->result();
    }

    function pendapatan()
    {
        $sql = 'SELECT sum(harga) as total
                FROM tb_pesanan
                JOIN tb_invoice on tb_invoice.id = tb_pesanan.id_invoice
                WHERE (DATE_FORMAT(tb_invoice.tgl_pesan, "%Y %M") = DATE_FORMAT(CURRENT_DATE, "%Y %M"))
                AND (tb_invoice.status = "terbayar" OR tb_invoice.status = "dikirim" OR tb_invoice.status = "selesai")';

        $result = $this->db->query($sql);
        if ($result->num_rows() > 0) {
            return $result->row();
        } else {
            return false;
        }
    }

    function keuntungan()
    {
        $sql = 'SELECT sum((tb_pesanan.harga-(tb_pesanan.jumlah*tb_barang.modal))) as total
                FROM tb_pesanan
                JOIN tb_barang on tb_barang.id_brg = tb_pesanan.id_brg
                JOIN tb_invoice on tb_invoice.id = tb_pesanan.id_invoice
                WHERE (DATE_FORMAT(tb_invoice.tgl_pesan, "%Y %M") = DATE_FORMAT(CURRENT_DATE, "%Y %M"))
                AND (tb_invoice.status = "terbayar" OR tb_invoice.status = "dikirim" OR tb_invoice.status = "selesai")';

        $result = $this->db->query($sql);
        if ($result->num_rows() > 0) {
            return $result->row();
        } else {
            return false;
        }
    }

    function barang()
    {
        $sql = 'SELECT sum(jumlah) as total
                FROM tb_pesanan
                JOIN tb_invoice on tb_invoice.id = tb_pesanan.id_invoice
                WHERE (DATE_FORMAT(tb_invoice.tgl_pesan, "%Y %M") = DATE_FORMAT(CURRENT_DATE, "%Y %M"))
                AND (tb_invoice.status = "terbayar" OR tb_invoice.status = "dikirim" OR tb_invoice.status = "selesai")                
                GROUP BY DATE_FORMAT(tb_invoice.tgl_pesan, "%Y %M")';

        $result = $this->db->query($sql);
        if ($result->num_rows() > 0) {
            return $result->row();
        } else {
            return false;
        }
    }

    function transaksi()
    {
        $sql = 'SELECT count(jumlah) as total
                FROM tb_pesanan
                JOIN tb_invoice on tb_invoice.id = tb_pesanan.id_invoice
                WHERE (DATE_FORMAT(tb_invoice.tgl_pesan, "%Y %M") = DATE_FORMAT(CURRENT_DATE, "%Y %M"))
                AND (tb_invoice.status = "terbayar" OR tb_invoice.status = "dikirim" OR tb_invoice.status = "selesai")                
                GROUP BY DATE_FORMAT(tb_invoice.tgl_pesan, "%Y %M")';

        $result = $this->db->query($sql);
        if ($result->num_rows() > 0) {
            return $result->row();
        } else {
            return false;
        }
    }
}
