<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Booking_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}	

	public function cek($tanggal,$jam)
	{
		$this->db->select('*');
		$this->db->from('booking');
		$this->db->where(array('tanggal'=>$tanggal, 'jam'=>$jam));
		$query = $this->db->get();
		return $query->num_rows();
	}

	public function list()
	{
		$this->db->select('*');
		$this->db->from('booking');
		$this->db->join('jenis_grooming', 'booking.id_jenis_grooming = jenis_grooming.id_jenis_grooming', 'left');
		$this->db->join('pelanggan', 'pelanggan.id_pelanggan = pelanggan.id_pelanggan', 'left');
		$this->db->order_by('id_booking', 'desc');
		$query = $this->db->get();
		return $query->result();
	}

	public function list2()
	{
		$this->db->select('*,jenis_grooming.jenis_grooming,DATE_ADD(created, INTERVAL 2 HOUR) as qq');
		$this->db->from('booking');
		$this->db->join('jenis_grooming', 'booking.id_jenis_grooming = jenis_grooming.id_jenis_grooming', 'left');
		$this->db->join('pelanggan', 'booking.id_pelanggan = pelanggan.id_pelanggan', 'left');
		$this->db->order_by('id_booking', 'desc');
		$this->db->group_by('id_booking');
		$query = $this->db->get();
		return $query->result();
	}

	public function detail($kode_booking)
	{
		$this->db->select('*');
		$this->db->from('booking');
		$this->db->join('jenis_grooming', 'booking.id_jenis_grooming = jenis_grooming.id_jenis_grooming', 'left');
		$this->db->join('pelanggan', 'pelanggan.id_pelanggan = booking.id_pelanggan', 'left');
		$this->db->where('kode_booking', $kode_booking);
		$query = $this->db->get();
		return $query->row();
	}

	public function pembayaran($kode_booking)
	{
		$this->db->select('*');
		$this->db->from('pembayaran');
		$this->db->where('kode_booking', $kode_booking);
		$query = $this->db->get();
		return $query->row();
	}

	public function pelanggan($id_pelanggan)
	{
		$this->db->select('*,DATE_ADD(created, INTERVAL 2 HOUR) as qq');
		$this->db->from('booking');
		$this->db->join('jenis_grooming', 'booking.id_jenis_grooming = jenis_grooming.id_jenis_grooming', 'left');
		$this->db->join('pelanggan', 'pelanggan.id_pelanggan = pelanggan.id_pelanggan', 'left');
		$this->db->where('booking.id_pelanggan', $id_pelanggan);
		$this->db->group_by('id_booking');
		$this->db->order_by('id_booking', 'desc');
		$query = $this->db->get();
		return $query->result();
	}

	public function update($pem)
	{
		$this->db->where('id_booking', $pem['id_booking']);
		$this->db->update('booking', $pem);
	}

	public function konfirmasi($data)
	{
		$this->db->where('id_booking', $data['id_booking']);
		$this->db->update('booking', $data);
	}
}
