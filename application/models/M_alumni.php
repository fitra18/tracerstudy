<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_alumni extends CI_Model {
	public function get() {

		$sql = "SELECT * FROM `alumni`";

		$data = $this->db->query($sql);
	
		return $data->result();	
	}
}
