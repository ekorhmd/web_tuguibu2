<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class ModelData extends CI_Model
{

    public function get($username)
    {
        $this->db->where('username', $username); // Untuk menambahkan Where Clause : username='$username'
        $result = $this->db->get('user')->row(); // Untuk mengeksekusi dan mengambil data hasil query
        return $result;
    }

    public function data_guru()
    {
        $this->db->from('guru');
        $this->db->order_by("priority", "asc");
        $query = $this->db->get();
        return $query->result_array();
    }

    public function tambah($data, $table)
    {
        $this->db->insert($table, $data);
    }

    public function delete($id, $table)
    {
        $this->db->where('id', $id);
        $this->db->delete($table);
    }

    public function get_ubahData($table, $id)
    {
        return $this->db->get_where($table, $id)->row_array();
    }

    public function ubah($data, $id, $table)
    {
        $this->db->set($data);
        $this->db->where('id', $id);
        $this->db->update($table);
    }

    public function data_pengguna()
    {
        $this->db->from('user');
        $this->db->order_by("nama", "asc");
        $query = $this->db->get();
        return $query->result_array();
    }

    public function data_akademik()
    {
        $this->db->from('akademik');
        // $this->db->order_by("kegiatan", "asc");
        $query = $this->db->get();
        return $query->result_array();
    }

    public function data_berita()
    {
        $this->db->from('berita');
        $this->db->order_by("date", "asc");
        $this->db->limit(4);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function data_berita_limit()
    {
        $this->db->from('berita');
        $this->db->order_by("date", "asc");
        $query = $this->db->get();
        return $query->result_array();
    }
}
