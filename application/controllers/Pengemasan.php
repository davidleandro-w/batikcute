<?php

class Pengemasan extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        if ($this->model_auth->isNotLogin()) redirect(site_url('auth/login'));
    }

    public function index()
    {
        $data['pengemasan'] = $this->model_pengemasan->tampil_data();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('pengemasan', $data);
        $this->load->view('templates/footer');
    }

    public function email_berhasil()
    {
        $data['pengemasan'] = $this->model_pengemasan->tampil_data();
        $this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Selamat!</strong> Pembayaran berhasil, tunggu notifikasi di email anda.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        </div>');
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('pengemasan', $data);
        $this->load->view('templates/footer');
    }

    public function email_gagal()
    {
        $data['pengemasan'] = $this->model_pengemasan->tampil_data();
        $this->session->set_flashdata('notif', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Mohon maaf!</strong> Email gagal dikirimkan, tetapi pembayaran telah berhasil dilakukan. Akan segera kami proses.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        </div>');
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('pengemasan', $data);
        $this->load->view('templates/footer');
    }
}
