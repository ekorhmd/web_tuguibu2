<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Guru extends CI_Controller
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
        $guru = $this->ModelData->data_guru();

        $data = [
            'active' => 'Guru',
            'sidebar' => 'Data Guru',
            'nama' => $user->nama,
            'guru' => $guru
        ];
        $this->load->view('admin/templates/header');
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('admin/guru/data-guru');
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
            'active' => 'Guru',
            'sidebar' => 'Tambah Guru',
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
            'tempat_lahir',
            'Tempat Lahir',
            'required|trim',
            array(
                'required' => '%s is required.',
            )
        );
        $this->form_validation->set_rules(
            'tanggal_lahir',
            'Tanggal Lahir',
            'required|trim',
            array(
                'required' => '%s is required.',
            )
        );
        $this->form_validation->set_rules(
            'jabatan',
            'Jabatan',
            'min_length[2]',
            array(
                'min_length' => '%s is required.',
            )
        );
        $this->form_validation->set_rules(
            'alamat',
            'Alamat',
            'required|trim',
            array(
                'required' => '%s is required.',
            )
        );
        $this->form_validation->set_rules(
            'notelp',
            'Nomor Telepon',
            'required|trim',
            array(
                'required' => '%s is required.',
            )
        );

        if ($this->form_validation->run() == false) {
            $this->load->view('admin/templates/header');
            $this->load->view('admin/templates/sidebar', $data);
            $this->load->view('admin/templates/topbar');
            $this->load->view('admin/guru/tambah-guru');
            $this->load->view('admin/templates/footer');
        } else {
            $data = [
                'nama' => htmlspecialchars($this->input->post('nama')),
                'tempat_lahir' => htmlspecialchars($this->input->post('tempat_lahir')),
                'tanggal_lahir' => htmlspecialchars($this->input->post('tanggal_lahir')),
                'mapel1' => htmlspecialchars($this->input->post('mapel')),
                'mapel2' => htmlspecialchars($this->input->post('mapel2')),
                'jabatan' => htmlspecialchars($this->input->post('jabatan')),
                'alamat' => htmlspecialchars($this->input->post('alamat')),
                'notelp' => htmlspecialchars($this->input->post('notelp'))
            ];

            if ($data['jabatan'] === "Kepala Sekolah") {
                $data['priority'] = 1;
            } else if ($data['jabatan'] === "Wakil Kepala Sekolah Bidang Kesiswaan") {
                $data['priority'] = 2;
            } else if ($data['jabatan'] === "Wakil Kepala Sekolah Bidang Kurikulum") {
                $data['priority'] = 3;
            } else if ($data['jabatan'] === "Guru") {
                $data['priority'] = 4;
            } else {
                $data['priority'] = 5;
            }

            $image = $_FILES['image']['name'];
            if ($image) {
                $config['allowed_types'] = 'jpeg|jpg|png';
                $config['max_size']     = '3072';
                $config['upload_path'] = './assets/images/guru';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('image')) {
                    $image = $this->upload->data('file_name');
                    $data['image'] = $image;
                } else {
                    echo $this->upload->display_errors();
                }
            }

            $this->ModelData->tambah($data, 'guru');
            $this->session->set_flashdata('sukses', 'Data guru <strong>berhasil</strong> disimpan!');
            redirect('guru');
        }
    }

    public function delete()
    {
        $id = $this->input->post('id');
        $guru = $this->ModelData->get_ubahData('guru', ['id' => $id]);
        $image = $guru['image'];
        unlink('./assets/images/guru/' . $image);
        $this->ModelData->delete($id, 'guru');
        $this->session->set_flashdata('sukses', 'Data guru <strong>berhasil</strong> dihapus!');
        redirect('guru');
    }

    public function edit($id)
    {
        if (!$this->session->userdata('username')) {
            redirect('admin');
        }

        $user = $this->ModelData->get($this->session->userdata('username'));
        $data = [
            'active' => 'Guru',
            'sidebar' => 'Ubah Guru',
            'nama' => $user->nama,
            'guru' => $this->ModelData->get_ubahData('guru', ['id' => $id])
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
            'tempat_lahir',
            'Tempat Lahir',
            'required|trim',
            array(
                'required' => '%s is required.',
            )
        );
        $this->form_validation->set_rules(
            'tanggal_lahir',
            'Tanggal Lahir',
            'required|trim',
            array(
                'required' => '%s is required.',
            )
        );
        $this->form_validation->set_rules(
            'jabatan',
            'Jabatan',
            'min_length[2]',
            array(
                'min_length' => '%s is required.',
            )
        );
        $this->form_validation->set_rules(
            'alamat',
            'Alamat',
            'required|trim',
            array(
                'required' => '%s is required.',
            )
        );
        $this->form_validation->set_rules(
            'notelp',
            'Nomor Telepon',
            'required|trim',
            array(
                'required' => '%s is required.',
            )
        );

        if ($this->form_validation->run() == false) {
            $this->load->view('admin/templates/header');
            $this->load->view('admin/templates/sidebar', $data);
            $this->load->view('admin/templates/topbar');
            $this->load->view('admin/guru/ubah-guru', $data);
            $this->load->view('admin/templates/footer');
        } else {
            $update = [
                'nama' => htmlspecialchars($this->input->post('nama')),
                'tempat_lahir' => htmlspecialchars($this->input->post('tempat_lahir')),
                'tanggal_lahir' => htmlspecialchars($this->input->post('tanggal_lahir')),
                'mapel1' => htmlspecialchars($this->input->post('mapel')),
                'mapel2' => htmlspecialchars($this->input->post('mapel2')),
                'jabatan' => htmlspecialchars($this->input->post('jabatan')),
                'alamat' => htmlspecialchars($this->input->post('alamat')),
                'notelp' => htmlspecialchars($this->input->post('notelp'))
            ];

            if ($update['jabatan'] === "Kepala Sekolah") {
                $update['priority'] = 1;
            } else if ($update['jabatan'] === "Wakil Kepala Sekolah Bidang Kesiswaan") {
                $update['priority'] = 2;
            } else if ($update['jabatan'] === "Wakil Kepala Sekolah Bidang Kurikulum") {
                $update['priority'] = 3;
            } else if ($update['jabatan'] === "Guru") {
                $update['priority'] = 4;
            } else {
                $update['priority'] = 5;
            }

            $image = $_FILES['image']['name'];
            if ($image) {
                $config['allowed_types'] = 'jpeg|jpg|png';
                $config['max_size']     = '3072';
                $config['upload_path'] = './assets/images/guru';

                $this->load->library('upload', $config);
                var_dump($this->upload->data());

                if ($this->upload->do_upload('image')) {
                    $old_image = $data['guru']['image'];
                    if ($old_image) {
                        unlink('./assets/images/guru/' . $old_image);
                    }

                    $image = $this->upload->data('file_name');
                    $update['image'] = $image;
                } else {
                    echo $this->upload->display_errors();
                }
            }

            $this->ModelData->ubah($update, $id, 'guru');
            $this->session->set_flashdata('sukses', 'Data guru <strong>berhasil</strong> diubah!');
            redirect('guru');
        }
    }

    public function detail($id)
    {
        if (!$this->session->userdata('username')) {
            redirect('admin');
        }

        $user = $this->ModelData->get($this->session->userdata('username'));
        $data = [
            'active' => 'Guru',
            'sidebar' => 'Detail Guru',
            'nama' => $user->nama,
            'guru' => $this->ModelData->get_ubahData('guru', ['id' => $id])
        ];

        $this->load->view('admin/templates/header');
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar');
        $this->load->view('admin/guru/detail-guru', $data);
        $this->load->view('admin/templates/footer');
        $this->load->view('admin/templates/modal');
    }
}
