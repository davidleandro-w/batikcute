<?php

class Pesanan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if ($this->model_auth->isNotLogin()) redirect(site_url('auth/login'));
        if ($this->session->userdata('role_id') != 1) {
            redirect(site_url('Error404'));
        };
    }

    public function detail_pesanan($id_invoice)
    {
        $data['invoice'] = $this->model_pesanan->ambil_id_invoice($id_invoice);
        $data['pesanan'] = $this->model_pesanan->ambil_id_pesanan($id_invoice);
        $this->load->view('admin/templates/header');
        $this->load->view('admin/templates/sidebar');
        $this->load->view('admin/pesanan/detail_pesanan', $data);
        $this->load->view('admin/templates/footer');
    }

    function detail($id_invoice)
    {
        $data['invoice'] = $this->model_pesanan->ambil_id_invoice($id_invoice);
        $data['pesanan'] = $this->model_pesanan->ambil_id_pesanan($id_invoice);
        $this->load->view('admin/templates/header');
        $this->load->view('admin/templates/sidebar');
        $this->load->view('admin/pesanan/detail', $data);
        $this->load->view('admin/templates/footer');
    }

    function belum_dibayar()
    {
        $data['pesanan'] = $this->model_pesanan->belum_dibayar();
        $this->load->view('admin/templates/header');
        $this->load->view('admin/templates/sidebar');
        $this->load->view('admin/pesanan/belum_dibayar', $data);
        $this->load->view('admin/templates/footer');
    }

    function harus_dikemas()
    {
        $data['pengemasan'] = $this->model_pesanan->harus_dikemas();
        $this->load->view('admin/templates/header');
        $this->load->view('admin/templates/sidebar');
        $this->load->view('admin/pesanan/harus_dikemas', $data);
        $this->load->view('admin/templates/footer');
    }

    function kirimkan($id)
    {
        $this->model_pesanan->kirim($id);
        redirect('admin/pesanan/harus_dikemas');
    }

    function dalam_pengiriman()
    {
        $data['pengiriman'] = $this->model_pesanan->dalam_pengiriman();
        $this->load->view('admin/templates/header');
        $this->load->view('admin/templates/sidebar');
        $this->load->view('admin/pesanan/dalam_pengiriman', $data);
        $this->load->view('admin/templates/footer');
    }

    function selesai()
    {
        $data['selesai'] = $this->model_pesanan->selesai();
        $this->load->view('admin/templates/header');
        $this->load->view('admin/templates/sidebar');
        $this->load->view('admin/pesanan/selesai', $data);
        $this->load->view('admin/templates/footer');
    }
}
