<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bank_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}	
	
	public function list()
	{
		$this->db->select('*');
		$this->db->from('bank');
		$this->db->order_by('id_bank', 'desc');
		$query = $this->db->get();
		return $query->result();
	}	

	public function detail($id_bank)
	{
		$this->db->select('*');
		$this->db->from('bank');
		$this->db->where('id_bank', $id_bank);
		$query = $this->db->get();
		return $query->row();
	}	

	public function add($data)
	{
		$this->db->insert('bank', $data);
	}

	public function edit($data)
	{
		$this->db->where('id_bank', $data['id_bank']);
		$this->db->update('bank', $data);
	}

	public function delete($data)
	{
		$this->db->where('id_bank', $data['id_bank']);
		$this->db->delete('bank');
	}

}

/* End of file Bank_model.php */
/* Location: ./application/models/Bank_model.php */