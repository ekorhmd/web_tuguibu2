<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('ModelData');
    }

    public function index()
    {
        if (!$this->session->userdata('username')) {
            redirect('admin');
        }

        $user_login = $this->ModelData->get($this->session->userdata('username'));
        $user = $this->ModelData->data_pengguna();

        $data = [
            'active' => 'Pengguna',
            'sidebar' => 'Data Pengguna',
            'nama' => $user_login->nama,
            'user' => $user
        ];
        $this->load->view('admin/templates/header');
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('admin/user/data-user');
        $this->load->view('admin/templates/footer');
        $this->load->view('admin/templates/modal');
    }

    public function tambah()
    {
        if (!$this->session->userdata('username')) {
            redirect('admin');
        }

        $user = $this->ModelData->get($this->session->userdata('username'));
        $data = [
            'active' => 'Pengguna',
            'sidebar' => 'Tambah Pengguna',
            'nama' => $user->nama
        ];

        $this->form_validation->set_rules(
            'nama',
            'Nama Lengkap',
            'required|trim',
            array(
                'required' => '%s is required.',
            )
        );

        $this->form_validation->set_rules(
            'username',
            'Username',
            'required|trim|is_unique[user.username]',
            array(
                'required' => '%s is required.',
                'is_unique' => '%s has been used'
            )
        );

        $this->form_validation->set_rules(
            'password',
            'Password',
            'required|trim|matches[password2]|min_length[5]|max_length[15]',
            array(
                'max_length' => '%s cannot be longer than 15 characters',
                'min_length' => '%s must be at least 5 characters',
                'required' => '%s is required.',
                'matches' => 'Password dont matches!'
            )
        );

        $this->form_validation->set_rules(
            'password2',
            'Konfirmasi Password',
            'required|trim|matches[password]|min_length[5]|max_length[15]',
            array(
                'max_length' => '%s cannot be longer than 15 characters',
                'min_length' => '%s must be at least 5 characters',
                'required' => '%s is required.',
                'matches' => 'Password dont matches!'
            )
        );

        if ($this->form_validation->run() == false) {
            $this->load->view('admin/templates/header');
            $this->load->view('admin/templates/sidebar', $data);
            $this->load->view('admin/templates/topbar');
            $this->load->view('admin/user/tambah-user');
            $this->load->view('admin/templates/footer');
        } else {
            $data = [
                'nama' => htmlspecialchars($this->input->post('nama')),
                'username' => htmlspecialchars($this->input->post('username')),
                'password' => htmlspecialchars($this->input->post('password')),
            ];

            $this->ModelData->tambah($data, 'user');
            $this->session->set_flashdata('sukses', 'Data user <strong>berhasil</strong> disimpan!');
            redirect('user');
        }
    }

    public function delete()
    {
        $this->ModelData->delete($this->input->post('id'), 'user');
        $this->session->set_flashdata('sukses', 'Data user <strong>berhasil</strong> dihapus!');
        redirect('user');
    }

    public function edit($id)
    {
        if (!$this->session->userdata('username')) {
            redirect('admin');
        }

        $user = $this->ModelData->get($this->session->userdata('username'));
        $data = [
            'active' => 'Pengguna',
            'sidebar' => 'Ubah Pengguna',
            'nama' => $user->nama,
            'user' => $this->ModelData->get_ubahData('user', ['id' => $id])
        ];

        $this->form_validation->set_rules(
            'nama',
            'Nama Lengkap',
            'required|trim',
            array(
                'required' => '%s is required.',
            )
        );

        if ($this->input->post('username') == $data['user']['username']) {
            $this->form_validation->set_rules(
                'username',
                'Username',
                'required|trim',
                array(
                    'required' => '%s is required.',
                )
            );
        } else {
            $this->form_validation->set_rules(
                'username',
                'Username',
                'required|trim|is_unique[user.username]',
                array(
                    'required' => '%s is required.',
                    'is_unique' => '%s has been used'
                )
            );
        }

        if ($this->form_validation->run() == false) {
            $this->load->view('admin/templates/header');
            $this->load->view('admin/templates/sidebar', $data);
            $this->load->view('admin/templates/topbar');
            $this->load->view('admin/user/ubah-user', $data);
            $this->load->view('admin/templates/footer');
        } else {
            $data = [
                'nama' => htmlspecialchars($this->input->post('nama')),
                'username' => htmlspecialchars($this->input->post('username')),
            ];

            $this->ModelData->ubah($data, $id, 'user');
            $this->session->set_flashdata('sukses', 'Data user <strong>berhasil</strong> diubah!');
            redirect('user');
        }
    }

    public function password($id)
    {
        if (!$this->session->userdata('username')) {
            redirect('admin');
        }

        $user = $this->ModelData->get($this->session->userdata('username'));
        $data = [
            'active' => 'Pengguna',
            'sidebar' => 'Ubah Password',
            'nama' => $user->nama,
            'user' => $this->ModelData->get_ubahData('user', ['id' => $id])
        ];

        $this->form_validation->set_rules(
            'old_password',
            'Password Lama',
            'required|trim|min_length[5]|max_length[15]',
            array(
                'max_length' => '%s cannot be longer than 15 characters',
                'min_length' => '%s must be at least 5 characters',
                'required' => '%s is required.',
                'matches' => 'Password dont matches!'
            )
        );

        $this->form_validation->set_rules(
            'new_password',
            'Password Baru',
            'required|trim|matches[new_password2]|min_length[5]|max_length[15]',
            array(
                'max_length' => '%s cannot be longer than 15 characters',
                'min_length' => '%s must be at least 5 characters',
                'required' => '%s is required.',
                'matches' => 'Password dont matches!'
            )
        );

        $this->form_validation->set_rules(
            'new_password2',
            'Konfirmasi Password Baru',
            'required|trim|matches[new_password]|min_length[5]|max_length[15]',
            array(
                'max_length' => '%s cannot be longer than 15 characters',
                'min_length' => '%s must be at least 5 characters',
                'required' => '%s is required.',
                'matches' => 'Password dont matches!'
            )
        );

        if ($this->form_validation->run() == false) {
            $this->load->view('admin/templates/header');
            $this->load->view('admin/templates/sidebar', $data);
            $this->load->view('admin/templates/topbar');
            $this->load->view('admin/user/ubah-password', $data);
            $this->load->view('admin/templates/footer');
        } else {
            $password = $this->input->post('old_password');

            if (password_verify($password, $user->password)) {
                $data = [
                    'password' => password_hash($this->input->post('new_password'), PASSWORD_DEFAULT)
                ];
                $this->ModelData->ubah($data, $id, 'user');
                $this->session->set_flashdata('sukses', 'Data user <strong>berhasil</strong> disimpan!');
                redirect('user');
            } else {
                $this->session->set_flashdata('gagal', 'Password <strong>gagal</strong> diubah!');
                redirect('user/password/' . $user->id);
            }
        }
    }
}
