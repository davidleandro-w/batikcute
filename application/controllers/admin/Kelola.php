<?php

class Kelola extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if ($this->model_auth->isNotLogin()) redirect(site_url('auth/login'));
        if ($this->session->userdata('role_id') != 1) {
            redirect(site_url('Error404'));
        };
    }

    function user_tampil()
    {
        $data['admin'] = $this->model_kelola->user_tampil(1);
        $data['user'] = $this->model_kelola->user_tampil(2);
        $this->load->view('admin/templates/header');
        $this->load->view('admin/templates/sidebar');
        $this->load->view('admin/kelola/user/tampil', $data);
        $this->load->view('admin/templates/footer');
    }

    function barang_tampil($tag)
    {
        if ($tag == "all") {
            $data['barang'] = $this->model_kelola->barang_tampil('all');
        } else {
            $data['barang'] = $this->model_kelola->barang_tampil($tag);
        }
        $this->load->view('admin/templates/header');
        $this->load->view('admin/templates/sidebar');
        $this->load->view('admin/kelola/barang/tampil', $data);
        $this->load->view('admin/templates/footer');
    }
}
