<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
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
	// public function __construct()
	// {
	// 	parent::__construct();
	// 	$this->load->model('permission_model');
	// 	$this->load->model('User_model');
	// 	$this->load->model('Kecamatan_model');

	// 	if (!$this->session->userdata('no_hp')) {
	// 		redirect('auth');
	// 	} elseif ($this->session->userdata('role') !== 'Admin') {
	// 		redirect('auth/blocked');
	// 	}
	// }

	public function index()
	{
		// $data['user'] = $this->db->get_where('users', ['no_hp' => $this->session->userdata('no_hp')])->row_array();

		// $data['kecamatan'] = $this->Kecamatan_model->get_kecamatan()->result_array();

		// $data['title'] = 'SIPUDAK';
		$this->load->view('frontend/templates/head');
		$this->load->view('frontend/templates/header');
		$this->load->view('frontend/templates/section');
		$this->load->view('frontend/templates/content');
		$this->load->view('frontend/templates/footer');
		// $this->load->view('templates/footer', $data);
        // echo 'home/frontend/SoftLand/index';
	}
}