<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_admin extends CI_Model 
{
	public function total_loker() 
	{
		return $this->db->get('loker')->num_rows();
	}

	public function total_alumni() 
	{
		return $this->db->get('alumni')->num_rows();
	}

	public function total_user() 
	{
		return $this->db->get('user')->num_rows();
	}

	public function total_data_sudah()
	{
		$this->db->select('*');
		$this->db->where('stbiodata', 1);
		$this->db->where('idks1', 1);
		$this->db->where('stks1', 1);
		$this->db->where('idks2', 1);
		$this->db->where('stks2', 1);
		$this->db->where('idks3', 1);
		$this->db->where('stks3', 1);
		$this->db->where('idks4', 1);
		$this->db->where('stks4', 1);
		return $this->db->get('alumni')->num_rows();
	}

	public function total_data_belum()
	{
		$this->db->select('*');
		$this->db->or_where('stbiodata', 0);
		$this->db->or_where('idks1', 0);
		$this->db->or_where('stks1', 0);
		$this->db->or_where('idks2', 0);
		$this->db->or_where('stks2', 0);
		$this->db->or_where('idks3', 0);
		$this->db->or_where('stks3', 0);
		$this->db->or_where('idks4', 0);
		$this->db->or_where('stks4', 0);
		return $this->db->get('alumni')->num_rows();
	}
}
