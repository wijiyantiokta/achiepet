<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('pelanggan_model', 'pelanggan');
	}

	public function index()
	{
		$this->form_validation->set_rules('username', 'Username', 'required',
			array( 'required'  => '%s harus diisi!'));
		$this->form_validation->set_rules('password', 'Password', 'required',
			array( 'required'  => '%s harus diisi!'));
		
		if ($this->form_validation->run()) 
		{
			$username    = $this->input->post('username');
			$password    = $this->input->post('password');

			$cek = $this->pelanggan->cek_username($username);
			if ($cek==1) 
			{
				$this->auth->login($username,$password); 
			}
			else
			{
				$this->session->set_flashdata('danger', '<i class="fa fa-info-circle"></i> Username tidak ada!');
				redirect(base_url('login'),'refresh');
			}
		}
		else
		{
			$data = array(
				'title'	=> 'Login',
				'content'	=> 'grooming/auth/v_login'
			);
			$this->load->view('grooming/layout/v_wrapper', $data, FALSE);
		}
	}

	public function logout()
	{
		$this->auth->logout();
	}
}