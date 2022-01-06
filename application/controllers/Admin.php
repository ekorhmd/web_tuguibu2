<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('ModelData');
    }

    public function index()
    {
        if ($this->session->userdata('username')) {
            redirect('admin/dashboard');
        }

        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('admin/login');
        } else {
            $this->_login();
        }
    }

    public function _login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $user = $this->ModelData->get($username);

        if ($user) {
            if (password_verify($password, $user->password)) {
                $this->session->set_userdata(['username' => $user->username]);
                $this->session->set_flashdata('sukses', '<strong>Login berhasil!</strong> Selamat Datang ' . $user->nama);
                redirect('admin/dashboard');
            } else {
                $this->session->set_flashdata('error', 'Username atau password salah');
                redirect('admin');
            }
        } else {
            $this->session->set_flashdata('error', 'Username atau password salah');
            redirect('admin');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('username');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> You have been logged out! </div>');
        redirect('admin');
    }

    public function dashboard()
    {
        if (!$this->session->userdata('username')) {
            redirect('admin');
        }

        $user = $this->ModelData->get($this->session->userdata('username'));
        $data = [
            'active' => 'Dashboard',
            'sidebar' => 'Dashboard',
            'nama' => $user->nama,
        ];
        $this->load->view('admin/templates/header');
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('admin/dashboard');
        $this->load->view('admin/templates/footer');
        $this->load->view('admin/templates/modal');
    }
}
