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

    function user_hapus($id)
    {
        $this->model_kelola->user_hapus($id);
        redirect('admin/kelola/user_tampil');
    }

    function user_tambah()
    {
        $this->load->library('form_validation');

        $this->form_validation->set_rules('role_id', 'Role Id', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required|max_length[50]');
        $this->form_validation->set_rules('nama_dpn', 'Nama Dpn', 'required|max_length[50]');
        $this->form_validation->set_rules('nama_blkng', 'Nama Blkng', 'required|max_length[50]');
        $this->form_validation->set_rules('email', 'Email', 'required|max_length[50]|valid_email');

        if ($this->form_validation->run()) {
            $foto = $_FILES['foto'];
            if ($foto = '') {
                $foto = 'default.jpg';
            } else {
                $config['upload_path'] = './assets/img/produk/';
                $config['allowed_types'] = 'jpg|png|gif';

                $this->load->library('upload', $config);
                if (!$this->upload->do_upload('foto')) {
                    $foto = 'default.jpg';
                } else {
                    $foto = $this->upload->data('file_name');
                }
            }
            $params = array(
                'role_id' => $this->input->post('role_id'),
                'password' => $this->input->post('password'),
                'nama_dpn' => $this->input->post('nama_dpn'),
                'nama_blkng' => $this->input->post('nama_blkng'),
                'email' => $this->input->post('email'),
                'foto' => $foto,
            );
            $this->model_kelola->add_tb_user($params);
            redirect('admin/kelola/user_tampil');
        } else {
            $data['_view'] = 'user/add';
            $this->load->view('admin/templates/header');
            $this->load->view('admin/templates/sidebar');
            $this->load->view('admin/kelola/user/add', $data);
            $this->load->view('admin/templates/footer');
        }
    }

    function barang_tampil($tag)
    {
        if ($tag == "all") {
            $data['barang'] = $this->model_kelola->barang_tampil('all');
        } else {
            $data['barang'] = $this->model_kelola->barang_tampil($tag);
        }
        $data['tag'] = $tag;
        $this->load->view('admin/templates/header');
        $this->load->view('admin/templates/sidebar');
        $this->load->view('admin/kelola/barang/tampil', $data);
        $this->load->view('admin/templates/footer');
    }

    function barang_hapus($id_brg)
    {
        $this->model_kelola->barang_hapus($id_brg);
        redirect('admin/kelola/barang_tampil/all');
    }

    function barang_tambah()
    {
        $this->load->library('form_validation');

        $this->form_validation->set_rules('nama_brg', 'Nama Brg', 'required|max_length[120]');
        $this->form_validation->set_rules('keterangan', 'Keterangan', 'required|max_length[225]');
        $this->form_validation->set_rules('kategori', 'Kategori', 'required|max_length[60]');
        $this->form_validation->set_rules('jenis', 'Jenis', 'required|max_length[30]');
        $this->form_validation->set_rules('ukuran', 'Ukuran', 'required|max_length[20]');
        $this->form_validation->set_rules('modal', 'Modal', 'required|integer');
        $this->form_validation->set_rules('harga', 'Harga', 'required|integer');
        $this->form_validation->set_rules('stok', 'Stok', 'required|integer');

        if ($this->form_validation->run()) {
            $foto = $_FILES['foto'];
            if ($foto = '') {
                $foto = 'default.jpg';
            } else {
                $config['upload_path'] = './assets/img/produk/';
                $config['allowed_types'] = 'jpg|png|gif';

                $this->load->library('upload', $config);
                if (!$this->upload->do_upload('foto')) {
                    $foto = 'default.jpg';
                } else {
                    $foto = $this->upload->data('file_name');
                }
            }
            $params = array(
                'kategori' => $this->input->post('kategori'),
                'jenis' => $this->input->post('jenis'),
                'ukuran' => $this->input->post('ukuran'),
                'nama_brg' => $this->input->post('nama_brg'),
                'keterangan' => $this->input->post('keterangan'),
                'modal' => $this->input->post('modal'),
                'harga' => $this->input->post('harga'),
                'stok' => $this->input->post('stok'),
                'gambar' => $foto,
            );
            $this->model_kelola->add_tb_barang($params);
            redirect('admin/kelola/barang_tampil/all');
        } else {
            $data['_view'] = 'tb_barang/add';
            $this->load->view('admin/templates/header');
            $this->load->view('admin/templates/sidebar');
            $this->load->view('admin/kelola/barang/add', $data);
            $this->load->view('admin/templates/footer');
        }
    }

    function user_ubah($id)
    {
        $data['tb_user'] = $this->model_kelola->get_tb_user($id);

        if (isset($data['tb_user']['id'])) {
            $this->form_validation->set_rules('password', 'Password', 'required|max_length[50]');
            $this->form_validation->set_rules('nama_dpn', 'Nama Dpn', 'required|max_length[50]');
            $this->form_validation->set_rules('nama_blkng', 'Nama Blkng', 'required|max_length[50]');
            $this->form_validation->set_rules('email', 'Email', 'required|max_length[50]|valid_email');

            if ($this->form_validation->run()) {
                $foto = $_FILES['foto'];
                if ($foto = '') {
                    $foto = $data['tb_user']['foto'];
                } else {
                    $config['upload_path'] = './assets/img/user/';
                    $config['allowed_types'] = 'jpg|png|gif';

                    $this->load->library('upload', $config);
                    if (!$this->upload->do_upload('foto')) {
                        $foto = $data['tb_user']['foto'];
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
                $this->model_kelola->update_tb_user($id, $params);
                redirect('admin/kelola/user_tampil');
            } else {
                $data['_view'] = 'tb_user/edit';
                $this->load->view('admin/templates/header');
                $this->load->view('admin/templates/sidebar');
                $this->load->view('admin/kelola/user/ubah', $data);
                $this->load->view('admin/templates/footer');
            }
        } else
            show_error('The tb_user you are trying to edit does not exist.');
    }

    function barang_ubah($id)
    {
        $data['tb_barang'] = $this->model_kelola->get_tb_barang($id);

        if (isset($data['tb_barang']['id_brg'])) {
            $this->form_validation->set_rules('nama_brg', 'Nama Brg', 'required|max_length[120]');
            $this->form_validation->set_rules('keterangan', 'Keterangan', 'required|max_length[225]');
            $this->form_validation->set_rules('kategori', 'Kategori', 'required|max_length[60]');
            $this->form_validation->set_rules('jenis', 'Jenis', 'required|max_length[30]');
            $this->form_validation->set_rules('ukuran', 'Ukuran', 'required|max_length[20]');
            $this->form_validation->set_rules('modal', 'Modal', 'required|integer');
            $this->form_validation->set_rules('harga', 'Harga', 'required|integer');

            if ($this->form_validation->run()) {
                $foto = $_FILES['foto'];
                if ($foto = '') {
                    $foto = $data['tb_barang']['gambar'];
                } else {
                    $config['upload_path'] = './assets/img/produk/';
                    $config['allowed_types'] = 'jpg|png|gif';

                    $this->load->library('upload', $config);
                    if (!$this->upload->do_upload('foto')) {
                        $foto = $data['tb_barang']['gambar'];
                    } else {
                        $foto = $this->upload->data('file_name');
                    }
                }

                $params = array(
                    'kategori' => $this->input->post('kategori'),
                    'jenis' => $this->input->post('jenis'),
                    'ukuran' => $this->input->post('ukuran'),
                    'nama_brg' => $this->input->post('nama_brg'),
                    'keterangan' => $this->input->post('keterangan'),
                    'modal' => $this->input->post('modal'),
                    'harga' => $this->input->post('harga'),
                    'stok' => $this->input->post('stok'),
                    'gambar' => $foto,
                );
                $this->model_kelola->update_tb_barang($id, $params);
                redirect('admin/kelola/barang_tampil/all');
            } else {
                $data['_view'] = 'tb_barang/edit';
                $this->load->view('admin/templates/header');
                $this->load->view('admin/templates/sidebar');
                $this->load->view('admin/kelola/barang/ubah', $data);
                $this->load->view('admin/templates/footer');
            }
        } else
            show_error('The tb_user you are trying to edit does not exist.');
    }

    function stok_tampil()
    {
        $data['barang'] = $this->model_kelola->stok_tampil('all');
        $data['habis'] = $this->model_kelola->stok_tampil('habis');
        $this->load->view('admin/templates/header');
        $this->load->view('admin/templates/sidebar');
        $this->load->view('admin/kelola/barang/stok', $data);
        $this->load->view('admin/templates/footer');
    }

    function stok_tambah($id)
    {
        $data['barang'] = $this->model_kelola->stok_pilih($id);

        $this->form_validation->set_rules('stok', 'Stok', 'required|integer');
        if ($this->form_validation->run()) {
            $params = $this->input->post('stok');
            $this->model_kelola->stok_tambah($id, $params);
            redirect('admin/kelola/stok_tampil');
        } else {
            $this->load->view('admin/templates/header');
            $this->load->view('admin/templates/sidebar');
            $this->load->view('admin/kelola/barang/tambah_stok', $data);
            $this->load->view('admin/templates/footer');
        }
    }

    function stok_sync($id)
    {
        $data['barang'] = $this->model_kelola->stok_pilih($id);

        $this->form_validation->set_rules('stok', 'Stok', 'required|integer');
        if ($this->form_validation->run()) {
            $params = $this->input->post('stok');
            $this->model_kelola->stok_sync($id, $params);
            redirect('admin/kelola/stok_tampil');
        } else {
            $this->load->view('admin/templates/header');
            $this->load->view('admin/templates/sidebar');
            $this->load->view('admin/kelola/barang/sesuaikan_stok', $data);
            $this->load->view('admin/templates/footer');
        }
    }
}
