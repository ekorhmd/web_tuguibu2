<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Page extends CI_Controller
{
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

    public function fasilitas()
    {
        $data = [
            'active' => 'Fasilitas'
        ];
        $this->load->view('templates/header');
        $this->load->view('templates/navbar', $data);
        $this->load->view('fasilitas');
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

    public function ekstrakulikuler()
    {
        $data = [
            'active' => 'Ekstrakulikuler'
        ];
        $this->load->view('templates/header');
        $this->load->view('templates/navbar', $data);
        $this->load->view('ekstrakulikuler');
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
