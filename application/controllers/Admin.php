<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function index()
    {
        $data = [
            'active' => 'Dashboard',
            'sidebar' => ''
        ];
        $this->load->view('admin/templates/header');
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar');
        $this->load->view('admin/index');
        $this->load->view('admin/templates/footer');
    }

    public function data_guru()
    {
        $data = [
            'active' => 'Guru',
            'sidebar' => 'Data Guru'
        ];
        $this->load->view('admin/templates/header');
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar');
        $this->load->view('admin/data-guru');
        $this->load->view('admin/templates/footer');
    }

    public function tambah_guru()
    {
        $data = [
            'active' => 'Guru',
            'sidebar' => 'Data Guru'
        ];
        $this->load->view('admin/templates/header');
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar');
        $this->load->view('admin/tambah-guru');
        $this->load->view('admin/templates/footer');
    }
}
