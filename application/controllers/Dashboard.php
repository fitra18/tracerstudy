<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('M_admin');
		cek_login();
	}

	public function index()
	{
		cek_login();
		$data = [
			'title' 		=> 'Dashboard',
			'total_loker'	=>	$this->M_admin->total_loker(),
			'total_alumni'	=>	$this->M_admin->total_alumni(),
			'total_user'	=>	$this->M_admin->total_user(),
			'total_sudah'	=>	$this->M_admin->total_data_sudah(),
			'total_belum'	=>	$this->M_admin->total_data_belum()
		];
		$this->load->view('layout/header', $data);
		$this->load->view('layout/sidebar', $data);
		$this->load->view('layout/navbar', $data);
		$this->load->view('content/admin/dashboard/index');
		$this->load->view('layout/footer');

	}
}
