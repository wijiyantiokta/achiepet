<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_model', 'user');
	}

	public function index()
	{
		$data = array(
			'title'	=> 'Manajemen User',
			'data'	=> $this->user->list(),
			'content'	=> 'admin/user/v_content'
		);
		$this->load->view('admin/layout/v_wrapper', $data, FALSE);
	}

	public function add()
	{
		$valid = $this->form_validation;

		$valid->set_rules('username','<i class="fa fa-info-circle"></i> Username admin','required|is_unique[admin.username]',
			array('required'  => '%s harus di isi!',
				'is_unique' => '%s tidak tersesia!'
			));
		$valid->set_rules('password','<i class="fa fa-info-circle"></i> Password','required|min_length[8]');

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
					'nama'    => $i->post('nama'),
					'username' 	 		=> $i->post('username'),
					'password'       	=> sha1($i->post('password')),
					'jenis_kelamin'       	=> $i->post('jk'),
					'alamat'       	=> $i->post('alamat')
				);
				$this->db->insert('admin', $data);
				$this->session->set_flashdata('sukses', '<i class="fa fa-info-circle"></i> User berhasil ditambahkan!');
				redirect(base_url('admin/user'),'refresh');
			}
			else
			{
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
					'nama'    => $i->post('nama'),
					'username' 	 		=> $i->post('username'),
					'password'       	=> sha1($i->post('password')),
					'jenis_kelamin' 	 		=> $i->post('jk'),
					'foto'       	=> $upload_gambar['upload_data']['file_name'],
					'alamat'       	=> $i->post('alamat')
				);
				$this->db->insert('admin', $data);
				$this->session->set_flashdata('sukses', '<i class="fa fa-info-circle"></i> User berhasil ditambahkan!');
				redirect(base_url('admin/user'),'refresh');
			}
		}
		$data = array(
			'title'		=> 'Tambah User',
			'content'	=> 'admin/user/v_add'
		);
		$this->load->view('admin/layout/v_wrapper', $data, FALSE);
	}

	public function edit($id_admin)
	{

		$detail = $this->user->detail($id_admin);

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
					'id_admin'    => $id_admin,
					'nama'    => $i->post('nama'),
					'username' 	 		=> $i->post('username'),
					'password'       	=> sha1($i->post('password')),
					'jenis_kelamin'       	=> $i->post('jk'),
					'alamat'       	=> $i->post('alamat')
				);
				$this->user->edit($data);
				$this->session->set_flashdata('sukses', '<i class="fa fa-info-circle"></i> User berhasil diubah!');
				redirect(base_url('admin/user'),'refresh');
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
					'id_admin'    => $id_admin,
					'nama'    => $i->post('nama'),
					'username' 	 		=> $i->post('username'),
					'password'       	=> sha1($i->post('password')),
					'jenis_kelamin' 	 		=> $i->post('jk'),
					'foto'       	=> $upload_gambar['upload_data']['file_name'],
					'alamat'       	=> $i->post('alamat')
				);
				$this->user->edit($data);
				$this->session->set_flashdata('sukses', '<i class="fa fa-info-circle"></i> User berhasil diubah!');
				redirect(base_url('admin/user'),'refresh');
			}
		}
		$data = array(
			'title'		=> 'Ubah User',
			'detail'	=> $detail,
			'content'	=> 'admin/user/v_edit'
		);
		$this->load->view('admin/layout/v_wrapper', $data, FALSE);
	}

	public function delete($id_admin)
	{
		$data = array(
			'id_admin'    => $id_admin
		);
		$this->user->delete($data);
		$this->session->set_flashdata('sukses', '<i class="fa fa-info-circle"></i> User berhasil dihapus!');
		redirect(base_url('admin/user'),'refresh');
	}
}

/* End of file User.php */
/* Location: ./application/controllers/admin/User.php */
