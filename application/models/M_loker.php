<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_loker extends CI_Model 
{
	public function get_all_data() 
	{
		$this->db->from('loker');
		$this->db->order_by('id_loker', 'asc');
		return $this->db->get()->result();
	}

	public function get_detail($id_loker)
	{
		$this->db->from('loker');
		$this->db->where('id_loker', $id_loker);
		return $this->db->get()->row();
	}

	public function get_data($id_loker) 
	{
		$this->db->from('loker');
		$this->db->where('id_loker', $id_loker);
		return $this->db->get()->row();
	}

	public function add($data)
	{
		$this->db->insert('loker', $data);
	}

	public function edit($data)
	{
		$this->db->where('id_loker', $data['id_loker']);
		$this->db->update('loker', $data);
	}
	
	public function delete($data)
	{
		$this->db->where('id_loker', $data['id_loker']);
		$this->db->delete('loker', $data);
	}

	//______________________________________________________________________________________________________
}
