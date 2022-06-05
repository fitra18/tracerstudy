<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Management_User extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('M_user');
	}

	public function index()
	{
		cek_login();
		$data = [
			'title' => 'Management User',
			'user' => $this->M_user->get()
		];
		$this->load->view('layout/header', $data);
		$this->load->view('layout/sidebar', $data);
		$this->load->view('layout/navbar', $data);
		$this->load->view('content/admin/management_user/index', $data);
		$this->load->view('layout/footer');
	}


}
