<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengaturan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('pengaturan_model', 'pengaturan');
		$this->load->model('user_model', 'user');
		
	}

	public function index()
	{
		
	}

	public function instansi()
	{
		$this->form_validation->set_rules('nama', 'Nama instansi', 'required',
			array( 'required'  => '%s harus diisi!'));

		if ($this->form_validation->run()) 
		{
			$i = $this->input;
			$data = array(
				'id_instansi'	=> '1',
				'nama'	=> $i->post('nama'),
				'pimpinan'		=> $i->post('pimpinan'),
				'telepon'		=> $i->post('telepon'),
				'email'		=> $i->post('email'),
				'site'		=> $i->post('site'),
				'alamat'		=> $i->post('alamat')
			);
			$this->pengaturan->edit_instansi($data);
			$this->session->set_flashdata('sukses', '<i class="fa fa-info-circle"></i> Instansi berhasil diperbaharui!');
			redirect(base_url('admin/pengaturan/instansi'), 'refresh');
		} 
		$data = array(
			'title'	=> 'Pengaturan Instansi',
			'data'	=> $this->pengaturan->instansi(),
			'content'	=> 'admin/pengaturan/v_instansi'
		);
		$this->load->view('admin/layout/v_wrapper', $data, FALSE);
	}

	public function profil()
	{
		$detail = $this->pengaturan->get_admin($this->session->userdata('id_admin'));

		$valid = $this->form_validation;

		$valid->set_rules('username','<i class="fa fa-info-circle"></i> Username admin','required',
			array('required'  => '%s harus di isi!'
		));

		if ($valid->run()) 
		{
			$config['upload_path'] 		= './public/media/upload-admin/';
			$config['allowed_types'] 	= 'gif|jpg|png|jpeg';
			$config['max_size']  		= '2400';
			$config['max_width'] 		= '2024';
			$config['max_height']  		= '2024';
			
			$this->load->library('upload', $config);

			if ( ! $this->upload->do_upload('foto'))
			{
				$i = $this->input;
				$data = array(
					'id_admin'    => $detail->id_admin,
					'nama'    => $i->post('nama'),
					'username' 	 		=> $i->post('username'),
					'password'       	=> sha1($i->post('password')),
					'jenis_kelamin'       	=> $i->post('jk'),
					'alamat'       	=> $i->post('alamat')
				);
				$this->user->edit($data);
				$this->session->set_flashdata('sukses', '<i class="fa fa-info-circle"></i> Profil berhasil diperbaharui!');
				redirect(base_url('admin/pengaturan/profil'),'refresh');
			}
			else
			{
				if (!empty($detail->foto)) 
				{
					unlink('./public/media/upload-admin/'.$detail->foto);
				}
				$upload_gambar = array('upload_data' => $this->upload->data());
				$config['image_library'] = 'gd2';
				$config['source_image'] = './public/media/upload-admin/'.$upload_gambar['upload_data']['file_name'];
				$config['new_image']    = './public/media/upload-admin-thumb/';
				$config['create_thumb'] = TRUE;
				$config['maintain_ratio'] = TRUE;
				$config['width']         = 2024;
				$config['height']       = 2024;

				$this->load->library('image_lib', $config);

				$this->image_lib->resize();

				$i = $this->input;
				$data = array(
					'id_admin'    => $detail->id_admin,
					'nama'    => $i->post('nama'),
					'username' 	 		=> $i->post('username'),
					'password'       	=> sha1($i->post('password')),
					'jenis_kelamin' 	 		=> $i->post('jk'),
					'foto'       	=> $upload_gambar['upload_data']['file_name'],
					'alamat'       	=> $i->post('alamat')
				);
				$this->user->edit($data);
				$this->session->set_flashdata('sukses', '<i class="fa fa-info-circle"></i> Profil berhasil diperbaharui!');
				redirect(base_url('admin/pengaturan/profil'),'refresh');
			}
		}

		$data = array(
			'title'	=> 'Pengaturan Instansi',
			'data'	=> $detail,
			'content'	=> 'admin/pengaturan/v_profil'
		);
		$this->load->view('admin/layout/v_wrapper', $data, FALSE);
	}

	public function ubah_password()
	{
		$detail = $this->pengaturan->get_admin($this->session->userdata('id_admin'));


		$valid = $this->form_validation;

		$valid->set_rules('username','<i class="fa fa-info-circle"></i> Username','required',
			array('required'  => '%s harus di isi!'
		));

		if ($valid->run()) 
		{
			$i = $this->input;
			$username   = $i->post('username');
			$passlama   = $i->post('pass');
			$passbaru   = $i->post('password');
			$repassword   = $i->post('repassword');

			$ambil = $this->user->login($username,$passlama);

			if ($ambil) 
			{
				if ($passbaru!=$repassword) 
				{
					$this->session->set_flashdata('danger', '<i class="fa fa-info-circle"></i> Konfirmasi password tidak benar, silahkan konfirmasi password dengan benar!');
					redirect(base_url('admin/pengaturan/ubah_password'), 'refresh');
				}
				else
				{
					$data = array(
						'id_admin'   => $detail->id_admin,
						'password'  => sha1($passbaru)
					);
					$this->user->ubahpassword($data);
					$this->session->set_flashdata('sukses', '<i class="fa fa-info-circle"></i> Password Anda berhasil diubah!');
					redirect(base_url('admin/pengaturan/ubah_password'), 'refresh');
				}
			}
			else
			{
				$this->session->set_flashdata('danger', '<i class="fa fa-info-circle"></i> Password lama Anda salah!');
				redirect(base_url('admin/pengaturan/ubah_password'), 'refresh');
			}
		}

		$data = array(
			'title'	=> 'Pengaturan Ubah Password',
			'data'	=> $detail,
			'content'	=> 'admin/pengaturan/v_ubah_password'
		);
		$this->load->view('admin/layout/v_wrapper', $data, FALSE);
	}

}

/* End of file Pengaturan.php */
/* Location: ./application/controllers/admin/Pengaturan.php */