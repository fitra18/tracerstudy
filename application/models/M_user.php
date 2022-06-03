<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_user extends CI_Model {
	public function get() {

		$sql = "SELECT
		alumni.nama,
		alumni.nim,
		user.active
		FROM user
		JOIN alumni ON user.idmhs = alumni.idmhs";

		$data = $this->db->query($sql);
	
		return $data->result();	
	}
}
