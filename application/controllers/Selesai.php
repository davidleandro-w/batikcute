<?php

class Selesai extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        if ($this->model_auth->isNotLogin()) redirect(site_url('auth/login'));
    }

    public function index()
    {
        $data['selesai'] = $this->model_selesai->tampil_data();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('selesai', $data);
        $this->load->view('templates/footer');
    }
}
