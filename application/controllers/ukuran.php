<?php

class Ukuran extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        if ($this->model_auth->isNotLogin()) redirect(site_url('auth/login'));
    }

    public function xl()
    {
        $data['xl'] = $this->model_ukuran->data_xl()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('ukr_xl', $data);
        $this->load->view('templates/footer');
    }
    public function l()
    {
        $data['l'] = $this->model_ukuran->data_l()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('ukr_l', $data);
        $this->load->view('templates/footer');
    }
    public function m()
    {
        $data['m'] = $this->model_ukuran->data_m()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('ukr_m', $data);
        $this->load->view('templates/footer');
    }
    public function s()
    {
        $data['s'] = $this->model_ukuran->data_s()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('ukr_s', $data);
        $this->load->view('templates/footer');
    }
}
