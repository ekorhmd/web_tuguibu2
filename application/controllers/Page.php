<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Page extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('ModelData');
    }

    public function index()
    {
        $data = [
            'active' => 'Home'
        ];
        $this->load->view('templates/header');
        $this->load->view('templates/navbar', $data);
        $this->load->view('index');
        $this->load->view('templates/footer');
    }

    public function profil()
    {
        $data = [
            'active' => 'Profil'
        ];
        $this->load->view('templates/header');
        $this->load->view('templates/navbar', $data);
        $this->load->view('profil');
        $this->load->view('templates/footer');
    }

    public function kepegawaian()
    {
        $guru =  $this->ModelData->data_guru();

        $data = [
            'active' => 'Profil',
            'guru' => $guru
        ];
        $this->load->view('templates/header');
        $this->load->view('templates/navbar', $data);
        $this->load->view('kepegawaian');
        $this->load->view('templates/footer');
    }

    public function kurikulum()
    {
        $guru =  $this->ModelData->data_guru();
        $akademik = $this->ModelData->data_akademik();

        $data = [
            'active' => 'Profil',
            'guru' => $guru,
            'akademik' => $akademik
        ];

        $this->load->view('templates/header');
        $this->load->view('templates/navbar', $data);
        $this->load->view('kurikulum', $data);
        $this->load->view('templates/footer');
    }

    public function visi_misi()
    {
        $data = [
            'active' => 'Profil'
        ];
        $this->load->view('templates/header');
        $this->load->view('templates/navbar', $data);
        $this->load->view('visi-misi');
        $this->load->view('templates/footer');
    }

    public function pendaftaran()
    {
        $data = [
            'active' => 'Pendaftaran'
        ];
        $this->load->view('templates/header');
        $this->load->view('templates/navbar', $data);
        $this->load->view('pendaftaran');
        $this->load->view('templates/footer');
    }

    public function sarana_prasarana()
    {
        $data = [
            'active' => 'Profil'
        ];
        $this->load->view('templates/header');
        $this->load->view('templates/navbar', $data);
        $this->load->view('sarana-prasarana');
        $this->load->view('templates/footer');
    }

    public function galeri()
    {
        $data = [
            'active' => 'Galeri'
        ];
        $this->load->view('templates/header');
        $this->load->view('templates/navbar', $data);
        $this->load->view('galeri');
        $this->load->view('templates/footer');
    }

    public function berita()
    {
        $data = [
            'active' => 'Berita Sekolah'
        ];
        $this->load->view('templates/header');
        $this->load->view('templates/navbar', $data);
        $this->load->view('berita');
        $this->load->view('templates/footer');
    }

    public function prestasi()
    {
        $data = [
            'active' => 'Prestasi'
        ];
        $this->load->view('templates/header');
        $this->load->view('templates/navbar', $data);
        $this->load->view('prestasi');
        $this->load->view('templates/footer');
    }

    public function contact()
    {
        $data = [
            'active' => 'Contact Us'
        ];
        $this->load->view('templates/header');
        $this->load->view('templates/navbar', $data);
        $this->load->view('contact');
        $this->load->view('templates/footer');
    }
}
