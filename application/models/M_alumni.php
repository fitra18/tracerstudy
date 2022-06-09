<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_alumni extends CI_Model {
	public function get() {

		$sql = "SELECT * FROM `alumni`";

		$data = $this->db->query($sql);
	
		return $data->result();	
	}

	public function getAlumni($idmhs) {

		$this->db->select('*');
		$this->db->from('alumni');
		$this->db->where('alumni.idmhs', $idmhs);
		$this->db->join('tbk1', 'tbk1.idmhs = alumni.idmhs', 'inner');
		$this->db->join('tbk2', 'tbk2.idmhs = alumni.idmhs', 'inner');
		$this->db->join('tbk3', 'tbk3.idmhs = alumni.idmhs', 'inner');
		$this->db->join('tbk4', 'tbk4.idmhs = alumni.idmhs', 'inner');
		return $this->db->get()->row_array();

	}
}