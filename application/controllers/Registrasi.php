<?php

class Registrasi extends CI_Controller
{
    public function index()
    {

        $this->form_validation->set_rules('nama_dpn', 'First Name', 'required|max_length[30]');
        $this->form_validation->set_rules('nama_blkng', 'Last Name', 'required|max_length[30]');
        $this->form_validation->set_rules('email', 'Email', 'required|max_length[60]|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required|max_length[30]');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header');
            $this->load->view('registrasi');
        } else {
            if ($this->form_validation->run()) {
                //$hashed_password = password_hash($this->input->post('password'), PASSWORD_DEFAULT);
                $params = array(
                    'nama_dpn' => $this->input->post('nama_dpn'),
                    'nama_blkng' => $this->input->post('nama_blkng'),
                    'email' => $this->input->post('email'),
                    'password' => $this->input->post('password'),
                    'foto' => "default.jpg",
                    'role_id' => 2,
                );
                $this->model_registrasi->registrasi($params);
                redirect('auth/login');
            } else {
                $this->load->model('Gender_model');
                $data['all_genders'] = $this->Gender_model->get_all_genders();

                $this->load->model('Town_city_model');
                $data['all_town_city'] = $this->Town_city_model->get_all_town_city();

                $this->load->model('Province_model');
                $data['all_province'] = $this->Province_model->get_all_province();

                $data['_view'] = 'customer/add';
                $this->load->view('layouts/main', $data);
            }
        }
    }
}
