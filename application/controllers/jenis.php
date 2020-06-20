<?php

class Jenis extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        if ($this->model_auth->isNotLogin()) redirect(site_url('auth/login'));
    }

    public function cap()
    {
        $data['cap'] = $this->model_jenis->data_cap()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('jns_cap', $data);
        $this->load->view('templates/footer');
    }
    public function tulis()
    {
        $data['tulis'] = $this->model_jenis->data_tulis()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('jns_tulis', $data);
        $this->load->view('templates/footer');
    }
}
