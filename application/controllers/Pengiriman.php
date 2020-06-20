<?php

class Pengiriman extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        if ($this->model_auth->isNotLogin()) redirect(site_url('auth/login'));
    }

    public function index()
    {
        $data['pengiriman'] = $this->model_pengiriman->tampil_data();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('pengiriman', $data);
        $this->load->view('templates/footer');
    }

    public function diterima($id_invoice)
    {
        $this->model_pengiriman->set_diterima($id_invoice);
        redirect('selesai');
    }
}
