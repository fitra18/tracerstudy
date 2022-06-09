<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Biodata extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('M_biodata');
		cek_login();		
    }

	public function index()
	{
		$idmhs = $_SESSION['idhmhs'];
		$data = [
			'title' => 'Biodata'
		];
		$data['status'] = $this->db->get_where('alumni', ['idmhs' => $idmhs])->row_array();

		$this->load->view('layout/header', $data);
		$this->load->view('layout/sidebar', $data);
		$this->load->view('layout/navbar', $data);
		$this->load->view('content/admin/biodata/index');
		$this->load->view('layout/footer');
	}

	public function Data_diri() {
		$idmhs = $_SESSION['idhmhs'];
		$datadiri = [
			'idmhs' => $idmhs,
			// 'nim' => $this->input->post('nim', true),
			// 'nama' => $this->input->post('name', true),
			'ttl' => $this->input->post('ttl', true),
			'jk' => $this->input->post('jk', true),
			'alamat' => $this->input->post('alamat', true),
			'tahunmasuk' => $this->input->post('thn_masuk', true),
			'tahunlulus' => $this->input->post('thn_lulus', true),
			'prodi' => $this->input->post('program_study', true),
			'nohp' => $this->input->post('noHp', true),
			'email' => $this->input->post('email', true),
			'ipk' => $this->input->post('ipk', true),
			'judul' => $this->input->post('judul', true),
			'stbiodata' => 1,
		];

		$this->db->where('idmhs', $idmhs);
		$this->db->update('alumni', $datadiri);
		redirect('Biodata');
	}

	public function Pertanyaan_umum() 
	{
		$idmhs = $_SESSION['idhmhs'];
		$dataPertanyaanUmum = [
			'idmhs' => $idmhs,
			'k1a' => $this->input->post('k1a', true),
			'k1b' => $this->input->post('k1b', true),
			'k1c' => $this->input->post('k1c', true),
			'k1d' => $this->input->post('k1d', true),
			'k1e' => $this->input->post('k1e', true),
			'k1f' => $this->input->post('k1f', true),
			'k1g' => $this->input->post('k1g', true),
			'k1h' => $this->input->post('k1h', true)
		];

		$this->db->insert('tbk1', $dataPertanyaanUmum);
		$tb_pu = $this->db->get_where('tbk1', ['idmhs' => $idmhs])->row_array();

			$data = [
				'stks1' => 1,
				'idks1' => $tb_pu['idks1']
			];
		$this->db->where('idmhs', $idmhs);
		$this->M_biodata->update('alumni', $data);
		redirect('Biodata');
	}

	public function Metode_pembelajaran() 
	{
		$idmhs = $_SESSION['idhmhs'];
		$dataPertanyaanUmum = [
			'idmhs' => $idmhs,
			'k2a' => $this->input->post('k2a', true),
			'k2b' => $this->input->post('k2b', true),
			'k2c' => $this->input->post('k2c', true),
			'k2d' => $this->input->post('k2d', true),
			'k2e' => $this->input->post('k2e', true),
			'k2f' => $this->input->post('k2f', true),
			'k2g' => $this->input->post('k2g', true)
		];

		$this->db->insert('tbk2', $dataPertanyaanUmum);
		$tb_pu = $this->db->get_where('tbk2', ['idmhs' => $idmhs])->row_array();

			$data = [
				'stks2' => 1,
				'idks2' => $tb_pu['idks2']
			];
		
		$this->db->where('idmhs', $idmhs);
		$this->M_biodata->update('alumni', $data);
		redirect('Biodata');
	}

	public function Pekerjaan() 
	{
		$idmhs = $_SESSION['idhmhs'];
		$kc3 = '';
		$kg3 = '';
		$kj3 = '';
		foreach ($this->input->post('k3c') as $kc) {
			$kc3 .= $kc.',';
		};
		foreach ($this->input->post('k3g') as $kg) {
			$kg3 .= $kg.',';
		};
		foreach ($this->input->post('k3j') as $kj) {
			$kj3 .= $kj.',';
		};

		$dataPertanyaanUmum = [
			'idmhs' => $idmhs,
			'k3a' => $this->input->post('k3a', true),
			'k3b' => $this->input->post('k3b', true),
			'k3c' => $kc3,
			'k3d' => $this->input->post('k3d', true),
			'k3e' => $this->input->post('k3e', true),
			'k3f' => $this->input->post('k3f', true),
			'k3g' => $kg3,
			'k3h' => $this->input->post('k3h', true),
			'k3i' => $this->input->post('k3i', true),
			'k3j' => $kj3
		];
	
		$this->db->insert('tbk3', $dataPertanyaanUmum);

		$tb_pu = $this->db->get_where('tbk3', ['idmhs' => $idmhs])->row_array();
	
			$data = [
				'stks3' => 1,
				'idks3' => $tb_pu['idks3']
			];

		$this->db->where('idmhs', $idmhs);
		$this->M_biodata->update('alumni', $data);
		redirect('Biodata');
	}

	public function Kompetensi() 
	{
		$idmhs = $_SESSION['idhmhs'];
		$dataPertanyaanUmum = [
			'idmhs' => $idmhs,
			'k4a' => $this->input->post('k4a', true),
			'k4b' => $this->input->post('k4b', true),
			'k4c' => $this->input->post('k4c', true),
			'k4d' => $this->input->post('k4d', true),
			'k4e' => $this->input->post('k4e', true),
			'k4f' => $this->input->post('k4f', true),
			'k4g' => $this->input->post('k4g', true),
			'k4h' => $this->input->post('k4h', true),
			'k4i' => $this->input->post('k4i', true),
			'k4j' => $this->input->post('k4j', true),
			'k4k' => $this->input->post('k4k', true),
			'k4l' => $this->input->post('k4l', true),
			'k4m' => $this->input->post('k4m', true),
			'k4n' => $this->input->post('k4n', true),
			'k4o' => $this->input->post('k4o', true),
			'k4p' => $this->input->post('k4p', true),
			'k4q' => $this->input->post('k4q', true),
			'k4r' => $this->input->post('k4r', true),
			'k4s' => $this->input->post('k4s', true),
			'k4t' => $this->input->post('k4t', true),
			'k4u' => $this->input->post('k4u', true),
			'k4v' => $this->input->post('k4v', true),
			'k4w' => $this->input->post('k4w', true),
			'k4x' => $this->input->post('k4x', true),
			'k4y' => $this->input->post('k4y', true),
			'k4z' => $this->input->post('k4z', true),
			'k4aa' => $this->input->post('k4aa', true),
			'k4bb' => $this->input->post('k4bb', true),
			'k4cc' => $this->input->post('k4cc', true)
		];
	
		$this->db->insert('tbk4', $dataPertanyaanUmum);
		$tb_pu = $this->db->get_where('tbk4', ['idmhs' => $idmhs])->row_array();
	
			$data = [
				'stks4' => 1,
				'idks4' => $tb_pu['idks4']
			];
	
		$this->db->where('idmhs', $idmhs);
		$this->M_biodata->update('alumni', $data);
		$sts = $this->db->get_where('alumni', ['idmhs' => $idmhs])->row_array();
		$this->session->set_userdata('selesai', $sts['stks4']);
		redirect('Biodata');
	}
}
