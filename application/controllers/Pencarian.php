<?php

class Pencarian extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        if ($this->model_auth->isNotLogin()) redirect(site_url('auth/login'));
    }

    public function index()
    {
        $keyword = $this->input->post('keyword');
        $data['pencarian'] = "Pencarian : (" . $this->input->post('keyword') . ")";
        $data['barang'] = $this->model_pencarian->get_keyword($keyword);
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('tag', $data);
        $this->load->view('templates/footer');
    }

    public function kategori($tag)
    {
        $keyword = $tag;
        $data['pencarian'] = "Tag Kategori : " . $tag;
        $data['barang'] = $this->model_pencarian->get_kategori($keyword);
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('tag', $data);
        $this->load->view('templates/footer');
    }

    public function ukuran($tag)
    {
        $keyword = $tag;
        $data['pencarian'] = "Tag Ukuran : " . $tag;
        $data['barang'] = $this->model_pencarian->get_ukuran($keyword);
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('tag', $data);
        $this->load->view('templates/footer');
    }

    public function jenis($tag)
    {
        $keyword = $tag;
        $data['pencarian'] = "Tag Jenis : Batik " . $tag;
        $data['barang'] = $this->model_pencarian->get_jenis($keyword);
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('tag', $data);
        $this->load->view('templates/footer');
    }
}
