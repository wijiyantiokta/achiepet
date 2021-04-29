<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Layanan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('jenis_model', 'jenis');
	}

	public function index()
	{
		$data = array(
			'title'	=> 'Layanan',
			'data'	=> $this->jenis->list(),
			'content'	=> 'grooming/layanan/v_content'
		);
		$this->load->view('grooming/layout/v_wrapper', $data, FALSE);
	}

}

/* End of file Layanan.php */
/* Location: ./application/controllers/Layanan.php */