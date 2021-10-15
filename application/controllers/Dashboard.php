<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
	// public function __construct()
	// {
	// 	parent::__construct();
	// 	$this->load->model('permission_model');
	// }

	// public function index()
	// {

	// 	$this->template->load('template', 'dashboard');
	// }
	public function __construct()
	{
		parent::__construct();
		$this->load->model('permission_model');
		$this->load->model('User_model');
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
		$this->load->view('dashboard');
		$this->load->view('templates/footer', $data);
	}
}