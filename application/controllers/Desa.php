<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Desa extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('permission_model');
        $this->load->model('Desa_model');
        if (!$this->session->userdata('no_hp')) {
            redirect('auth');
        }
    }

    public function index()
    {
        $data['user'] = $this->db->get_where('users', ['no_hp' => $this->session->userdata('no_hp')])->row_array();

        // PAGINATION
        $config['base_url']     = site_url('desa/index');
        $config['total_rows']   = $this->db->count_all('desa');
        $config['per_page']     = 20;
        $config['uri_segment']  = 3;
        $choice                 = $config["total_rows"] / $config['per_page'];
        $config["num_links"]    = floor($choice);

        $config['first_link']   = 'First';
        $config['last_link']    = 'Last';
        $config['next_link']    = 'Next';
        $config['prev_link']    = 'Prev';
        $config['full_tag_open'] = '<div class="pagging text-right"><ul class="pagination justify-content-center">';
        $config['full_tag_close'] = '</ul></nav></div>';
        $config['num_tag_open'] = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close'] = '</span></li>';
        $config['cur_tag_open'] = '<li class="page-item active"><span class="page-link">';
        $config['car_tag_close'] = '</span></li>';
        $config['next_tag_open'] = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close'] = '<span aria-hidden="true">$raquo</span></span></li>';
        $config['prev_tag_open'] = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close'] = '</span>Next</li>';
        $config['first_tag_open'] = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open'] = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close'] = '</span></li>';


        $this->pagination->initialize($config);
        $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

        $data['desa'] = $this->Desa_model->get_desa($config["per_page"], $data['page'])->result_array();
        $data['pagination'] = $this->pagination->create_links();
        // END PAGINATION

        // $data['desa'] = $this->Desa_model->get_page_desa(10);

        $data['title'] = 'SIPUDAK';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar', $data);
        $this->load->view('desa/index');
        $this->load->view('templates/footer', $data);
    }

    public function adddesa()
    {
        $data['user'] = $this->db->get_where('users', ['no_hp' => $this->session->userdata('no_hp')])->row_array();
        $data['kecamatan'] = $this->db->get('kecamatan')->result_array();


        $this->form_validation->set_rules('nama_desa', 'Desa', 'required|trim');
        $this->form_validation->set_rules('nama_kecamatan', 'Kecamatan', 'required|trim');



        if ($this->form_validation->run() == false) {
            $data['title'] = 'Halaman Tambah Desa';
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar');
            $this->load->view('templates/topbar', $data);
            $this->load->view('desa/adddesa');
            $this->load->view('templates/footer', $data);
        } else {
            $this->Desa_model->adddesa();
            $this->session->set_flashdata('message', 'ditambah');
            redirect('desa');
        }
    }

    public function editdesa($id)
    {
        $data['user'] = $this->db->get_where('users', ['no_hp' => $this->session->userdata('no_hp')])->row_array();
        $data['kecamatan'] = $this->db->get('kecamatan')->result_array();
        $data['desa'] = $this->Desa_model->get_detail_desa($id)->row_array();

        $this->form_validation->set_rules('nama_desa', 'Desa', 'required|trim');
        $this->form_validation->set_rules('nama_kecamatan', 'Kecamatan', 'required|trim');



        if ($this->form_validation->run() == false) {
            $data['title'] = 'Halaman Edit Desa';
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar');
            $this->load->view('templates/topbar', $data);
            $this->load->view('desa/editdesa');
            $this->load->view('templates/footer', $data);
        } else {
            $this->Desa_model->editdesa();
            $this->session->set_flashdata('message', 'diubah');
            redirect('desa');
        }
    }

    public function delete($id)
    {

        $this->Desa_model->delete($id);

        // $this->User_model->deleteuser($id);
        $this->session->set_flashdata('message', 'dihapus');
        redirect('desa');
    }

    public function search() 
    {
        $data['user'] = $this->db->get_where('users', ['no_hp' => $this->session->userdata('no_hp')])->row_array();
        $keyword = $this->input->post('keyword');
        $data['kecamatan'] = $this->db->get('kecamatan')->result_array();
        $data['desa'] = $this->Desa_model->get_keyword($keyword)->result_array();
        $data['pagination'] = $this->pagination->create_links();
        // Print_r($data['desa']);
        // die;
      

        $data['title'] = 'SIPUDAK';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar', $data);
        $this->load->view('desa/index', $data);
        $this->load->view('templates/footer', $data);
    }
}