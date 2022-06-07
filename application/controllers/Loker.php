<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Loker extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('M_loker');
		cek_login();
	}

	public function index()
	{
		$data = [
			'title' => 'Lowongan Pekerjaan',
			'loker' => $this->M_loker->get_all_data()
		];
		$this->load->view('layout/header', $data);
		$this->load->view('layout/sidebar', $data);
		$this->load->view('layout/navbar', $data);
		$this->load->view('content/admin/loker/index', $data);
		$this->load->view('layout/footer');
	}

	// public function detail()
	// {
	// 	$data = [
	// 		'title' => 'Detail Lowongan Pekerjaan',
	// 		'loker' => $this->M_loker->get_detail($id_loker)
	// 	];
	// }

	public function add()
	{
		$nama_perusahaan 	= $this->input->post('nama_perusahaan');
		$bidang_usaha 		= $this->input->post('bidang_usaha');
		$job_title 			= $this->input->post('job_title');
		$deskripsi 			= $this->input->post('deskripsi');
		$tgl_berakhir 		= $this->input->post('tgl_berakhir');
		$gambar				= $_FILES['gambar'];
		if ($gambar=''){}else {
			$config['upload_path']		= './assets/gambar';
			$config['allowed_types']	= 'jpg|png|gif|jpeg';
			
			$this->upload->initialize($config);
			if (!$this->upload->do_upload('gambar')) {
				echo "Upload Gagal"; die();
			}else {
				$gambar = $this->upload->data('file_name');
			}
		}

		$data = array(
			'nama_perusahaan'	=> $nama_perusahaan,
			'bidang_usaha'		=> $bidang_usaha,
			'job_title'			=> $job_title,
			'deskripsi'			=> $deskripsi,
			'tgl_berakhir'		=> $tgl_berakhir,
			'gambar'			=> $gambar,
		);
		$this->M_loker->add($data);
		$this->session->set_flashdata('pesan', 'Data Berhasil Di Tambahkan !!!');
		redirect('loker');
	}

	public function edit($id_loker = NULL)
	{
		$nama_perusahaan 	= $this->input->post('nama_perusahaan');
		$bidang_usaha 		= $this->input->post('bidang_usaha');
		$job_title 			= $this->input->post('job_title');
		$deskripsi 			= $this->input->post('deskripsi');
		$tgl_berakhir 		= $this->input->post('tgl_berakhir');
		$gambar				= $_FILES['gambar'];
		if ($gambar=''){}else {
			$config['upload_path']		= './assets/gambar';
			$config['allowed_types']	= 'jpg|png|gif|jpeg';
			
			$this->upload->initialize($config);
			if (!$this->upload->do_upload('gambar')) {
				$data = array(
					'id_loker'			=> $id_loker,
					'nama_perusahaan'	=> $nama_perusahaan,
					'bidang_usaha'		=> $bidang_usaha,
					'job_title'			=> $job_title,
					'deskripsi'			=> $deskripsi,
					'tgl_berakhir'		=> $tgl_berakhir,
				);
				$this->M_loker->edit($data);
				$this->session->set_flashdata('pesan', 'Data Berhasil Di Edit !!!');
				redirect('loker');
			}else {
				$gambar = $this->upload->data('file_name');
			}
		}
		$loker = $this->M_loker->get_data($id_loker);
		if ($loker->gambar != "") {
			unlink('./assets/gambar/' . $loker->gambar);
		}
		$data = array(
			'id_loker'			=> $id_loker,
			'nama_perusahaan'	=> $nama_perusahaan,
			'bidang_usaha'		=> $bidang_usaha,
			'job_title'			=> $job_title,
			'deskripsi'			=> $deskripsi,
			'tgl_berakhir'		=> $tgl_berakhir,
			'gambar'			=> $gambar,
		);
		$this->M_loker->edit($data);
		$this->session->set_flashdata('pesan', 'Data Berhasil Di Edit !!!');
		redirect('loker');
	}

	public function delete($id_loker = NULL)
	{
		//hapus gambar

		$loker = $this->M_loker->get_data($id_loker);
		if ($loker->gambar != "") {
			unlink('./assets/gambar/' . $loker->gambar);
		}

		//end hapus gambar
		$data = array('id_loker' => $id_loker);
		$this->M_loker->delete($data);
		$this->session->set_flashdata('pesan', 'Data Berhasil Di Hapus !!!');
		redirect('loker');
	}
}
