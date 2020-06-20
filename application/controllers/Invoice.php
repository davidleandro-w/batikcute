<?php

class Invoice extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        if ($this->model_auth->isNotLogin()) redirect(site_url('auth/login'));
    }

    public function index()
    {
        $data['invoice'] = $this->model_invoice->tampil_data();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('invoice', $data);
        $this->load->view('templates/footer');
    }

    public function detail($id_invoice)
    {
        $data['invoice'] = $this->model_invoice->ambil_id_invoice($id_invoice);
        $data['pesanan'] = $this->model_invoice->ambil_id_pesanan($id_invoice);
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('detail_invoice', $data);
        $this->load->view('templates/footer');
    }

    public function detail_pesanan($id_invoice)
    {
        $data['invoice'] = $this->model_invoice->ambil_id_invoice($id_invoice);
        $data['pesanan'] = $this->model_invoice->ambil_id_pesanan($id_invoice);
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('detail_pesanan', $data);
        $this->load->view('templates/footer');
    }

    public function bayar($id_invoice)
    {
        $data['invoice'] = $this->model_invoice->ambil_id_invoice($id_invoice);
        $this->model_invoice->set_bayar($id_invoice);
        redirect('send_email', $data);
    }
}
