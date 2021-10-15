<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pelaporan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('permission_model');
        $this->load->model('Pelaporan_model');

        $block = $this->session->userdata('role');

        if (!$this->session->userdata('no_hp')) {
            redirect('auth');
            // }
        } elseif ($block !== 'Admin' && $block !== 'Operator') {
            redirect('auth/blocked');
        }
    }

    public function index()
    {
        $data['user'] = $this->db->get_where('users', ['no_hp' => $this->session->userdata('no_hp')])->row_array();

        $data['pelaporan'] = $this->Pelaporan_model->get_pelaporan();
        // $data['desa'] = $this->Pelaporan_model->get_desa();

        $data['title'] = 'SIPUDAK';
        $this->load->view('templates/header' ,$data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar', $data);
        $this->load->view('pelaporan/index');
        $this->load->view('templates/footer');
    }

    public function detail($id)
    {
        $data['user'] = $this->db->get_where('users', ['no_hp' => $this->session->userdata('no_hp')])->row_array();
        // $data['users'] = $this->User_model->get_profil();
        // $data['profil'] = $this->User_model->get_profil();
        $data['pelaporan'] = $this->Pelaporan_model->get_detail($id)->row_array();

        $data['title'] = 'SIPUDAK';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar', $data);
        $this->load->view('pelaporan/detail');
        $this->load->view('templates/footer', $data);
    }

    public function addpelaporan()
    {
        $data['user'] = $this->db->get_where('users', ['no_hp' => $this->session->userdata('no_hp')])->row_array();

        // $data['users'] = $this->User_model->get_profil();
        // $data['profil'] = $this->User_model->get_profil();
        // $data['pelaporan'] = $this->Pelaporan_model->get_detail($id)->row_array();
        $data['korban'] = ['Anak', 'Perempuan'];
        $data['pelaporan'] = $this->Pelaporan_model->get_pelaporan();
        // $data['kategori_pelaporan'] = $this->db->get('kategori_pelapor')->result_array();
        $data['desa'] = $this->Pelaporan_model->get_desa();

        // $this->form_validation->set_rules('nama_pelapo', 'Nama', 'required|trim');
        $this->form_validation->set_rules('no_hp', 'Nomor hp', 'required|trim');
        $this->form_validation->set_rules('alamat_pelapor', 'Alamat', 'required|trim');
        $this->form_validation->set_rules('tanggal_pelaporan', 'Tanggal', 'required|trim');
        $this->form_validation->set_rules('korban_kekerasan', 'Korban', 'required|trim');
        $this->form_validation->set_rules('tempat_kejadian', 'Tempat', 'required|trim');
        $this->form_validation->set_rules('alamat_kejadian', 'Alamat kejadian', 'required|trim');
        $this->form_validation->set_rules('hubungan_dengan_korban', 'Hubungan', 'required|trim');
        $this->form_validation->set_rules('kronologis_kejadian', 'Kronologis', 'required|trim');
        $this->form_validation->set_rules('id_desa', 'Desa', 'required|trim');
        // $this->form_validation->set_rules('images', 'Images', 'required|trim');

        if ($this->form_validation->run() == false) {

            $data['title1'] = 'SIPUDAK';
            $data['title'] = 'Halaman Tambah Pelaporan';
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar');
            $this->load->view('templates/topbar', $data);
            $this->load->view('pelaporan/addpelaporan', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Pelaporan_model->addpelaporan();
            $this->session->set_flashdata('message', 'ditambah');
            redirect('pelaporan');
        }
    }

    public function editpelaporan($id)
    {
        $data['user'] = $this->db->get_where('users', ['no_hp' => $this->session->userdata('no_hp')])->row_array();
        // $data['users'] = $this->User_model->get_profil();
        // $data['profil'] = $this->User_model->get_profil();
        // $data['pelaporan'] = $this->Pelaporan_model->get_detail($id)->row_array();
        $data['korban'] = ['Perempuan', 'Anak'];
        $data['pelaporan'] = $this->Pelaporan_model->get_detail($id)->row_array();
        // $data['kategori_pelaporan'] = $this->db->get('kategori_pelapor')->result_array();
        $data['desa'] = $this->Pelaporan_model->get_desa();

        // $this->form_validation->set_rules('nama_pelapor', 'Nama', 'required|trim');
        // $this->form_validation->set_rules('no_hp', 'Nomor hp', 'required|trim');
        // $this->form_validation->set_rules('alamat_pelapor', 'Alamat', 'required|trim');
        // $this->form_validation->set_rules('tanggal_pelaporan', 'Tanggal', 'required|trim');
        // $this->form_validation->set_rules('korban_kekerasan', 'Korban', 'required|trim');
        // $this->form_validation->set_rules('tempat_kejadian', 'Tempat', 'required|trim');
        // $this->form_validation->set_rules('alamat_kejadian', 'Alamat kejadian', 'required|trim');
        // $this->form_validation->set_rules('nama_kategori', 'Hubungan', 'required|trim');
        // $this->form_validation->set_rules('kronologis_kejadian', 'Kronologis', 'required|trim');

        $this->form_validation->set_rules('no_hp', 'Nomor hp', 'required|trim');
        $this->form_validation->set_rules('alamat_pelapor', 'Alamat', 'required|trim');
        $this->form_validation->set_rules('tanggal_pelaporan', 'Tanggal', 'required|trim');
        $this->form_validation->set_rules('korban_kekerasan', 'Korban', 'required|trim');
        $this->form_validation->set_rules('tempat_kejadian', 'Tempat', 'required|trim');
        $this->form_validation->set_rules('alamat_kejadian', 'Alamat kejadian', 'required|trim');
        $this->form_validation->set_rules('hubungan_dengan_korban', 'Hubungan', 'required|trim');
        $this->form_validation->set_rules('kronologis_kejadian', 'Kronologis', 'required|trim');
        $this->form_validation->set_rules('id_desa', 'Desa', 'required|trim');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Halaman Edit Pelaporan';
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar');
            $this->load->view('templates/topbar', $data);
            $this->load->view('pelaporan/editpelaporan', $data);
            $this->load->view('templates/footer', $data);
        } else {

            // cek jika ada gambar yang akan diupload
            $upload_image = $_FILES['image']['name'];

            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size']      = '2048';
                $config['upload_path']   = './assets/images/';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('image')) {
                    $old_image = $data['pelaporan']['image'];
                    if ($old_image != 'default.jpg') {
                        unlink(FCPATH . 'assets/images/' . $old_image);
                    }
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('image', $new_image);
                } else {
                    echo $this->upload->display_errors();
                }
            }

            $this->Pelaporan_model->editpelaporan();
            $this->session->set_flashdata('message', 'diubah');
            redirect('pelaporan');
        }
    }

    public function delete($id)
    {
        // $data['row'] = $this->User_model->get($id)->row_array();

        $this->Pelaporan_model->delete($id);
        // $this->User_model->deleteuser($id);
        $this->session->set_flashdata('message', 'dihapus');
        redirect('pelaporan');
    }

    public function updatestatus($id_pelapor, $id_status)
    {
        if ($this->Pelaporan_model->get_status($id_pelapor, $id_status)) {
            $this->session->set_flashdata('success', 'Data berhasil disimpan');
            redirect('pelaporan');
        } else {
            $this->session->set_flashdata('error', 'Data gagal disimpan');
            redirect('pelaporan');
        }
    }
}