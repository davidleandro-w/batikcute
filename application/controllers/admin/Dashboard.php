<?php

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if ($this->model_auth->isNotLogin()) redirect(site_url('auth/login'));
        if ($this->session->userdata('role_id') != 1) {
            redirect(site_url('Error404'));
        };
    }

    function index()
    {
        $total['data1'] = $this->model_admin->pendapatan_perhari_ini();
        $total['data2'] = $this->model_admin->pendapatan_perbulan_ini();
        $total['data3'] = $this->model_admin->harus_dikemas();
        $total['data4'] = $this->model_admin->stok_habis();
        $total['data5'] = $this->model_admin->data_chart_garis();
        $total['data6'] = $this->model_admin->data_chart_pie();
        $total['data7'] = $this->model_admin->data_tabel_keuntungan();
        $total['data8'] = $this->model_admin->data_ranking_pengguna();
        $total['data9'] = $this->model_admin->data_ranking_barang();
        $this->load->view('admin/templates/header');
        $this->load->view('admin/templates/sidebar');
        $this->load->view('admin/dashboard', $total);
        $this->load->view('admin/templates/footer');
    }

    function pdf()
    {
        $this->load->library('dompdf_gen');
        $data['invoice'] = $this->model_laporan->invoice();
        $data['pesanan'] = $this->model_laporan->pesanan();
        $data['stok'] = $this->model_laporan->stok();
        $data['pendapatan'] = $this->model_laporan->pendapatan();
        $data['keuntungan'] = $this->model_laporan->keuntungan();
        $data['barang'] = $this->model_laporan->barang();
        $data['transaksi'] = $this->model_laporan->transaksi();
        $this->load->view('admin/laporan_pdf', $data);

        $paper_size = 'A4';
        $orientation = 'portrait';
        $html = $this->output->get_output();
        $this->dompdf->set_paper($paper_size, $orientation);

        $this->dompdf->load_html($html);
        $this->dompdf->render();
        $this->dompdf->stream("laporan_batikcute.pdf", array('Attachment' => 0));
    }
}
