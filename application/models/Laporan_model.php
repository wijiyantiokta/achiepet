<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function perbulan($bulan,$tahun)
	{
		$this->db->select('*');
		$this->db->from('booking');
		$this->db->join('jenis_grooming', 'booking.id_jenis_grooming = jenis_grooming.id_jenis_grooming', 'left');
		$this->db->join('pelanggan', 'booking.id_pelanggan = pelanggan.id_pelanggan', 'left');
		$where = "month(tanggal)='$bulan'AND year(tanggal)='$tahun'";
		$this->db->where($where);
		$this->db->group_by('id_booking');
		$this->db->order_by('id_booking', 'asc');
		$this->db->where('status', 'lunas'); 
		$query = $this->db->get();
		return $query->result();	
	}

}

/* End of file Laporan_model.php */
/* Location: ./application/models/Laporan_model.php */
