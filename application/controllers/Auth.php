<?php

class Auth extends CI_Controller
{
    public function login()
    {

        //$this->form_validation->set_rules('username', 'Username', 'required',['required' => 'Username wajib diisi']);
        //$this->form_validation->set_rules('password', 'Password', 'required',['required' => 'Password wajib diisi']);

        $this->form_validation->set_rules('email', 'Email', 'required', ['required' => 'Email wajib diisi']);
        $this->form_validation->set_rules('password', 'Password', 'required', ['required' => 'Password wajib diisi']);

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header');
            $this->load->view('login');
        } else {
            $auth = $this->model_auth->cek_login();
            if ($auth == FALSE) {
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Login Gagal</strong><br><small>Email atau Password anda salah..</small>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>');
                redirect('auth/login');
            } else {
                $this->session->set_userdata('email', $auth->email);
                $this->session->set_userdata('id_user', $auth->id);
                $this->session->set_userdata('foto', $auth->foto);
                $this->session->set_userdata('nama_dpn', $auth->nama_dpn);
                $this->session->set_userdata('nama_blkng', $auth->nama_blkng);
                $this->session->set_userdata('role_id', $auth->role_id);

                switch ($auth->role_id) {
                    case '1':
                        redirect('admin/dashboard');
                        break;
                    case '2':
                        redirect('dashboard');
                        break;
                    default:
                        break;
                }
            }
        }
    }

    public function logout()
    {
        // hancurkan semua sesi
        $this->load->library('session');
        $this->session->sess_destroy();
        redirect(site_url('auth/login'));
    }
}
