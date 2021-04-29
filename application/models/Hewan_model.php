<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hewan_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}	

	public function list()
	{
		$this->db->select('*');
		$this->db->from('hewan');
		$this->db->order_by('id_hewan', 'desc');
		$query = $this->db->get();
		return $query->result();
	}

	public function add($data)
	{
		$this->db->insert('hewan', $data);
	}

	public function edit($data)
	{
		$this->db->where('id_hewan', $data['id_hewan']);
		$this->db->update('hewan', $data);
	}

}

/* End of file Hewan_model.php */
/* Location: ./application/models/Hewan_model.php */