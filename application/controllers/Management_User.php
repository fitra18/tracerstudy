<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Management_User extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('M_user');
	}

	public function index()
	{
		$data = [
			'title' => 'Management User',
			'user' => $this->M_user->get()
		];
		// print_r($data['user']); die;
		$this->load->view('layout/header', $data);
		$this->load->view('layout/sidebar', $data);
		$this->load->view('layout/navbar', $data);
		$this->load->view('content/admin/management_user/index', $data);
		$this->load->view('layout/footer');
	}

	public function add()
	{
		// $this->form_validation->set_rules('nama', 'Nama', 'trim|required');
		// $this->form_validation->set_rules('nim', 'NIM', 'trim|required');
		// $this->form_validation->set_rules('username', 'username', 'trim|required');
		// $this->form_validation->set_rules('pass', 'pass', 'trim|required');
		// $this->form_validation->set_rules('status', 'status', 'trim|required');
		// $this->form_validation->set_rules('role', 'role', 'trim|required');

		$data 	= [
			'nama' => $this->input->post('nama'),			
			'nim' => $this->input->post('nim'),			
			'username' => $this->input->post('username'),			
			'pass' => $this->input->post('pass'),			
			'status' => $this->input->post('status'),			
			'role' => $this->input->post('role'),			
		];
		$result = $this->M_user->insert($data);
		if ($result > 0) {
			$this->session->set_flashdata('pesan', 'Data Berhasil Di Tambahkan !!!');
			redirect('Management_User');
		} else {
			$this->session->set_flashdata('error', 'Data Gagal di Tambahkan !!!');
			redirect('Management_User');
		}
	}

	public function edit()
	{
		$data = [
			'username' => $this->input->post('username'),
			'pass' => $this->input->post('pass'),
			'id' => $this->input->post('id')
		];
		$result = $this->M_user->update($data);
		if ($result > 0) {
			$this->session->set_flashdata('pesan', 'Data Berhasil Di Ubah !!!');
			redirect('Management_User');
		} else {
			$this->session->set_flashdata('error', 'Data Gagal di Ubah !!!');
			redirect('Management_User');
		}
		
	}

	public function delete()
	{
		$id = $this->input->post('idhapusmhs');
		$result = $this->M_user->delete($id);
		if ($result > 0) {
			$this->session->set_flashdata('pesan', 'Data Berhasil di Hapus !!!');
			redirect('Management_User');
		} else {
			$this->session->set_flashdata('error', 'Data Gagal di Hapus !!!');
			redirect('Management_User');
		}
	}

}
