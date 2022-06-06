<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_user extends CI_Model {
	public function get() {

		$sql = "SELECT
		user.iduser,
		alumni.nim,
		user.nama,
		user.username,
		user.pass,
		user.role,
		user.active
		FROM user
		LEFT JOIN alumni ON user.idmhs = alumni.idmhs";

		$data = $this->db->query($sql);
	
		return $data->result();	
	}

	public function insert($data)
	{
		if (($data['nim'] === '') && ($data['role'] == 1)){
			$sql = "INSERT INTO `user`(`iduser`, `nama`, `username`, `pass`, `idmhs`, `role`, `active`) VALUES ('','" .$data['nama'] ."','" .$data['username'] ."','" .$data['pass'] ."','','" .$data['role'] ."','" .$data['status'] ."')";
			$this->db->query($sql);
			return $this->db->affected_rows();
		} else if ($data['nim'] != '') {
			$sql1 = "INSERT INTO `alumni`(`idmhs`, `nama`, `nim`) VALUES ('','" .$data['nama'] ."','" .$data['nim'] ."')";
			$this->db->query($sql1);
			$id = $this->db->insert_id();
			$sql = "INSERT INTO `user`(`iduser`, `nama`, `username`, `pass`, `idmhs`, `role`, `active`) VALUES ('','" .$data['nama'] ."','" .$data['username'] ."','" .$data['pass'] ."','".$id."','" .$data['role'] ."','" .$data['status'] ."')";
			$this->db->query($sql);
			return $this->db->affected_rows();
		}
	}

	public function update($data) {		
		$sql = "UPDATE `user` SET `username` = '" .$data['username'] ."', `pass` = '" .$data['pass'] ."' WHERE `iduser` = '" .$data['id'] ."';";

		$this->db->query($sql);

		return $this->db->affected_rows();
	}

	public function delete($id) {
		$sql = "DELETE FROM user WHERE iduser='" .$id ."'";

		$this->db->query($sql);

		return $this->db->affected_rows();
	}
}
