<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('laporan_model', 'laporan');
	}

	public function index()
	{
		$data = array(
			'title'	=> 'Laporan Transaksi', 
			'content'	=> 'admin/laporan/v_content'
		);
		$this->load->view('admin/layout/v_wrapper', $data, FALSE);
	}

	public function cetak()
	{
		$bulan = $this->input->get('bulan');
		$tahun = $this->input->get('tahun');
		$perbulan = $this->laporan->perbulan($bulan,$tahun);
		$data = array(
			'title' => 'Laporan Transaksi',
			'data'  => $perbulan
		);
		$this->load->view('admin/laporan/v_laporan', $data, FALSE);
	}

}

/* End of file Laporan.php */
/* Location: ./application/controllers/admin/Laporan.php */
