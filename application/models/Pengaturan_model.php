<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengaturan_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function get_admin($id_admin)
	{
		$this->db->select('*');
		$this->db->from('admin');
		$this->db->where('id_admin', $id_admin);
		$query = $this->db->get();
		return $query->row();
	}

	public function instansi($id=1)
	{
		$this->db->select('*');
		$this->db->from('instansi');
		$this->db->where('id_instansi', $id);
		$query = $this->db->get();
		return $query->row();
	}

	public function edit_instansi($data)
	{
		$this->db->where('id_instansi', $data['id_instansi']);
		$this->db->update('instansi', $data);
	}

}

/* End of file Pengaturan_model.php */
/* Location: ./application/models/Pengaturan_model.php */