<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Akademik extends CI_Controller
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
        $akademik = $this->ModelData->data_akademik();

        $data = [
            'active' => 'Kalender Akademik',
            'sidebar' => 'Kalender Akademik',
            'nama' => $user_login->nama,
            'akademik' => $akademik
        ];

        $this->form_validation->set_rules(
            'kegiatan',
            'Kegiatan',
            'required|trim',
            array(
                'required' => '%s is required.',
            )
        );
        $this->form_validation->set_rules(
            'tanggal1',
            'Tanggal Awal',
            'required|trim',
            array(
                'required' => '%s is required.',
            )
        );

        if ($this->form_validation->run() == false) {
            $this->load->view('admin/templates/header');
            $this->load->view('admin/templates/sidebar', $data);
            $this->load->view('admin/templates/topbar', $data);
            $this->load->view('admin/akademik/data-akademik');
            $this->load->view('admin/templates/footer');
            $this->load->view('admin/templates/modal');
        } else {
            $data = [
                'kegiatan' => $this->input->post('kegiatan'),
                'tanggal1' => $this->input->post('tanggal1'),
                'tanggal2' => $this->input->post('tanggal2')
            ];

            $this->ModelData->tambah($data, 'akademik');
            $this->session->set_flashdata('sukses', 'Data akademik <strong>berhasil</strong> disimpan!');
            redirect('akademik');
        }
    }

    public function getIdAkademik()
    {
        echo json_encode($this->ModelData->get_ubahData('akademik', ['id' => $_POST['id']]));
    }

    public function ubah()
    {
        if (!$this->session->userdata('username')) {
            redirect('admin');
        }

        $user_login = $this->ModelData->get($this->session->userdata('username'));
        $akademik = $this->ModelData->data_akademik();

        $data = [
            'active' => 'Kalender Akademik',
            'sidebar' => 'Kalender Akademik',
            'nama' => $user_login->nama,
            'akademik' => $akademik
        ];

        $this->form_validation->set_rules(
            'kegiatan',
            'Kegiatan',
            'required|trim',
            array(
                'required' => '%s is required.',
            )
        );
        $this->form_validation->set_rules(
            'tanggal1',
            'Tanggal Awal',
            'required|trim',
            array(
                'required' => '%s is required.',
            )
        );

        if ($this->form_validation->run() == false) {
            $this->load->view('admin/templates/header');
            $this->load->view('admin/templates/sidebar', $data);
            $this->load->view('admin/templates/topbar', $data);
            $this->load->view('admin/akademik/data-akademik');
            $this->load->view('admin/templates/footer');
            $this->load->view('admin/templates/modal');
        } else {
            $id = $this->input->post('id');
            $data = [
                'kegiatan' => $this->input->post('kegiatan'),
                'tanggal1' => $this->input->post('tanggal1'),
                'tanggal2' => $this->input->post('tanggal2')
            ];

            $this->ModelData->ubah($data, $id, 'akademik');
            $this->session->set_flashdata('sukses', 'Data akademik <strong>berhasil</strong> diubah!');
            redirect('akademik');
        }
    }

    public function delete()
    {
        $this->ModelData->delete($this->input->post('id'), 'akademik');
        $this->session->set_flashdata('sukses', 'Data akademik <strong>berhasil</strong> dihapus!');
        redirect('akademik');
    }
}
