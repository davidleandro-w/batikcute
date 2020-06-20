<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Send_email extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        if ($this->model_auth->isNotLogin()) redirect(site_url('auth/login'));
    }

    public function index()
    {
        $this->load->library('email'); //panggil library email codeigniter
        $config = array(
            'protocol' => 'smtp',
            'smtp_host' => 'ssl://smtp.googlemail.com',
            'smtp_port' => 465,
            'smtp_user' => 'batikcute.manajer@gmail.com', //alamat email gmail
            'smtp_pass' => 'mousehitam74mempesona', //password email 
            'mailtype' => 'html',
            'charset' => 'iso-8859-1',
            'wordwrap' => TRUE
        );
        $message = "<h2><strong>Pembayaran Anda Berhasil</strong></h2>
                    <br><p>Barang akan segera dikirimkan. Terima kasih telah berbelanja di Batikcute.</p>"; //ini adalah isi/body email
        $email = $this->session->userdata('email'); //email penerima

        $this->email->initialize($config);
        $this->email->set_newline("\r\n");
        $this->email->from($config['smtp_user']);
        $this->email->to($email);
        $this->email->subject('Pembayaran Batikcute'); //subjek email
        $this->email->message($message);

        //proses kirim email
        if ($this->email->send()) {
            redirect('pengemasan/email_berhasil');
        } else {
            redirect('pengemasan/email_gagal');
        }
    }
}
