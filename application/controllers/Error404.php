<?php

defined('BASEPATH') or exit('No direct script access allowes');

class Error404 extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        if ($this->model_auth->isNotLogin()) redirect(site_url('auth/login'));
    }


    public function index()
    {
        $this->load->view('templates/header');
        $this->load->view('error');
        $this->load->view('templates/footer');
    }
}
