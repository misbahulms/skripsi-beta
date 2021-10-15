<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        if ($this->session->userdata('no_hp')) {
            redirect('Dashboard');
        }

        $this->form_validation->set_rules('no_hp', 'Nomor Hp', 'trim|required', [
            "required" => "Silahkan masukkan nomor hp anda"
        ]);
        $this->form_validation->set_rules('password', 'Password', 'trim|required', [
            "required" => "Silahkan masukkan password dengan benar"
        ]);

        if ($this->form_validation->run() == false) {
            $data['title'] = 'SIPUDAK';
            $this->load->view('templates/auth_header', $data);
            $this->load->view('auth/login');
            $this->load->view('templates/auth_footer');
        } else {
            // jika validasinya berhasil
            $this->_login();
        }
    }

    private function _login()
    {
        $no_hp = $this->input->post('no_hp');
        $password = $this->input->post('password');

        $user = $this->db->get_where('users', ['no_hp' => $no_hp])->row_array();

        // jika usernya ada
        if ($user) {
            // jika usernya aktif
            if ($user['is_active'] == 1) {
                // cek password
                if (password_verify($password, $user['password'])) {
                    $data = [
                        'no_hp' => $user['no_hp'],
                        'role' => $user['role']
                    ];
                    $this->session->set_userdata($data);
                    if ($user['role'] == 'Admin') {
                        redirect('dashboard');
                    } else {
                        redirect('dashboard');
                    }
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger text-center" role="alert">Nomor Hp atau Password Salah! </div>');
                    redirect('auth');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger text-center" role="alert">Akun anda belum aktif! </div>');
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger text-center" role="alert">User tidak ditemukan! </div>');
            redirect('auth');
        }
    }

    public function registration()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[users.email]');
        $this->form_validation->set_rules('no_hp', 'Nomor Hp', 'required|trim|is_unique[users.no_hp]');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim');
        $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[3]|matches[cpassword]');
        $this->form_validation->set_rules('cpassword', 'Password', 'required|trim|matches[password]');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Halaman registrasi';
            $this->load->view('templates/auth_header', $data);
            $this->load->view('auth/registration');
            $this->load->view('templates/auth_footer');
        } else {
            $data = [
                'nama' => htmlspecialchars($this->input->post('nama', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'image' => 'default.jpg',
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                'no_hp' => ($this->input->post('no_hp', true)),
                'alamat' => ($this->input->post('alamat', true)),
                'is_active' => 1,
                'date_created' => date('Y-m-d h:i:s'),
                'role' => 'User'
            ];

            // insert ke dalam database
            $this->db->insert('users', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success text-center" role="alert">Akun anda berhasil ditambahkan, silahkan login! </div>');
            redirect('auth');
        }
    }

    public function logout()
    {

        $this->session->unset_userdata('no_hp');
        $this->session->unset_userdata('role');

        $this->session->set_flashdata('message', '<div class="alert alert-success text-center" role="alert">Anda berhasil keluar ! </div>');
        redirect('auth');
    }

    public function blocked()
    {
        $this->load->view('auth/blocked');
    }
}