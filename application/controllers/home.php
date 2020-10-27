<?php

class home extends CI_Controller {
    // memanggil di folder view
    public function index($ikan = ''){       //$nama adalah mengirim data ke view tapi lewat url dan kalau tidak di isi akn default. contoh http://localhost/ci-app/home/index/aku
        $data['judul'] = 'Halaman Home';     //U mengubah  judul dengan $data di header
        $data['nama'] = $ikan;
        $this->load->view('templates/header', $data);
        $this->load->view('home/index', $data); //menampilkan index di view/home
        $this->load->view('templates/footer');
    }
}