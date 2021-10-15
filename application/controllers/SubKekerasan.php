<?php
defined('BASEPATH') or exit('No direct script access allowed');

class SubKekerasan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('permission_model');
        $this->load->model('SubKekerasan_model');

        if (!$this->session->userdata('no_hp')) {
            redirect('auth');
        } elseif ($this->session->userdata('role') !== 'Admin') {
            redirect('auth/blocked');
        }
    }

    public function index()
    {
        $data['user'] = $this->db->get_where('users', ['no_hp' => $this->session->userdata('no_hp')])->row_array();

        $data['sub_kekerasan'] = $this->SubKekerasan_model->get_sub_kekerasan()->result_array();

        $data['title'] = 'SIPUDAK';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar', $data);
        $this->load->view('subKekerasan/index');
        $this->load->view('templates/footer', $data);
    }

    public function addSubKekerasan()
    {
        $data['user'] = $this->db->get_where('users', ['no_hp' => $this->session->userdata('no_hp')])->row_array();
        $data['kekerasan'] = $this->db->get('bentuk_kekerasan')->result_array();


        $this->form_validation->set_rules('sub_jenis_kekerasan', 'Sub Kekerasan', 'required|trim');
        $this->form_validation->set_rules('jenis_kekerasan', 'Kekerasan', 'required|trim');



        if ($this->form_validation->run() == false) {
            $data['title'] = 'Halaman Tambah Bentuk Kekerasan';
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar');
            $this->load->view('templates/topbar', $data);
            $this->load->view('subKekerasan/addSubKekerasan');
            $this->load->view('templates/footer', $data);
        } else {
            $this->SubKekerasan_model->addSubKekerasan();
            $this->session->set_flashdata('message', 'ditambah');
            redirect('subKekerasan');
        }
    }

    public function editSubKekerasan($id)
    {
        $data['user'] = $this->db->get_where('users', ['no_hp' => $this->session->userdata('no_hp')])->row_array();
        $data['kekerasan'] = $this->db->get('bentuk_kekerasan')->result_array();
        $data['sub_kekerasan'] = $this->SubKekerasan_model->get_detail_kekerasan($id)->row_array();

        $this->form_validation->set_rules('sub_jenis_kekerasan', 'Sub Kekerasan', 'required|trim');
        $this->form_validation->set_rules('jenis_kekerasan', 'Kekerasan', 'required|trim');



        if ($this->form_validation->run() == false) {
            $data['title'] = 'Halaman Edit Bentuk Kekerasan';
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar');
            $this->load->view('templates/topbar', $data);
            $this->load->view('subKekerasan/editSubKekerasan');
            $this->load->view('templates/footer', $data);
        } else {
            $this->SubKekerasan_model->editSubKekerasan();
            $this->session->set_flashdata('message', 'diubah');
            redirect('subKekerasan');
        }
    }

    public function delete($id)
    {

        $this->SubKekerasan_model->delete($id);
        $this->session->set_flashdata('message', 'dihapus');
        redirect('subKekerasan');
    }
}