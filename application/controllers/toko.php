<?php

class toko extends CI_Controller
{
    
//satu kontrole mau pake sebaiknya simpan di konstrakted 
public function __construct()
{
    parent::__construct(); //untuk menjalankan fungsi kontrak yang ada di kelas ci kontroleer
    $this->load->model('m_toko');
    $this->load->library('form_validation');
}

public function index()
{
    // $this->load->model('Siswa_model'); //kalau mau nglod model cuma bisa di method index saja
    $data['judul'] = 'Daftar ikan';    //judul
    $data['tokoikan'] = $this->m_toko->getAlltoko(); //siswanya tuh databsenya
        $this->load->view('Templates/header', $data); //memanggil judul $data
        $this->load->view('toko/index');
        $this->load->view('Templates/footer');
    }
}