<?php
// use Restserver\Libraries\REST_Controller;
defined('BASEPATH') or exit('No direct script access allowed');

// use chriskacerguis\RestServer\RestController;
// require APPPATH . 'libraries/REST_Controller.php';
// require APPPATH . 'libraries/Format.php';


class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('User_model');

        if (!$this->session->userdata('no_hp')) {
            redirect('auth');
        } elseif ($this->session->userdata('role') !== 'Admin') {
            redirect('auth/blocked');
        }
    }

    public function index()
    {
        $data['user'] = $this->db->get_where('users', ['no_hp' => $this->session->userdata('no_hp')])->row_array();
        // echo 'selamat datang user ' . $data['user']['nama'];
        // $no_hp = $this->session->userdata('no_hp');
        // $data['users'] = $this->User_model->get_profil();
        $data['row'] = $this->User_model->get()->result_array();

        $data['title'] = 'SIPUDAK';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/index');
        $this->load->view('templates/footer', $data);

        
    }

    public function adduser()
    {
        $data['user'] = $this->db->get_where('users', ['no_hp' => $this->session->userdata('no_hp')])->row_array();
        // $data['users'] = $this->User_model->get_profil();
        // $data['profil'] = $this->User_model->get_profil();
        $data['role'] = ['Admin', 'Psikolog', 'Konselor', 'Peksos', 'Operator', 'User'];

        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[users.email]');
        $this->form_validation->set_rules('no_hp', 'Nomor Hp', 'required|trim|is_unique[users.no_hp]');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim');
        $this->form_validation->set_rules('role', 'Role', 'required|trim');
        $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[3]');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Halaman Tambah User';
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar');
            $this->load->view('templates/topbar', $data);
            $this->load->view('user/adduser');
            $this->load->view('templates/footer', $data);
        } else {
            $this->User_model->tambahuser();
            $this->session->set_flashdata('message', 'ditambah');
            redirect('user');
        }
    }
    public function detailuser($id)
    {
        $data['user'] = $this->db->get_where('users', ['no_hp' => $this->session->userdata('no_hp')])->row_array();
        // $data['users'] = $this->User_model->get_profil();
        // $data['profil'] = $this->User_model->get_profil();
        $data['row'] = $this->User_model->get($id)->row_array();

        $data['title'] = 'SIPUDAK';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/detailuser');
        $this->load->view('templates/footer', $data);
    }

    public function edituser($id)
    {
        $data['user'] = $this->db->get_where('users', ['no_hp' => $this->session->userdata('no_hp')])->row_array();

        $data['row'] = $this->User_model->get($id)->row_array();
        $data['role'] = ['Admin', 'Psikolog', 'Konselor', 'Peksos', 'Operator', 'User'];

        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
        // $this->form_validation->set_rules('no_hp', 'Nomor Hp', 'required|trim');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim');
        $this->form_validation->set_rules('role', 'Role', 'required|trim');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Halaman Edit User';
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar');
            $this->load->view('templates/topbar', $data);
            $this->load->view('user/edituser');
            $this->load->view('templates/footer', $data);
        } else {
            $this->User_model->edituser();
            $this->session->set_flashdata('message', 'diedit');
            redirect('user');
        }
    }

    public function delete($id)
    {
        // $data['row'] = $this->User_model->get($id)->row_array();

        $this->User_model->deleteuser($id);


        // $this->User_model->deleteuser($id);
        $this->session->set_flashdata('message', 'dihapus');
        redirect('user');
    }
}