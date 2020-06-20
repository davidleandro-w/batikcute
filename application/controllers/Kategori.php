<?php

class Kategori extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        if ($this->model_auth->isNotLogin()) redirect(site_url('auth/login'));
    }

    public function pria()
    {
        $data['pria'] = $this->model_kategori->data_pria()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('ktg_pria', $data);
        $this->load->view('templates/footer');
    }
    public function wanita()
    {
        $data['wanita'] = $this->model_kategori->data_wanita()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('ktg_wanita', $data);
        $this->load->view('templates/footer');
    }
    public function anak()
    {
        $data['anak'] = $this->model_kategori->data_anak()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('ktg_anak', $data);
        $this->load->view('templates/footer');
    }
    public function kain()
    {
        $data['kain'] = $this->model_kategori->data_kain()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('ktg_kain', $data);
        $this->load->view('templates/footer');
    }
}
