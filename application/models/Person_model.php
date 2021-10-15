<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Person_model extends CI_Model
{
    public function get_person()
    {
        $query = $this->db->select('person.*, desa.nama_desa')
            ->from('person')
            ->join('desa', 'person.id_desa = desa.id_desa')
            ->order_by('person.nik')
            ->get();
        return $query;
    }

    public function get_detail_person($nik)
    {
        $query = $this->db->select('person.*, desa.nama_desa')
            ->from('person')
            ->join('desa', 'person.id_desa = desa.id_desa')
            ->where('nik', $nik)
            ->get();
        return $query;
    }

    public function get_korban()
    {
        return $this->db->get('korban');
    }

    public function get_detail_korban($id)
    {

        // $this->db->select('*');
        // $this->db->from('korban');
        // $this->db->where('id_korban', $id);
        // $this->db->get()->row_array();

        $query = $this->db->select('korban.*, desa.nama_desa')
            ->from('korban')
            ->join('desa', 'korban.id_desa = desa.id_desa')
            ->where('id_korban', $id)
            ->get();
        return $query;
    }

    public function get_pelaku()
    {
        return $this->db->get('pelaku');
    }

    public function get_detail_pelaku($id)
    {

        $query = $this->db->select('pelaku.*, desa.nama_desa, pengaduan_kasus.kategori_kekerasan')
            ->from('pelaku')
            ->join('desa', 'pelaku.id_desa = desa.id_desa')
            ->join('pengaduan_kasus', 'pelaku.id_pengaduan = pengaduan_kasus.id_pengaduan')
            ->where('id_pelaku', $id)
            ->get();
        return $query;
    }

    public function addperson()
    {
        $data = [
            'nik' =>  htmlspecialchars($this->input->post('nik', true)),
            'nama_person' =>  htmlspecialchars($this->input->post('nama_person', true)),
            'jenis_kelamin' => htmlspecialchars($this->input->post('jenis_kelamin', true)),
            'tempat_lahir' => htmlspecialchars($this->input->post('tempat_lahir', true)),
            'tanggal_lahir' => htmlspecialchars($this->input->post('tanggal_lahir', true)),
            'agama' => $this->input->post('agama', true),
            'alamat' => htmlspecialchars($this->input->post('alamat', true)),
            'umur' => htmlspecialchars($this->input->post('umur', true)),
            'nama_orang_tua' => $this->input->post('nama_orang_tua', true),
            'pendidikan_terakhir' => $this->input->post('pendidikan_terakhir', true),
            'pekerjaan' => $this->input->post('pekerjaan', true),
            'status_perkawinan' => $this->input->post('status_perkawinan', true),
            'status_person' => $this->input->post('status_person', true),
            'jumlah_saudara' => $this->input->post('jumlah_saudara', true),
            'hubungan_dengan_korban' => $this->input->post('hubungan_dengan_korban', true),
            'id_desa' => $this->input->post('nama_desa', true),
            'date_created' => date('Y-m-d h:i:s')
        ];

        // insert ke dalam database
        $this->db->insert('person', $data);
    }

    public function editperson()
    {
        $data = [
            // 'nik' =>  htmlspecialchars($this->input->post('nik', true)),
            'nama_person' =>  htmlspecialchars($this->input->post('nama_person', true)),
            'jenis_kelamin' => htmlspecialchars($this->input->post('jenis_kelamin', true)),
            'tempat_lahir' => htmlspecialchars($this->input->post('tempat_lahir', true)),
            'tanggal_lahir' => htmlspecialchars($this->input->post('tanggal_lahir', true)),
            'agama' => $this->input->post('agama', true),
            'alamat' => htmlspecialchars($this->input->post('alamat', true)),
            'umur' => htmlspecialchars($this->input->post('umur', true)),
            'nama_orang_tua' => $this->input->post('nama_orang_tua', true),
            'pendidikan_terakhir' => $this->input->post('pendidikan_terakhir', true),
            'pekerjaan' => $this->input->post('pekerjaan', true),
            'status_perkawinan' => $this->input->post('status_perkawinan', true),
            'status_person' => $this->input->post('status_person', true),
            'jumlah_saudara' => $this->input->post('jumlah_saudara', true),
            'hubungan_dengan_korban' => $this->input->post('hubungan_dengan_korban', true),
            'id_desa' => $this->input->post('nama_desa', true),
            'date_created' => date('Y-m-d h:i:s')
        ];

        // update ke dalam database
        $this->db->where('nik', $this->input->post('nik'));
        $this->db->update('person', $data,);
    }

    public function delete($nik)
    {
        $this->db->where('nik', $nik);
        // $this->_deleteImage($id);
        $this->db->delete('person');
    }
}