<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pelanggan_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}	

	public function list()
	{
		$this->db->select('*');
		$this->db->from('pelanggan');
		$this->db->order_by('id_pelanggan', 'desc');
		$query = $this->db->get();
		return $query->result();
	}	

	public function detail($id_pelanggan)
	{
		$this->db->select('*');
		$this->db->from('pelanggan');
		$this->db->where('id_pelanggan', $id_pelanggan);
		$query = $this->db->get();
		return $query->row();
	}	

	public function delete($data)
	{
		$this->db->where('id_pelanggan', $data['id_pelanggan']);
		$this->db->delete('pelanggan');
	}

	public function cek_username($username)
	{
		$this->db->select('*');
		$this->db->from('pelanggan');
		$this->db->where('username_pelanggan', $username);
		$query = $this->db->get();
		return $query->num_rows();
	}
	public function login($username,$enpass)
	{
		$username = $this->db->escape_str($username);
		$password = $this->db->escape_str($enpass);
		$this->db->select('*');
		$this->db->from('pelanggan');
		$this->db->where(array(
			'username_pelanggan' => $username,
			'password_pelanggan' => sha1($password)
		));
		$query = $this->db->get();
		return $query->row();
	}
}

/* End of file Pelanggan_model.php */
/* Location: ./application/models/Pelanggan_model.php */