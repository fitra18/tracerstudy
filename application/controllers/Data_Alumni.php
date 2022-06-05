<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_Alumni extends CI_Controller {
	public function index()
	{
		cek_login();
		$data = [
			'title' => 'Data Alumni'
		];
		$this->load->view('layout/header', $data);
		$this->load->view('layout/sidebar', $data);
		$this->load->view('layout/navbar', $data);
		$this->load->view('content/admin/dataAlumni/index');
		$this->load->view('layout/footer');
	}
}
