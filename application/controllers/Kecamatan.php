<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kecamatan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('permission_model');
        $this->load->model('Kecamatan_model');

        if (!$this->session->userdata('no_hp')) {
            redirect('auth');
        } elseif ($this->session->userdata('role') !== 'Admin') {
            redirect('auth/blocked');
        }
    }

    public function index()
    {
        $data['user'] = $this->db->get_where('users', ['no_hp' => $this->session->userdata('no_hp')])->row_array();

        $data['kecamatan'] = $this->Kecamatan_model->get_kecamatan()->result_array();
        $data['title'] = 'SIPUDAK';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar', $data);
        $this->load->view('kecamatan/index');
        $this->load->view('templates/footer', $data);
    }



    public function addkecamatan()
    {
        $data['user'] = $this->db->get_where('users', ['no_hp' => $this->session->userdata('no_hp')])->row_array();
        // $data['users'] = $this->User_model->get_profil();
        // $data['profil'] = $this->User_model->get_profil();
        // $data['pelaporan'] = $this->Pelaporan_model->get_detail($id)->row_array();


        $this->form_validation->set_rules('nama_kecamatan', 'Nama', 'required|trim');
        // $this->form_validation->set_rules('geojson_kecamatan', 'Geojson', 'required|trim');
        $this->form_validation->set_rules('warna_kecamatan', 'Warna', 'required|trim');



        if ($this->form_validation->run() == false) {
            $data['title'] = 'Halaman Tambah Kecamatan';
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar');
            $this->load->view('templates/topbar', $data);
            $this->load->view('kecamatan/addkecamatan');
            $this->load->view('templates/footer', $data);
        } else {
            $this->Kecamatan_model->addkecamatan();
            $this->session->set_flashdata('message', 'ditambah');
            redirect('kecamatan');
        }
    }

    public function editkecamatan($id)
    {
        $data['user'] = $this->db->get_where('users', ['no_hp' => $this->session->userdata('no_hp')])->row_array();
        $data['kecamatan'] = $this->Kecamatan_model->get_detail($id)->row_array();


        $this->form_validation->set_rules('nama_kecamatan', 'Nama', 'required|trim');
        // $this->form_validation->set_rules('geojson_kecamatan', 'Geojson', 'required|trim');
        $this->form_validation->set_rules('warna_kecamatan', 'Warna', 'required|trim');



        if ($this->form_validation->run() == false) {
            $data['title'] = 'Halaman Edit Kecamatan';
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar');
            $this->load->view('templates/topbar', $data);
            $this->load->view('kecamatan/editkecamatan');
            $this->load->view('templates/footer', $data);
        } else {

            // cek jika ada file yang diupload
            $upload_file = $_FILES['geojson_kecamatan']['name'];

            if ($upload_file) {
                $config['allowed_types'] = '*';
                $config['max_size']     = '1024';
                $config['upload_path'] = './assets/geojson/';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('geojson_kecamatan')) {
                    // cek data lama jika ada maka data dihapus
                    $old_file = $data['kecamatan']['geojson_kecamatan'];
                    if ($old_file != '') {
                        unlink(FCPATH . '/assets/geojson/' . $old_file);
                    }

                    $new_geojson = $this->upload->data('file_name');
                    $this->db->set('geojson_kecamatan', $new_geojson);
                } else {
                    echo $this->upload->display_errors();
                }
            }

            $this->Kecamatan_model->editkecamatan();
            $this->session->set_flashdata('message', 'diubah');
            redirect('kecamatan');
        }
    }

    public function delete($id)
    {
        // $data['row'] = $this->User_model->get($id)->row_array();

        $this->Kecamatan_model->delete($id);


        // $this->User_model->deleteuser($id);
        $this->session->set_flashdata('message', 'dihapus');
        redirect('kecamatan');
    }
}