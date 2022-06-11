<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('M_admin');
	}

	public function index()
	{
		$data = [
			'title' 		=> 'Home',
			'total_loker'	=>	$this->M_admin->total_loker(),
			'total_alumni'	=>	$this->M_admin->total_alumni(),
			'total_sudah'	=>	$this->M_admin->total_data_sudah(),
			'total_belum'	=>	$this->M_admin->total_data_belum()
		];
		$this->load->view('content/landingpage/index', $data);
	}
}
