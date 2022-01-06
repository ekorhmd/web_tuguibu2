<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Berita extends CI_Controller
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

        $user = $this->ModelData->get($this->session->userdata('username'));
        $berita = $this->ModelData->data_berita();

        $data = [
            'active' => 'Berita Sekolah',
            'sidebar' => 'Berita Sekolah',
            'nama' => $user->nama,
            'berita' => $berita
        ];

        $this->load->view('admin/templates/header');
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('admin/berita/index');
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
            'active' => 'Berita Sekolah',
            'sidebar' => 'Berita Sekolah',
            'nama' => $user->nama
        ];

        $this->form_validation->set_rules('title', 'Judul Berita', 'required|trim', [
            'required' => '%s is required'
        ]);
        $this->form_validation->set_rules('body', 'Isi Berita', 'required|trim', [
            'required' => '%s is required'
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view('admin/templates/header');
            $this->load->view('admin/templates/sidebar', $data);
            $this->load->view('admin/templates/topbar', $data);
            $this->load->view('admin/berita/tambah-berita');
            $this->load->view('admin/templates/footer');
            $this->load->view('admin/templates/modal');
        } else {
            $data = [
                'title' => $this->input->post('title'),
                'body' => $this->input->post('body')
            ];

            $this->ModelData->tambah($data, 'berita');
            $this->session->set_flashdata('sukses', 'Berita sekolah <strong>berhasil</strong> disimpan!');
            redirect('berita');
        }
    }

    public function upload_image()
    {
        if (isset($_FILES["image"]["name"])) {
            $path = FCPATH . '/assets/images/berita/';
            $config['upload_path'] = $path;
            $config['allowed_types'] = 'gif|jpg|jpeg|png|jpeg|bmp';
            $config['encrypt_name'] = TRUE;
            $this->upload->initialize($config);
            if (!$this->upload->do_upload('image')) {
                $this->upload->display_errors();
                return FALSE;
            } else {
                $data = $this->upload->data();
                //Compress Image
                $config['image_library'] = 'gd2';
                $config['source_image'] = $path . $data['file_name'];
                $config['create_thumb'] = FALSE;
                $config['maintain_ratio'] = TRUE;
                $config['quality'] = '60%';
                $config['width'] = 800;
                $config['height'] = 800;
                $config['new_image'] = $path . $data['file_name'];
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();
                echo base_url('assets/images/berita/') . $data['file_name'];
            }
        }
    }

    //Delete image summernote
    function delete_image()
    {
        $src = $this->input->post('src');
        $file_name = str_replace(base_url(), '', $src);
        if (unlink($file_name)) {
            echo 'File Delete Successfully';
        }
    }
}
