<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jenis_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function list()
	{
		$this->db->select('*');
		$this->db->from('jenis_grooming');
		$this->db->order_by('id_jenis_grooming', 'desc');
		$query = $this->db->get();
		return $query->result();
	}

	public function detail($id_jenis_grooming)
	{
		$this->db->select('*');
		$this->db->from('jenis_grooming');
		$this->db->where('id_jenis_grooming', $id_jenis_grooming);
		$query = $this->db->get();
		return $query->row();
	}

	public function edit($data)
	{
		$this->db->where('id_jenis_grooming', $data['id_jenis_grooming']);
		$this->db->update('jenis_grooming', $data);
	}
	public function delete($data)
	{
		$this->db->where('id_jenis_grooming', $data['id_jenis_grooming']);
		$this->db->delete('jenis_grooming');
	}
}