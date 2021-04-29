<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pelanggan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('pelanggan_model', 'pelanggan');
	}

	public function index()
	{
		$data = array(
			'title'	=> 'Data Pelanggan',
			'data'	=> $this->pelanggan->list(),
			'content'	=> 'admin/pelanggan/v_content'
		);
		$this->load->view('admin/layout/v_wrapper', $data, FALSE);
	}

	public function delete($id_pelanggan)
	{
		$data = array(
			'id_pelanggan'	=> $id_pelanggan
		);
		$this->pelanggan->delete($data);
		$this->session->set_flashdata('sukses', '<i class="fa fa-info-circle"></i> Pelanggan berhasil dihapus!');
		redirect(base_url('admin/pelanggan'), 'refresh');
	}

}

/* End of file Pelanggan.php */
/* Location: ./application/controllers/admin/Pelanggan.php */