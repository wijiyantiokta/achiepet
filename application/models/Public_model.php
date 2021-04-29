<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Public_model extends CI_Model {

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

	public function get_instansi($id=1)
	{
		$this->db->select('*');
		$this->db->from('instansi');
		$this->db->where('id_instansi', $id);
		$query = $this->db->get();
		return $query->row();
	}

	public function totlayanan()
	{
		$this->db->select('*');
		$this->db->from('jenis_grooming');
		$query = $this->db->get();
		return $query->num_rows();
	}

	public function totbooking()
	{
		$this->db->select('*');
		$this->db->from('booking');
		$query = $this->db->get();
		return $query->num_rows();
	}

	public function totpelanggan()
	{
		$this->db->select('*');
		$this->db->from('pelanggan');
		$query = $this->db->get();
		return $query->num_rows();
	}

	public function totadmin()
	{
		$this->db->select('*');
		$this->db->from('admin');
		$query = $this->db->get();
		return $query->num_rows();
	}

}