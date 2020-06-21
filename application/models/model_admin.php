<?php

class Model_admin extends CI_Model
{
    function pendapatan_perbulan_ini()
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

    function pendapatan_perhari_ini()
    {
        $sql = 'SELECT sum(harga) as total
                FROM tb_pesanan
                JOIN tb_invoice on tb_invoice.id = tb_pesanan.id_invoice
                WHERE (DATE_FORMAT(tb_invoice.tgl_pesan, "%Y %M %d") = DATE_FORMAT(CURRENT_DATE, "%Y %M %d"))
                AND (tb_invoice.status = "terbayar" OR tb_invoice.status = "dikirim" OR tb_invoice.status = "selesai") ';

        $result = $this->db->query($sql);
        if ($result->num_rows() > 0) {
            return $result->row();
        } else {
            return false;
        }
    }

    function harus_dikemas()
    {
        $sql = 'SELECT sum(jumlah) as total
                FROM tb_pesanan
                JOIN tb_invoice on tb_invoice.id = tb_pesanan.id_invoice
                WHERE tb_invoice.status = "terbayar"';

        $result = $this->db->query($sql);
        if ($result->num_rows() > 0) {
            return $result->row();
        } else {
            return false;
        }
    }

    function stok_habis()
    {
        $sql = 'SELECT count(stok) as total
                FROM tb_barang                
                WHERE tb_barang.stok <= 0';

        $result = $this->db->query($sql);
        if ($result->num_rows() > 0) {
            return $result->row();
        } else {
            return false;
        }
    }

    function data_chart_garis()
    {
        $sql = 'SELECT sum(jumlah) as total, DATE_FORMAT(tb_invoice.tgl_pesan, "%M") as bulan
                FROM tb_pesanan
                JOIN tb_invoice on tb_invoice.id = tb_pesanan.id_invoice
                WHERE (DATE_FORMAT(tb_invoice.tgl_pesan, "%Y") = DATE_FORMAT(CURRENT_DATE, "%Y"))
                AND (tb_invoice.status = "terbayar" OR tb_invoice.status = "dikirim" OR tb_invoice.status = "selesai")                
                GROUP BY DATE_FORMAT(tb_invoice.tgl_pesan, "%Y %M")
                ORDER BY DATE_FORMAT(tb_invoice.tgl_pesan, "%M") DESC';

        $result = $this->db->query($sql);
        if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return false;
        }
    }

    function data_chart_pie()
    {
        $sql = 'SELECT sum(jumlah) as total, tb_barang.kategori as kategori
                FROM tb_pesanan
                JOIN tb_invoice on tb_invoice.id = tb_pesanan.id_invoice
                JOIN tb_barang on tb_barang.id_brg = tb_pesanan.id_brg
                WHERE (DATE_FORMAT(tb_invoice.tgl_pesan, "%Y %M") = DATE_FORMAT(CURRENT_DATE, "%Y %M"))
                AND (tb_invoice.status = "terbayar" OR tb_invoice.status = "dikirim" OR tb_invoice.status = "selesai")
                GROUP BY tb_barang.kategori
                ORDER BY tb_barang.kategori ASC';

        $result = $this->db->query($sql);
        if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return false;
        }
    }

    function data_tabel_keuntungan()
    {
        $sql = 'SELECT 
        DATE_FORMAT(tb_invoice.tgl_pesan, "%Y %M %D") as tanggal, 
        count(tb_invoice.id) as transaksi, sum(jumlah) as terjual, 
        sum(tb_pesanan.harga) as pendapatan, 
        sum((tb_pesanan.harga-(tb_pesanan.jumlah*tb_barang.modal))) as keuntungan
                        FROM tb_pesanan
                        JOIN tb_invoice on tb_invoice.id = tb_pesanan.id_invoice
                        JOIN tb_barang on tb_barang.id_brg = tb_pesanan.id_brg
                        WHERE( DATE_FORMAT(tb_invoice.tgl_pesan, "%Y %M") = DATE_FORMAT(CURRENT_DATE, "%Y %M"))
                        AND (tb_invoice.status = "terbayar" OR tb_invoice.status = "dikirim" OR tb_invoice.status = "selesai")
                        GROUP BY tanggal
                        ORDER BY tanggal ASC';

        $result = $this->db->query($sql);
        if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return false;
        }
    }

    function data_ranking_pengguna()
    {
        $sql = 'SELECT 
        tb_user.id as id, 
        tb_user.email as email, 
        count(tb_invoice.id) as transaksi, 
        sum(tb_pesanan.harga) as uang
                        FROM tb_user
                        JOIN tb_invoice on tb_invoice.id_pemesan = tb_user.id
                        JOIN tb_pesanan on tb_pesanan.id_invoice = tb_invoice.id
                        WHERE (DATE_FORMAT(tb_invoice.tgl_pesan, "%Y %M") = DATE_FORMAT(CURRENT_DATE, "%Y %M"))
                        AND (tb_invoice.status = "terbayar" OR tb_invoice.status = "dikirim" OR tb_invoice.status = "selesai")
                        GROUP BY id
                        ORDER BY id DESC
                        LIMIT 3';

        $result = $this->db->query($sql);
        if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return false;
        }
    }

    function data_ranking_barang()
    {
        $sql = 'SELECT 
        tb_barang.id_brg as id, 
        tb_barang.nama_brg as nama, 
        tb_barang.kategori as kategori, 
        sum(tb_pesanan.jumlah) as terjual
                        FROM tb_barang                        
                        JOIN tb_pesanan on tb_pesanan.id_brg = tb_barang.id_brg
                        JOIN tb_invoice on tb_invoice.id = tb_pesanan.id_invoice
                        WHERE (DATE_FORMAT(tb_invoice.tgl_pesan, "%Y %M") = DATE_FORMAT(CURRENT_DATE, "%Y %M"))
                        AND (tb_invoice.status = "terbayar" OR tb_invoice.status = "dikirim" OR tb_invoice.status = "selesai")
                        GROUP BY id
                        ORDER BY terjual DESC
                        LIMIT 5';

        $result = $this->db->query($sql);
        if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return false;
        }
    }
}
