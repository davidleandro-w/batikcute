<?php

class Dashboard extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        if ($this->model_auth->isNotLogin()) redirect(site_url('auth/login'));
    }

    public function index()
    {
        $data['barang'] = $this->model_barang->tampil_data()->result();

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('dashboard', $data);
        $this->load->view('templates/footer');
    }

    public function tambah_ke_keranjang($id)
    {
        $barang = $this->model_barang->find($id);
        $data = array(
            'id'      => $barang->id_brg,
            'qty'     => 1,
            'price'   => $barang->harga,
            'name'    => $barang->nama_brg,

        );
        $this->cart->insert($data);
        redirect('dashboard');
    }

    public function detail_keranjang()
    {
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('keranjang');
        $this->load->view('templates/footer');
    }

    public function hapus_keranjang()
    {
        $this->cart->destroy();
        redirect('dashboard/detail_keranjang');
    }

    public function pemesanan()
    {
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('pemesanan');
        $this->load->view('templates/footer');
    }

    public function proses_pesanan()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('no_telp', 'No_telp', 'required|integer');

        if ($this->form_validation->run() == FALSE) {
            redirect('dashboard/pemesanan');
        } else {
            $is_processed = $this->model_invoice->index();
            if ($is_processed) {
                $this->cart->destroy();
                redirect('invoice');
            } else {
                echo "Pesanan anda gagal diproses";
            }
        }
    }

    public function detail($id_brg)
    {
        $data['barang'] = $this->model_barang->detail_brg($id_brg);
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('detail_brg', $data);
        $this->load->view('templates/footer');
    }

    public function detail_user()
    {
        $data['user'] = $this->model_user->detail_user();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('detail_user', $data);
        $this->load->view('templates/footer');
    }
}
