<?php

defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if ($this->model_auth->isNotLogin()) redirect(site_url('auth/login'));
    }

    function edit_profile()
    {
        // check if the tb_user exists before trying to edit it
        $data['tb_user'] = $this->model_user->get_tb_user();

        if (isset($data['tb_user']['id'])) {
            $this->form_validation->set_rules('password', 'Password', 'required|max_length[50]');
            $this->form_validation->set_rules('nama_dpn', 'Nama Dpn', 'required|max_length[50]');
            $this->form_validation->set_rules('nama_blkng', 'Nama Blkng', 'required|max_length[50]');

            if ($this->form_validation->run()) {
                $foto = $_FILES['foto'];
                if ($foto = '') {
                } else {
                    $config['upload_path'] = './assets/img/user/';
                    $config['allowed_types'] = 'jpg|png|gif';

                    $this->load->library('upload', $config);
                    if (!$this->upload->do_upload('foto')) {
                        echo "Upload gagal";
                        die();
                    } else {
                        $foto = $this->upload->data('file_name');
                    }
                }

                $params = array(
                    'password' => $this->input->post('password'),
                    'nama_dpn' => $this->input->post('nama_dpn'),
                    'nama_blkng' => $this->input->post('nama_blkng'),
                    'email' => $this->input->post('email'),
                    'foto' => $foto,
                );

                $this->model_user->update_tb_user($params);
                $this->session->set_userdata('foto', $params['foto']);
                $this->session->set_userdata('nama_dpn', $params['nama_dpn']);
                $this->session->set_userdata('nama_blkng', $params['nama_blkng']);
                redirect('dashboard/detail_user');
            } else {
                $data['_view'] = 'tb_user/edit';
                $this->load->view('templates/header');
                $this->load->view('templates/sidebar');
                $this->load->view('edit_user', $data);
                $this->load->view('templates/footer');
            }
        } else
            show_error('The tb_user you are trying to edit does not exist.');
    }
}
