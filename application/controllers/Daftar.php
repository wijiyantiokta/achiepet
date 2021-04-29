<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daftar extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('pelanggan_model','pelanggan');
		}

	public function index()
	{
		$valid = $this->form_validation;
		$valid->set_rules('username','<i class="fa fa-info-circle"></i> Username','required|is_unique[pelanggan.username_pelanggan]',
			array('required'  => '%s harus di isi!',
				'is_unique' => '%s sudah terdaftar pada sistem!'
			));
		$valid->set_rules('password','<i class="fa fa-info-circle"></i> Password','required|min_length[8]');
		$valid->set_rules('email','<i class="fa fa-info-circle"></i> Email','required|valid_email');

		if ($this->form_validation->run()) 
		{
			$i = $this->input;
			$id_pelanggan = $i->post('id_pelanggan');
			$data = array(
				'id_pelanggan'				=> $id_pelanggan,
				'nama_pelanggan' 	 		=> $i->post('nama'),
				'username_pelanggan' 	 		=> $i->post('username'),
				'password_pelanggan' 	 		=> sha1($i->post('password')),
				'email_pelanggan' 				=> $i->post('email'),
				'jk_pelanggan'       	=> $i->post('jk'),
				'telepon_pelanggan'       	=> $i->post('telepon'),
				'alamat_pelanggan'       	=> $i->post('alamat')
			);
			$proses_input = $this->db->insert('pelanggan',$data);
			//$this->db->insert('pelanggan',$data);
			if ($proses_input){
				$ambil_id_input = $this->db->insert_id();
				//$ambil_id_input->set_rules('sukses', '<i class="fa fa-info-circle"></i> Pendaftaran berhasil, silahkan gunakan username dan password yang Anda daftarkan!');
				redirect(base_url('login'),'refresh');
				echo "Silahkan Login";
			} else {
			echo "gagal input";
			}
		}

		$data = array(
			'title'	=> 'Daftar',
			'content'	=> 'grooming/auth/v_daftar'
		);
		$this->load->view('grooming/layout/v_wrapper', $data, FALSE);
	}


}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */
