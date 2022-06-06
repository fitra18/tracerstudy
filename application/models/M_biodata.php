<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_biodata extends CI_Model {
	public function update($table, $data) {

		$query = $this->db->update($table, $data);
        return $query;	
	}
}
