<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengaduan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('permission_model');
        $this->load->model('Pengaduan_model');
        $this->load->model('Pelaporan_model');


        if (!$this->session->userdata('no_hp')) {
            redirect('auth');
        } elseif ($this->session->userdata('role') !== 'Admin') {
            redirect('auth/blocked');
        }
    }


    public function index()
    {
        $data['user'] = $this->db->get_where('users', ['no_hp' => $this->session->userdata('no_hp')])->row_array();
        $data['pengaduan_kasus'] = $this->Pengaduan_model->get_pengaduan_kasus()->result_array();
        // $data['ben_kekerasan'] = $this->db->get('bentuk_kekerasan')->result_array();
 
        $data['title'] = 'SIPUDAK';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar', $data);
        $this->load->view('pengaduan/index');
        $this->load->view('templates/footer', $data);
    }

    public function detail($id)
    {
        $data['user'] = $this->db->get_where('users', ['no_hp' => $this->session->userdata('no_hp')])->row_array();
        $data['pengaduan_kasus'] = $this->Pengaduan_model->get_detail_pengaduan($id)->row_array();
        $data['laporan_kasus'] = $this->Pengaduan_model->get_detail_pengaduan($id)->row_array();
        $data['korban'] = $this->Pengaduan_model->get_korban($id);
        $data['pelaku'] = $this->Pengaduan_model->get_pelaku($id);

        $data['title'] = 'Halaman Detail Pengaduan';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar', $data);
        $this->load->view('pengaduan/detail');
        $this->load->view('templates/footer', $data);

        // var_dump($data['pengaduan_kasus']);
        // die;
    }

    public function addpengaduan()
    {
        $data['user'] = $this->db->get_where('users', ['no_hp' => $this->session->userdata('no_hp')])->row_array();
        // $data['users'] = $this->User_model->get_profil();
        // $data['profil'] = $this->User_model->get_profil();
        // $data['pelaporan'] = $this->Pelaporan_model->get_detail($id)->row_array();
        $data['kekerasan'] = ['Kdrt', 'Non Kdrt'];
        $data['korban'] = ['Anak', 'Perempuan'];
        // $data['pengaduan_kasus'] = $this->Pengaduan_model->get_pengaduan_kasus();

        $data['sub_kekerasan'] = $this->Pengaduan_model->get_kekerasan();
        $data['desa'] = $this->Pengaduan_model->get_desa();
        // $data['pelaporan_kasus'] = $this->Pelaporan_model->get_detail($id)->row_array();
        // $data['ben_kekerasan'] = $this->db->get('bentuk_kekerasan')->result_array();

        $this->form_validation->set_rules('no_registrasi', 'No', 'required|trim');
        $this->form_validation->set_rules('tanggal_pengaduan', 'Tanggal', 'required|trim');
        $this->form_validation->set_rules('cara_datang', 'Cara Datang', 'required|trim');
        $this->form_validation->set_rules('nama_pelapor', 'Nama Pelapor', 'required|trim');
        $this->form_validation->set_rules('kategori_kekerasan', 'Kategori Kekerasan', 'required|trim');
        $this->form_validation->set_rules('jenis_kekerasan', 'Kekerasan', 'required|trim');
        $this->form_validation->set_rules('sub_jenis_kekerasan', 'Sub Bentuk Kekerasan', 'required|trim');
        $this->form_validation->set_rules('waktu_kejadian', 'Waktu kejadian', 'required|trim');
        $this->form_validation->set_rules('tempat_kejadian', 'Tempat kejadian', 'required|trim');
        $this->form_validation->set_rules('kronologis_kejadian', 'Kronologis', 'required|trim');
        $this->form_validation->set_rules('tahun_pengaduan', 'Tahun', 'required|trim');
        $this->form_validation->set_rules('images', 'Images', 'required|trim');
        $this->form_validation->set_rules('longitude', 'Longitude', 'required|trim');
        $this->form_validation->set_rules('latitude', 'Latitude', 'required|trim');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Halaman Tambah Pengaduan';
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar');
            $this->load->view('templates/topbar', $data);
            $this->load->view('pengaduan/addpengaduan', $data);
            $this->load->view('templates/footer', $data);
        } else {
            $this->Pengaduan_model->addpengaduan();
            $this->session->set_flashdata('message', 'ditambah');
            redirect('pengaduan');
        }
    }

    public function ajukanpengaduan($id)
    {
        $data['user'] = $this->db->get_where('users', ['no_hp' => $this->session->userdata('no_hp')])->row_array();
        // $data['users'] = $this->User_model->get_profil();
        // $data['profil'] = $this->User_model->get_profil();
        // $data['pelaporan'] = $this->Pelaporan_model->get_detail($id)->row_array();
        $data['kekerasan'] = ['Kdrt', 'Non Kdrt'];
        $data['korban'] = ['Anak', 'Perempuan'];
        // $data['pengaduan_kasus'] = $this->Pengaduan_model->get_pengaduan_kasus();
        $data['laporan_kasus'] = $this->Pengaduan_model->get_detail_pengaduan($id)->row_array(); // untuk pengaduan berdasarkan pelaporan
        $data['pelaporan_kasus'] = $this->Pelaporan_model->get_detail($id)->row_array();
        // $data['pelaporan_kasus'] = $this->db->get('pelaporan')->result_array();
        $data['sub_kekerasan'] = $this->Pengaduan_model->get_kekerasan();
        // $data['sub_kekerasan'] = $this->db->get('sub_bentuk_kekerasan')->result_array();
        $data['ben_kekerasan'] = $this->db->get('bentuk_kekerasan')->result_array();


        $this->form_validation->set_rules('no_registrasi', 'No', 'required|trim');
        $this->form_validation->set_rules('tanggal_pengaduan', 'Tanggal', 'required|trim');
        $this->form_validation->set_rules('cara_datang', 'Cara Datang', 'required|trim');
        // $this->form_validation->set_rules('id_desa', 'Nama Desa', 'required|trim');
        $this->form_validation->set_rules('kategori_kekerasan', 'Kategori Kekerasan', 'required|trim');
        $this->form_validation->set_rules('nama', 'Pelapor', 'required|trim|is_unique[pengaduan_kasus.id_pelapor]'); // unik tidak boleh melakukan pengaduan lebi dari 1 kali
        $this->form_validation->set_rules('sub_jenis_kekerasan', 'Sub Bentuk Kekerasan', 'required|trim');
        $this->form_validation->set_rules('alamat_kejadian', 'Alamat kejadian', 'required|trim');
        $this->form_validation->set_rules('waktu_kejadian', 'Waktu kejadian', 'required|trim');
        $this->form_validation->set_rules('tempat_kejadian', 'Tempat kejadian', 'required|trim');
        // $this->form_validation->set_rules('alamat_pelapor', 'Pelapor', 'required|trim');
        $this->form_validation->set_rules('hubungan_dengan_korban', 'Hubungan Korban', 'required|trim');
        $this->form_validation->set_rules('kronologis_kejadian', 'Kronologis', 'required|trim');
        $this->form_validation->set_rules('tahun_pengaduan', 'Tahun', 'required|trim');
        // $this->form_validation->set_rules('images', 'Images', 'required|trim');
        // $this->form_validation->set_rules('longitude', 'Longitude', 'required|trim');
        // $this->form_validation->set_rules('latitude', 'Latitude', 'required|trim');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Halaman Tambah Pengaduan';
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar');
            $this->load->view('templates/topbar', $data);
            $this->load->view('pengaduan/ajukanpengaduan');
            $this->load->view('templates/footer', $data);
        } else {
            $this->Pengaduan_model->ajukanpengaduan();
            $this->session->set_flashdata('message', 'ditambah');
            redirect('pengaduan');
        }
    }

    public function editpengaduan($id)
    {
        $data['user'] = $this->db->get_where('users', ['no_hp' => $this->session->userdata('no_hp')])->row_array();


        $data['kekerasan'] = ['Kdrt', 'Non Kdrt'];
        $data['pengaduan_kasus'] = $this->Pengaduan_model->get_detail_pengaduan($id)->row_array();
        $data['pelaporan_kasus'] = $this->db->get('pelaporan')->result_array();
        // $data['sub_kekerasan'] = $this->db->get('sub_bentuk_kekerasan')->result_array();
        $data['sub_kekerasan'] = $this->Pengaduan_model->get_kekerasan();
        // $data['ben_kekerasan'] = $this->db->get('bentuk_kekerasan')->result_array();
        $data['desa'] = $this->Pelaporan_model->get_desa();


        $this->form_validation->set_rules('no_registrasi', 'No', 'required|trim');
        $this->form_validation->set_rules('tanggal_pengaduan', 'Tanggal', 'required|trim');
        $this->form_validation->set_rules('cara_datang', 'Cara Datang', 'required|trim');
        // $this->form_validation->set_rules('id_desa', 'Nama Desa', 'required|trim');
        $this->form_validation->set_rules('kategori_kekerasan', 'Kategori Kekerasan', 'required|trim');
        // $this->form_validation->set_rules('nama', 'Pelapor', 'required|trim|is_unique[pengaduan_kasus.id_pelapor]'); // unik tidak boleh melakukan pengaduan lebi dari 1 kali
        $this->form_validation->set_rules('id_sub_bentuk_kekerasan', 'Bentuk Kekerasan', 'required|trim');
        $this->form_validation->set_rules('alamat_kejadian', 'Alamat kejadian', 'required|trim');
        $this->form_validation->set_rules('waktu_kejadian', 'Waktu kejadian', 'required|trim');
        $this->form_validation->set_rules('tempat_kejadian', 'Tempat kejadian', 'required|trim');
        $this->form_validation->set_rules('alamat_pelapor', 'Pelapor', 'required|trim');
        $this->form_validation->set_rules('hubungan_dengan_korban', 'Hubungan Korban', 'required|trim');
        $this->form_validation->set_rules('kronologis_kejadian', 'Kronologis', 'required|trim');
        $this->form_validation->set_rules('tahun_pengaduan', 'Tahun', 'required|trim');
        // $this->form_validation->set_rules('images', 'Images', 'required|trim');
        $this->form_validation->set_rules('longitude', 'Longitude', 'required|trim');
        $this->form_validation->set_rules('latitude', 'Latitude', 'required|trim');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Halaman Edit Pengaduan';
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar');
            $this->load->view('templates/topbar', $data);
            $this->load->view('pengaduan/editpengaduan');
            $this->load->view('templates/footer', $data);
        } else {
            $this->Pengaduan_model->editpengaduan();
            $this->session->set_flashdata('message', 'ditambah');
            redirect('pengaduan');
        }
    }

    public function delete($id)
    {

        $this->Pengaduan_model->delete($id);
        // $this->User_model->deleteuser($id);
        $this->session->set_flashdata('message', 'dihapus');
        redirect('pengaduan');
    }



    public function addkorban($id)
    {
        $data['user'] = $this->db->get_where('users', ['no_hp' => $this->session->userdata('no_hp')])->row_array();

        // $data['desa'] = $this->db->get('desa')->result_array();
        $data['jenis_kelamin'] = ['Laki-Laki', 'Perempuan'];
        $data['agama'] = ['Islam', 'Protestan', 'Katolik', 'Hindu', 'Buddha', 'Khonghucu'];
        $data['pendidikan'] = ['SD', 'SMP', 'SMA'];
        $data['perkawinan'] = ['Belum Kawin', 'Kawin'];
        $data['desa'] = $this->Pengaduan_model->get_desa();
        $data['laporan_kasus'] = $this->Pengaduan_model->get_detail_pengaduan($id)->row_array();
        // $data['status_person'] = ['Korban', 'Pelaku'];


        // $this->form_validation->set_rules('nik', 'NIK', 'required|trim|max_length[16]|is_unique[person.nik]', array('required' => 'Isi sesuai nomor KTP'));
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required|trim');
        $this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'required|trim');
        $this->form_validation->set_rules('tanggal_lahir', 'Tanggal lahir', 'required|trim');
        $this->form_validation->set_rules('agama', 'Agama', 'required|trim');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim');
        // $this->form_validation->set_rules('umur', 'Umur', 'required|trim');
        $this->form_validation->set_rules('nama_ayah', 'Ayah', 'required|trim');
        $this->form_validation->set_rules('nama_ibu', 'Ibu', 'required|trim');
        $this->form_validation->set_rules('pendidikan_terakhir', 'Pendidikan', 'required|trim');
        $this->form_validation->set_rules('pekerjaan', 'Pekerjaan', 'required|trim');
        $this->form_validation->set_rules('status_perkawinan', 'Perkawinan');
        // $this->form_validation->set_rules('status_person', 'Status Person', 'required|trim');
        $this->form_validation->set_rules('jumlah_saudara', 'Saudara', 'required|trim');
        // $this->form_validation->set_rules('hubungan_dengan_korban', 'Hubungan');
        $this->form_validation->set_rules('id_desa', 'Desa', 'required|trim');


        if ($this->form_validation->run() == false) {
            $data['title'] = 'Halaman Tambah Korban';
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar');
            $this->load->view('templates/topbar', $data);
            $this->load->view('pengaduan/addkorban');
            $this->load->view('templates/footer', $data);
        } else {
            $this->Pengaduan_model->addkorban();
            $this->session->set_flashdata('message', 'ditambah');
            redirect('pengaduan');
        }
    }

    public function editkorban($id)
    {
        $data['user'] = $this->db->get_where('users', ['no_hp' => $this->session->userdata('no_hp')])->row_array();

        // $data['desa'] = $this->db->get('desa')->result_array();
        $data['jenis_kelamin'] = ['Laki-Laki', 'Perempuan'];
        $data['agama'] = ['Islam', 'Protestan', 'Katolik', 'Hindu', 'Buddha', 'Khonghucu'];
        $data['pendidikan'] = ['SD', 'SMP', 'SMA'];
        $data['perkawinan'] = ['Belum Kawin', 'Kawin'];
        $data['desa'] = $this->Pengaduan_model->get_desa();
        // $data['laporan_kasus'] = $this->Pengaduan_model->get_detail_pengaduan($id)->row_array();
        $data['korban'] = $this->Pengaduan_model->get_detail_korban($id)->row_array();
        // $data['status_person'] = ['Korban', 'Pelaku'];


        // $this->form_validation->set_rules('nik', 'NIK', 'required|trim|max_length[16]|is_unique[person.nik]', array('required' => 'Isi sesuai nomor KTP'));
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required|trim');
        $this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'required|trim');
        $this->form_validation->set_rules('tanggal_lahir', 'Tanggal lahir', 'required|trim');
        $this->form_validation->set_rules('agama', 'Agama', 'required|trim');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim');
        // $this->form_validation->set_rules('umur', 'Umur', 'required|trim');
        $this->form_validation->set_rules('nama_ayah', 'Ayah', 'required|trim');
        $this->form_validation->set_rules('nama_ibu', 'Ibu', 'required|trim');
        $this->form_validation->set_rules('pendidikan_terakhir', 'Pendidikan', 'required|trim');
        $this->form_validation->set_rules('pekerjaan', 'Pekerjaan', 'required|trim');
        $this->form_validation->set_rules('status_perkawinan', 'Perkawinan');
        // $this->form_validation->set_rules('status_person', 'Status Person', 'required|trim');
        $this->form_validation->set_rules('jumlah_saudara', 'Saudara', 'required|trim');
        // $this->form_validation->set_rules('hubungan_dengan_korban', 'Hubungan');
        $this->form_validation->set_rules('id_desa', 'Desa', 'required|trim');


        if ($this->form_validation->run() == false) {
            $data['title'] = 'Halaman Edit Korban';
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar');
            $this->load->view('templates/topbar', $data);
            $this->load->view('pengaduan/editkorban');
            $this->load->view('templates/footer', $data);
        } else {
            $this->Pengaduan_model->editkorban();
            $this->session->set_flashdata('message', 'diubah');
            redirect('pengaduan');
        }
    }

    public function addpelaku($id)
    {
        $data['user'] = $this->db->get_where('users', ['no_hp' => $this->session->userdata('no_hp')])->row_array();

        // $data['desa'] = $this->db->get('desa')->result_array();
        $data['jenis_kelamin'] = ['Laki-Laki', 'Perempuan'];
        $data['agama'] = ['Islam', 'Protestan', 'Katolik', 'Hindu', 'Buddha', 'Khonghucu'];
        $data['kriminalitas'] = ['Pernah', 'Tidak Pernah', 'Sedang tersangkut tindak pidana'];
        $data['pendidikan'] = ['SD', 'SMP', 'SMA'];
        $data['perkawinan'] = ['Belum Kawin', 'Kawin'];
        $data['desa'] = $this->Pengaduan_model->get_desa();
        $data['laporan_kasus'] = $this->Pengaduan_model->get_detail_pengaduan($id)->row_array();
        // $data['status_person'] = ['Korban', 'Pelaku'];


        $this->form_validation->set_rules('nik', 'NIK', 'required|trim|max_length[16]|is_unique[pelaku.nik]', array('required' => 'Isi sesuai nomor KTP'));
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required|trim');
        $this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'required|trim');
        $this->form_validation->set_rules('tanggal_lahir', 'Tanggal lahir', 'required|trim');
        $this->form_validation->set_rules('agama', 'Agama', 'required|trim');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim');
        // $this->form_validation->set_rules('nik', 'NIK', 'required|trim');
        $this->form_validation->set_rules('nama_ayah', 'Ayah', 'required|trim');
        $this->form_validation->set_rules('nama_ibu', 'Ibu', 'required|trim');
        $this->form_validation->set_rules('pendidikan_terakhir', 'Pendidikan', 'required|trim');
        $this->form_validation->set_rules('pekerjaan', 'Pekerjaan', 'required|trim');
        $this->form_validation->set_rules('status_perkawinan', 'Perkawinan');
        // $this->form_validation->set_rules('status_person', 'Status Person', 'required|trim');
        $this->form_validation->set_rules('jumlah_saudara', 'Saudara', 'required|trim');
        $this->form_validation->set_rules('rekam_jejak', 'Kriminalitas', 'required|trim');
        // $this->form_validation->set_rules('hubungan_dengan_korban', 'Hubungan');
        $this->form_validation->set_rules('id_desa', 'Desa', 'required|trim');


        if ($this->form_validation->run() == false) {
            $data['title'] = 'Halaman Tambah Person';
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar');
            $this->load->view('templates/topbar', $data);
            $this->load->view('pengaduan/addpelaku');
            $this->load->view('templates/footer', $data);
        } else {
            $this->Pengaduan_model->addpelaku();
            $this->session->set_flashdata('message', 'ditambah');
            redirect('pengaduan');
        }
    }

    public function editpelaku($id)
    {
        $data['user'] = $this->db->get_where('users', ['no_hp' => $this->session->userdata('no_hp')])->row_array();

        // $data['desa'] = $this->db->get('desa')->result_array();
        $data['jenis_kelamin'] = ['Laki-Laki', 'Perempuan'];
        $data['agama'] = ['Islam', 'Protestan', 'Katolik', 'Hindu', 'Buddha', 'Khonghucu'];
        $data['kriminalitas'] = ['Pernah', 'Tidak Pernah', 'Sedang tersangkut tindak pidana'];
        $data['pendidikan'] = ['SD', 'SMP', 'SMA'];
        $data['perkawinan'] = ['Belum Kawin', 'Kawin'];
        $data['desa'] = $this->Pengaduan_model->get_desa();
        // $data['laporan_kasus'] = $this->Pengaduan_model->get_detail_pengaduan($id)->row_array();
        $data['pelaku'] = $this->Pengaduan_model->get_detail_pelaku($id)->row_array();


        $this->form_validation->set_rules('nik', 'NIK', 'required|trim|max_length[16]|is_unique[pelaku.nik]', array('required' => 'Isi sesuai nomor KTP'));
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required|trim');
        $this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'required|trim');
        $this->form_validation->set_rules('tanggal_lahir', 'Tanggal lahir', 'required|trim');
        $this->form_validation->set_rules('agama', 'Agama', 'required|trim');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim');
        // $this->form_validation->set_rules('nik', 'NIK', 'required|trim');
        $this->form_validation->set_rules('nama_ayah', 'Ayah', 'required|trim');
        $this->form_validation->set_rules('nama_ibu', 'Ibu', 'required|trim');
        $this->form_validation->set_rules('pendidikan_terakhir', 'Pendidikan', 'required|trim');
        $this->form_validation->set_rules('pekerjaan', 'Pekerjaan', 'required|trim');
        $this->form_validation->set_rules('status_perkawinan', 'Perkawinan');
        // $this->form_validation->set_rules('status_person', 'Status Person', 'required|trim');
        $this->form_validation->set_rules('jumlah_saudara', 'Saudara', 'required|trim');
        $this->form_validation->set_rules('rekam_jejak', 'Kriminalitas', 'required|trim');
        // $this->form_validation->set_rules('hubungan_dengan_korban', 'Hubungan');
        $this->form_validation->set_rules('id_desa', 'Desa', 'required|trim');


        if ($this->form_validation->run() == false) {
            $data['title'] = 'Halaman Edit Pelaku';
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar');
            $this->load->view('templates/topbar', $data);
            $this->load->view('pengaduan/editpelaku');
            $this->load->view('templates/footer', $data);
        } else {
            $this->Pengaduan_model->editpelaku();
            $this->session->set_flashdata('message', 'diubah');
            redirect('pengaduan');
        }

        // echo json_encode($data['pelaku']);
        // die;
    }

    public function deletekorban($id)
    {

        $this->Pengaduan_model->deletekorban($id);
        // $this->User_model->deleteuser($id);
        $this->session->set_flashdata('message', 'dihapus');
        redirect('pengaduan');
    }

    public function deletepelaku($id)
    {

        $this->Pengaduan_model->deletepelaku($id);
        // $this->User_model->deleteuser($id);
        $this->session->set_flashdata('message', 'dihapus');
        redirect('pengaduan');
    }
    // public function Age($month, $day, $year)
    // {
    //     $dob = $month . '-' . $day . '-' . $year;
    //     $startDate = strtotime($dob);
    //     $endDate = time();
    //     $dif = $endDate - $startDate;

    //     return $years = (date('Y', $dif) - 1970) . ' y, ' . ($months = date('n', $dif) - 1) . ' m';
    // }
}