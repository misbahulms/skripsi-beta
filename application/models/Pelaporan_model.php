<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pelaporan_model extends CI_Model
{

    public function get_pelaporan()
    {
        $query = $this->db->select('pelaporan.*, status_laporan.keterangan, desa.nama_desa, kecamatan.nama_kecamatan, users.nama')
            ->from('pelaporan')
            ->join('status_laporan', 'pelaporan.id_status = status_laporan.id_status')
            ->join('desa', 'pelaporan.id_desa = desa.id_desa')
            ->join('kecamatan', 'desa.id_kecamatan = kecamatan.id_kecamatan')
            ->join('users', 'pelaporan.id_user = users.id_user')
            ->order_by('pelaporan.id_pelapor', 'DESC')
            ->get()->result_array();
        return $query;
    }

    public function get_detail($id)
    {
        $query = $this->db->select('pelaporan.*, status_laporan.keterangan, desa.nama_desa, kecamatan.nama_kecamatan, users.nama')
            ->from('pelaporan')
            ->join('status_laporan', 'pelaporan.id_status = status_laporan.id_status')
            ->join('desa', 'pelaporan.id_desa = desa.id_desa')
            ->join('kecamatan', 'desa.id_kecamatan = kecamatan.id_kecamatan')
            ->join('users', 'pelaporan.id_user = users.id_user')
            ->where('id_pelapor', $id)
            ->get();
        return $query;
    }

    public function addpelaporan()
    {
        $data = [
            // 'nama_pelapor' => $this->input->post('nama_pelapor', true),
            'id_user' => $this->input->post('id_user'),
            'id_desa' => $this->input->post('id_desa'),
            'no_hp' => $this->input->post('no_hp', true),
            'alamat_pelapor' => $this->input->post('alamat_pelapor', true),
            'tanggal_pelaporan' =>  date('Y-m-d h:i:s'),
            'korban_kekerasan' => $this->input->post('korban_kekerasan', true),
            'tempat_kejadian' => $this->input->post('tempat_kejadian', true),
            'alamat_kejadian' => $this->input->post('alamat_kejadian', true),
            'kronologis_kejadian' => $this->input->post('kronologis_kejadian', true),
            'image' => $this->_uploadImage(),
            'hubungan_dengan_korban' => $this->input->post('hubungan_dengan_korban', true),
            'id_status' => 1,
            'date_created' => date('Y-m-d h:i:s')
        ];

        // insert ke dalam database
        $this->db->insert('pelaporan', $data);
    }

    public function editpelaporan()
    {
        $data = [
            // 'id_user' => $this->input->post('id_user'),
            'id_desa' => $this->input->post('id_desa'),
            'no_hp' => $this->input->post('no_hp', true),
            'alamat_pelapor' => $this->input->post('alamat_pelapor', true),
            'tanggal_pelaporan' =>  date('Y-m-d h:i:s'),
            'korban_kekerasan' => $this->input->post('korban_kekerasan', true),
            'tempat_kejadian' => $this->input->post('tempat_kejadian', true),
            'alamat_kejadian' => $this->input->post('alamat_kejadian', true),
            'kronologis_kejadian' => $this->input->post('kronologis_kejadian', true),
            // 'image' => $this->_uploadImage(),
            'hubungan_dengan_korban' => $this->input->post('hubungan_dengan_korban', true),
            'date_created' => date('Y-m-d h:i:s')


        ];

        // if (!empty($_FILES["image"]["name"])) {
        //     $this->image = $this->_uploadImage();
        // } else {
        //     $this->image = $data["old_image"];
        // }

        // insert ke dalam database
        $this->db->where('id_pelapor', $this->input->post('id_pelapor'));
        $this->db->update('pelaporan', $data,);
    }

    public function delete($id)
    {
        $this->db->where('id_pelapor', $id);
        // $this->_deleteImage($id);
        $this->db->delete('pelaporan');
    }

    public function get_desa()
    {
        $query = $this->db->select('desa.*, kecamatan.nama_kecamatan')
            ->from('desa')
            ->join('kecamatan', 'desa.id_kecamatan = kecamatan.id_kecamatan')
            ->get()->result_array();
        return $query;
    }

    private function _uploadImage()
    {
        $config['upload_path']    = './assets/images/';
        $config['allowed_types']  = 'gif|jpg|png';
        // $config['file_name']      = $this->id_pelapor;
        $config['overwrite']      = true;
        $config['max_size']       = 1024;

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('image')) {
            return $this->upload->data("file_name");
        }

        return "default.png";
    }

    private function _deleteImage($id)
    {
        $pelaporan = $this->get_detail($id);
        if ($pelaporan->image != "default.png") {
            $filename = explode(".", $pelaporan->image[0]);
            return array_map('unlink', glob(FCPATH . "assets/images/$filename.*"));
        }
    }

    public function get_status($id_pelapor, $id_status)
    {
        $update_status = "UPDATE pelaporan SET id_status = '$id_status' WHERE id_pelapor = " . $id_pelapor;
        return $this->db->query($update_status);
    }
}