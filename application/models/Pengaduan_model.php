<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengaduan_model extends CI_Model
{
    public function get_pengaduan_kasus()
    {
        $query = $this->db->select('pengaduan_kasus.*, pelaporan.id_user,sub_bentuk_kekerasan.sub_jenis_kekerasan, bentuk_kekerasan.jenis_kekerasan, desa.nama_desa, kecamatan.nama_kecamatan,')
            ->from('pengaduan_kasus')
            ->join('pelaporan', 'pengaduan_kasus.id_pelapor = pelaporan.id_pelapor')
            ->join('desa', 'pelaporan.id_desa = desa.id_desa')
            ->join('kecamatan', 'desa.id_kecamatan = kecamatan.id_kecamatan')
            ->join('sub_bentuk_kekerasan', 'pengaduan_kasus.id_sub_bentuk_kekerasan = sub_bentuk_kekerasan.id_sub_bentuk_kekerasan')
            ->join('bentuk_kekerasan', 'sub_bentuk_kekerasan.id_bentuk_kekerasan = bentuk_kekerasan.id_bentuk_kekerasan')
            // ->order_by('pelaporan.id_pelapor')
            ->get();
        return $query;
    }

    public function get_detail_pengaduan($id)
    {
        $query = $this->db->select('pengaduan_kasus.*,sub_bentuk_kekerasan.sub_jenis_kekerasan, bentuk_kekerasan.jenis_kekerasan, users.nama, desa.nama_desa, kecamatan.nama_kecamatan,')
            ->from('pengaduan_kasus')
            ->join('pelaporan', 'pengaduan_kasus.id_pelapor = pelaporan.id_pelapor')
            ->join('sub_bentuk_kekerasan', 'pengaduan_kasus.id_sub_bentuk_kekerasan = sub_bentuk_kekerasan.id_sub_bentuk_kekerasan')
            ->join('bentuk_kekerasan', 'sub_bentuk_kekerasan.id_bentuk_kekerasan = bentuk_kekerasan.id_bentuk_kekerasan')
            ->join('users', 'pelaporan.id_user = users.id_user')
            ->join('desa', 'pelaporan.id_desa = desa.id_desa')
            ->join('kecamatan', 'desa.id_kecamatan = kecamatan.id_kecamatan')
            ->where('id_pengaduan', $id)
            ->get();
        return $query;
    }

    public function get_kekerasan()
    {
        $query = $this->db->select('sub_bentuk_kekerasan.*, bentuk_kekerasan.jenis_kekerasan')
            ->from('sub_bentuk_kekerasan')
            ->join('bentuk_kekerasan', 'bentuk_kekerasan.id_bentuk_kekerasan = sub_bentuk_kekerasan.id_bentuk_kekerasan')
            ->get()->result_array();
        return $query;
    }

    public function get_desa()
    {
        $query = $this->db->select('desa.*, kecamatan.nama_kecamatan')
            ->from('desa')
            ->join('kecamatan', 'desa.id_kecamatan = kecamatan.id_kecamatan')
            ->get()->result_array();
        return $query;
    }

    public function get_korban($id)
    {
        $query = $this->db->select('korban.*, desa.nama_desa, kecamatan.nama_kecamatan')
            ->from('korban')
            ->join('desa', 'korban.id_desa = desa.id_desa')
            ->join('kecamatan', 'desa.id_kecamatan = kecamatan.id_kecamatan')
            ->where('id_pengaduan', $id)
            ->get()->result_array();
        return $query;
    }

    public function get_detail_korban($id)
    {
        $query = $this->db->select('korban.*, desa.nama_desa, kecamatan.nama_kecamatan, pengaduan_kasus.id_pengaduan')
            ->from('korban')
            ->join('desa', 'korban.id_desa = desa.id_desa')
            ->join('kecamatan', 'desa.id_kecamatan = kecamatan.id_kecamatan')
            ->join('pengaduan_kasus', 'korban.id_pengaduan = pengaduan_kasus.id_pengaduan')
            ->where('id_korban', $id)
            ->get();
        return $query;
    }

    public function get_pelaku($id)
    {
        $query = $this->db->select('pelaku.*, desa.nama_desa, kecamatan.nama_kecamatan')
            ->from('pelaku')
            ->join('desa', 'pelaku.id_desa = desa.id_desa')
            ->join('kecamatan', 'desa.id_kecamatan = kecamatan.id_kecamatan')
            ->where('id_pengaduan', $id)
            ->get()->result_array();
        return $query;
    }

    public function get_detail_pelaku($id)
    {
        $query = $this->db->select('pelaku.*, desa.nama_desa, kecamatan.nama_kecamatan, pengaduan_kasus.id_pengaduan')
            ->from('pelaku')
            ->join('desa', 'pelaku.id_desa = desa.id_desa')
            ->join('kecamatan', 'desa.id_kecamatan = kecamatan.id_kecamatan')
            ->join('pengaduan_kasus', 'pelaku.id_pengaduan = pengaduan_kasus.id_pengaduan')
            ->where('id_pelaku', $id)
            ->get();
        return $query;
    }

    // public function addpengaduan()
    // {
    //     $data = [
    //         'no_registrasi' => $this->input->post('no_registrasi', true),
    //         'tanggal_pengaduan' => $this->input->post('tanggal_pengaduan', true),
    //         'cara_datang' => $this->input->post('cara_datang', true),
    //         'id_pelapor' => $this->input->post('nama_pelapor', true),
    //         'kategori_kekerasan' => $this->input->post('kategori_kekerasan', true),
    //         'id_bentuk_kekerasan' => $this->input->post('jenis_kekerasan', true),
    //         'id_sub_bentuk_kekerasan' => $this->input->post('sub_jenis_kekerasan', true),
    //         'waktu_kejadian' =>  date('Y-m-d h:i:s'),
    //         'tempat_kejadian' => $this->input->post('tempat_kejadian', true),
    //         'kronologis_kejadian' => $this->input->post('kronologis_kejadian', true),
    //         'tahun_pengaduan' => $this->input->post('tahun_pengaduan', true),
    //         'image' => $this->_uploadImage(),
    //         'longitude' => $this->input->post('longitude', true),
    //         'latitude' => $this->input->post('latitude', true)
    //     ];

    
    //     $this->db->insert('pengaduan_kasus', $data);
    // }

    public function ajukanpengaduan()
    {
        $data = [
            'no_registrasi' => $this->input->post('no_registrasi', true),
            'tanggal_pengaduan' => $this->input->post('tanggal_pengaduan', true),
            'cara_datang' => $this->input->post('cara_datang', true),
            'id_pelapor' => $this->input->post('nama', true),
            'id_desa' => $this->input->post('id_desa', true),
            'korban_kekerasan' => $this->input->post('korban_kekerasan', true),
            'kategori_kekerasan' => $this->input->post('kategori_kekerasan', true),
            'alamat_pelapor' => $this->input->post('alamat_pelapor', true),
            'id_sub_bentuk_kekerasan' => $this->input->post('sub_jenis_kekerasan', true),
            'alamat_kejadian' => $this->input->post('alamat_kejadian', true),
            'waktu_kejadian' =>  date('Y-m-d h:i:s'),
            'tempat_kejadian' => $this->input->post('tempat_kejadian', true),
            'hubungan_dengan_korban' => $this->input->post('hubungan_dengan_korban', true),
            'kronologis_kejadian' => $this->input->post('kronologis_kejadian', true),
            'tahun_pengaduan' => $this->input->post('tahun_pengaduan', true),
            'image' => $this->_uploadImage(),
            // 'longitude' => $this->input->post('longitude', true),
            // 'latitude' => $this->input->post('latitude', true)
        ];

        // insert ke dalam database 
        $this->db->insert('pengaduan_kasus', $data);
    }

    public function editpengaduan()
    {
        $data = [
            'no_registrasi' => $this->input->post('no_registrasi', true),
            'tanggal_pengaduan' => $this->input->post('tanggal_pengaduan', true),
            'cara_datang' => $this->input->post('cara_datang', true),
            // 'id_pelapor' => $this->input->post('nama_pelapor', true),
            'id_desa' => $this->input->post('id_desa', true),
            'korban_kekerasan' => $this->input->post('korban_kekerasan', true),
            'kategori_kekerasan' => $this->input->post('kategori_kekerasan', true),
            'alamat_pelapor' => $this->input->post('alamat_pelapor', true),
            // 'id_bentuk_kekerasan' => $this->input->post('jenis_kekerasan', true),
            'id_sub_bentuk_kekerasan' => $this->input->post('id_sub_bentuk_kekerasan', true),
            'alamat_kejadian' => $this->input->post('alamat_kejadian', true),
            'waktu_kejadian' =>  date('Y-m-d h:i:s'),
            'tempat_kejadian' => $this->input->post('tempat_kejadian', true),
            'hubungan_dengan_korban' => $this->input->post('hubungan_dengan_korban', true),
            'kronologis_kejadian' => $this->input->post('kronologis_kejadian', true),
            'tahun_pengaduan' => $this->input->post('tahun_pengaduan', true),
            // 'image' => $this->_uploadImage(),
            // 'longitude' => $this->input->post('longitude', true),
            // 'latitude' => $this->input->post('latitude', true)

        ];

        // insert ke dalam database
        $this->db->where('id_pengaduan', $this->input->post('id_pengaduan'));
        $this->db->update('pengaduan_kasus', $data,);
    }

    public function delete($id)
    {
        $this->db->where('id_pengaduan', $id);
        // $this->_deleteImage($id);
        $this->db->delete('pengaduan_kasus');
    }

    public function deletekorban($id)
    {
        $this->db->where('id_korban', $id);
        $this->db->delete('korban');
    }


    public function addkorban()
    {
        $data = [
            'nama' =>  htmlspecialchars($this->input->post('nama', true)),
            'jenis_kelamin' => htmlspecialchars($this->input->post('jenis_kelamin', true)),
            'tempat_lahir' => htmlspecialchars($this->input->post('tempat_lahir', true)),
            'tanggal_lahir' => htmlspecialchars($this->input->post('tanggal_lahir', true)),
            'agama' => $this->input->post('agama', true),
            'alamat' => htmlspecialchars($this->input->post('alamat', true)),
            'nama_ayah' => $this->input->post('nama_ayah', true),
            'nama_ibu' => $this->input->post('nama_ibu', true),
            'pendidikan_terakhir' => $this->input->post('pendidikan_terakhir', true),
            'pekerjaan' => $this->input->post('pekerjaan', true),
            'status_perkawinan' => $this->input->post('status_perkawinan', true),
            'jumlah_saudara' => $this->input->post('jumlah_saudara', true),
            'nik' => $this->input->post('nik', true),
            'id_desa' => $this->input->post('id_desa', true),
            'id_pengaduan' => $this->input->post('id_pengaduan', true),
            'date_created' => date('Y-m-d h:i:s')
        ];

        // insert ke dalam database
        $this->db->insert('korban', $data);
    }

    public function editkorban()
    {
        $data = [
            'nama' =>  htmlspecialchars($this->input->post('nama', true)),
            'jenis_kelamin' => htmlspecialchars($this->input->post('jenis_kelamin', true)),
            'tempat_lahir' => htmlspecialchars($this->input->post('tempat_lahir', true)),
            'tanggal_lahir' => htmlspecialchars($this->input->post('tanggal_lahir', true)),
            'agama' => $this->input->post('agama', true),
            'alamat' => htmlspecialchars($this->input->post('alamat', true)),
            'nama_ayah' => $this->input->post('nama_ayah', true),
            'nama_ibu' => $this->input->post('nama_ibu', true),
            'pendidikan_terakhir' => $this->input->post('pendidikan_terakhir', true),
            'pekerjaan' => $this->input->post('pekerjaan', true),
            'status_perkawinan' => $this->input->post('status_perkawinan', true),
            'jumlah_saudara' => $this->input->post('jumlah_saudara', true),
            'nik' => $this->input->post('nik', true),
            'id_desa' => $this->input->post('id_desa', true),
            'id_pengaduan' => $this->input->post('id_pengaduan', true),
            'date_created' => date('Y-m-d h:i:s')
        ];

        // insert ke dalam database
        $this->db->where('id_korban', $this->input->post('id_korban'));
        $this->db->update('korban', $data);
    }

    public function addpelaku()
    {
        $data = [
            'nama' =>  htmlspecialchars($this->input->post('nama', true)),
            'jenis_kelamin' => htmlspecialchars($this->input->post('jenis_kelamin', true)),
            'tempat_lahir' => htmlspecialchars($this->input->post('tempat_lahir', true)),
            'tanggal_lahir' => htmlspecialchars($this->input->post('tanggal_lahir', true)),
            'agama' => $this->input->post('agama', true),
            'alamat' => htmlspecialchars($this->input->post('alamat', true)),
            'nama_ayah' => $this->input->post('nama_ayah', true),
            'nama_ibu' => $this->input->post('nama_ibu', true),
            'pendidikan_terakhir' => $this->input->post('pendidikan_terakhir', true),
            'pekerjaan' => $this->input->post('pekerjaan', true),
            'status_perkawinan' => $this->input->post('status_perkawinan', true),
            'jumlah_saudara' => $this->input->post('jumlah_saudara', true),
            'rekam_jejak' => $this->input->post('rekam_jejak', true),
            'nik' => $this->input->post('nik', true),
            'id_desa' => $this->input->post('id_desa', true),
            'id_pengaduan' => $this->input->post('id_pengaduan', true),
            'date_created' => date('Y-m-d h:i:s')
        ];

        // insert ke dalam database
        $this->db->insert('pelaku', $data);
    }

    public function editpelaku()
    {
        $data = [
            'nama' =>  htmlspecialchars($this->input->post('nama', true)),
            'jenis_kelamin' => htmlspecialchars($this->input->post('jenis_kelamin', true)),
            'tempat_lahir' => htmlspecialchars($this->input->post('tempat_lahir', true)),
            'tanggal_lahir' => htmlspecialchars($this->input->post('tanggal_lahir', true)),
            'agama' => $this->input->post('agama', true),
            'alamat' => htmlspecialchars($this->input->post('alamat', true)),
            'nama_ayah' => $this->input->post('nama_ayah', true),
            'nama_ibu' => $this->input->post('nama_ibu', true),
            'pendidikan_terakhir' => $this->input->post('pendidikan_terakhir', true),
            'pekerjaan' => $this->input->post('pekerjaan', true),
            'status_perkawinan' => $this->input->post('status_perkawinan', true),
            'jumlah_saudara' => $this->input->post('jumlah_saudara', true),
            'rekam_jejak' => $this->input->post('rekam_jejak', true),
            'nik' => $this->input->post('nik', true),
            'id_desa' => $this->input->post('id_desa', true),
            'id_pengaduan' => $this->input->post('id_pengaduan', true),
            'date_created' => date('Y-m-d h:i:s')
        ];

        // insert ke dalam database
        $this->db->where('id_pelaku', $this->input->post('id_pelaku'));
        $this->db->update('pelaku', $data);
    }


    public function deletepelaku($id)
    {
        $this->db->where('id_pelaku', $id);
        $this->db->delete('pelaku');
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
}