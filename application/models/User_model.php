<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}	

	public function list()
	{
		$this->db->select('*');
		$this->db->from('admin');
		$this->db->order_by('id_admin', 'desc');
		$query = $this->db->get();
		return $query->result();
	}

	public function detail($id_admin)
	{
		$this->db->select('*');
		$this->db->from('admin');
		$this->db->where('id_admin', $id_admin);
		$query = $this->db->get();
		return $query->row();
	}

	public function edit($data)
	{
		$this->db->where('id_admin', $data['id_admin']);
		$this->db->update('admin', $data);
	}

	public function delete($data)
	{
		$this->db->where('id_admin', $data['id_admin']);
		$this->db->delete('admin');
	}

	public function cek_username($username)
	{
		$this->db->select('*');
		$this->db->from('admin');
		$this->db->where('username', $username);
		$query = $this->db->get();
		return $query->num_rows();
	}
	public function login($username,$enpass)
	{
		$username = $this->db->escape_str($username);
		$password = $this->db->escape_str($enpass);
		$this->db->select('*');
		$this->db->from('admin');
		$this->db->where(array(
			'username' => $username,
			'password' => sha1($password)
		));
		$query = $this->db->get();
		return $query->row();
	}

	public function ubahpassword($data)
	{
		$this->db->where('id_admin', $data['id_admin']);
		$this->db->update('admin', $data);
	}

}

/* End of file User_model.php */
/* Location: ./application/models/User_model.php */