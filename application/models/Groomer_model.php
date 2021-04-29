<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Groomer_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function list()
	{
		$this->db->select('*');
		$this->db->from('groomer');
		$this->db->order_by('id_groomer', 'desc');
		$query = $this->db->get();
		return $query->result();
	}

	public function detail($id_groomer)
	{
		$this->db->select('*');
		$this->db->from('groomer');
		$this->db->where('id_groomer', $id_groomer);
		$query = $this->db->get();
		return $query->row();
	}

	public function edit($data)
	{
		$this->db->where('id_groomer', $data['id_groomer']);
		$this->db->update('groomer', $data);
	}

	public function delete($data)
	{
		$this->db->where('id_groomer', $data['id_groomer']);
		$this->db->delete('groomer');
	}

	public function cek_username($username)
	{
		$this->db->select('*');
		$this->db->from('groomer');
		$this->db->where('username_groomer', $username);
		$query = $this->db->get();
		return $query->num_rows();
	}
	public function login($username,$enpass)
	{
		$username = $this->db->escape_str($username);
		$password = $this->db->escape_str($enpass);
		$this->db->select('*');
		$this->db->from('groomer');
		$this->db->where(array(
			'username_groomer' => $username,
			'password_groomer' => sha1($password)
		));
		$query = $this->db->get();
		return $query->row();
	}

}
