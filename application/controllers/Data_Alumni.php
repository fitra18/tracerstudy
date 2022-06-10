<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_Alumni extends CI_Controller {

  public function __construct() {
		parent::__construct();
		$this->load->model('M_alumni');
		cek_login();
		check_admin();
	}
  
	public function index()
	{
		$data = [
			'title' => 'Data Alumni',
			'alumni' => $this->M_alumni->get(),
		];

		$this->load->view('layout/header', $data);
		$this->load->view('layout/sidebar', $data);
		$this->load->view('layout/navbar', $data);
		$this->load->view('content/admin/dataAlumni/index', $data);
		$this->load->view('layout/footer');
	}
	public function detail() {

		$idmhs = $this->input->post('id_bdta');
		echo json_encode($this->M_alumni->getAlumni($idmhs));
	}
}
