<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		
	}

	public function index()
	{
		$data = array(
			'title'	=> 'Home',
			'content'	=> 'grooming/home/v_content'
		);
		$this->load->view('grooming/layout/v_wrapper', $data, FALSE);
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */