<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Person extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('permission_model');
        $this->load->model('Person_model');


        if (!$this->session->userdata('no_hp')) {
            redirect('auth');
        } elseif ($this->session->userdata('role') !== 'Admin') {
            redirect('auth/blocked');
        }
    }

    public function index()
    {
        $data['user'] = $this->db->get_where('users', ['no_hp' => $this->session->userdata('no_hp')])->row_array();
        $data['korban'] = $this->Person_model->get_korban()->result_array();
        $data['pelaku'] = $this->Person_model->get_pelaku()->result_array();

        // $data['det_korban'] = $this->Person_model->get_detail_korban()->row_array();
        $data['title'] = 'SIPUDAK';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar', $data);
        $this->load->view('person/index');
        $this->load->view('templates/footer', $data);
    }

    public function detailkorban($id)
    {
        $data['user'] = $this->db->get_where('users', ['no_hp' => $this->session->userdata('no_hp')])->row_array();
        $data['det_korban'] = $this->Person_model->get_detail_korban($id)->row_array();

        $data['title'] = 'SIPUDAK';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar', $data);
        $this->load->view('person/detailkorban');
        $this->load->view('templates/footer', $data);
    }

    public function detailpelaku($id)
    {
        $data['user'] = $this->db->get_where('users', ['no_hp' => $this->session->userdata('no_hp')])->row_array();
        $data['det_pelaku'] = $this->Person_model->get_detail_pelaku($id)->row_array();

        $data['title'] = 'SIPUDAK';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar', $data);
        $this->load->view('person/detailpelaku');
        $this->load->view('templates/footer', $data);
    }




    public function addperson()
    {
        $data['user'] = $this->db->get_where('users', ['no_hp' => $this->session->userdata('no_hp')])->row_array();

        $data['desa'] = $this->db->get('desa')->result_array();
        $data['jenis_kelamin'] = ['Laki-Laki', 'Perempuan'];
        $data['agama'] = ['Islam', 'Protestan', 'Katolik', 'Hindu', 'Buddha', 'Khonghucu'];
        $data['pendidikan'] = ['SD', 'SMP', 'SMA'];
        $data['status_person'] = ['Korban', 'Pelaku'];


        $this->form_validation->set_rules('nik', 'NIK', 'required|trim|max_length[16]|is_unique[person.nik]', array('required' => 'Isi sesuai nomor KTP'));
        $this->form_validation->set_rules('nama_person', 'Nama', 'required|trim');
        $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required|trim');
        $this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'required|trim');
        $this->form_validation->set_rules('tanggal_lahir', 'Tanggal lahir', 'required|trim');
        $this->form_validation->set_rules('agama', 'Agama', 'required|trim');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim');
        $this->form_validation->set_rules('umur', 'Umur', 'required|trim');
        $this->form_validation->set_rules('nama_orang_tua', 'Orang Tua', 'required|trim');
        $this->form_validation->set_rules('pendidikan_terakhir', 'Pendidikan', 'required|trim');
        // $this->form_validation->set_rules('pekerjaan', 'Pekerjaan', 'required|trim');
        $this->form_validation->set_rules('status_perkawinan', 'Perkawinan');
        $this->form_validation->set_rules('status_person', 'Status Person', 'required|trim');
        $this->form_validation->set_rules('jumlah_saudara', 'Saudara', 'required|trim');
        $this->form_validation->set_rules('hubungan_dengan_korban', 'Hubungan');
        $this->form_validation->set_rules('nama_desa', 'Desa', 'required|trim');


        if ($this->form_validation->run() == false) {
            $data['title'] = 'Halaman Tambah Person';
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar');
            $this->load->view('templates/topbar', $data);
            $this->load->view('person/addperson');
            $this->load->view('templates/footer', $data);
        } else {
            $this->Person_model->addperson();
            $this->session->set_flashdata('message', 'ditambah');
            redirect('person');
        }
    }


    public function editperson($nik)
    {
        $data['user'] = $this->db->get_where('users', ['no_hp' => $this->session->userdata('no_hp')])->row_array();


        $data['desa'] = $this->db->get('desa')->result_array();
        $data['person'] = $this->Person_model->get_detail_person($nik)->row_array();

        $data['jenis_kelamin'] = ['Laki-Laki', 'Perempuan'];
        $data['agama'] = ['Islam', 'Protestan', 'Katolik', 'Hindu', 'Buddha', 'Khonghucu'];
        $data['pendidikan'] = ['SD', 'SMP', 'SMA'];
        $data['status_person'] = ['Korban', 'Pelaku'];


        // $this->form_validation->set_rules('nik', 'NIK', 'required|trim|max_length[16]|is_unique[person.nik]', array('required' => 'Isi sesuai nomor KTP'));
        $this->form_validation->set_rules('nama_person', 'Nama', 'required|trim');
        $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required|trim');
        $this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'required|trim');
        $this->form_validation->set_rules('tanggal_lahir', 'Tanggal lahir', 'required|trim');
        $this->form_validation->set_rules('agama', 'Agama', 'required|trim');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim');
        $this->form_validation->set_rules('umur', 'Umur', 'required|trim');
        $this->form_validation->set_rules('nama_orang_tua', 'Orang Tua', 'required|trim');
        $this->form_validation->set_rules('pendidikan_terakhir', 'Pendidikan', 'required|trim');
        // $this->form_validation->set_rules('pekerjaan', 'Pekerjaan', 'required|trim');
        $this->form_validation->set_rules('status_perkawinan', 'Perkawinan');
        $this->form_validation->set_rules('status_person', 'Status Person', 'required|trim');
        $this->form_validation->set_rules('jumlah_saudara', 'Saudara', 'required|trim');
        $this->form_validation->set_rules('hubungan_dengan_korban', 'Hubungan');
        $this->form_validation->set_rules('nama_desa', 'Desa', 'required|trim');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Halaman Edit Person';
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar');
            $this->load->view('templates/topbar', $data);
            $this->load->view('person/editperson');
            $this->load->view('templates/footer', $data);
        } else {
            $this->Person_model->editperson();
            $this->session->set_flashdata('message', 'diubah');
            redirect('person');
        }
    }

    public function delete($nik)
    {

        $this->Person_model->delete($nik);
        // $this->User_model->deleteuser($id);
        $this->session->set_flashdata('message', 'dihapus');
        redirect('person');
    }
}