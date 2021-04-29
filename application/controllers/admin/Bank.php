<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bank extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('bank_model', 'bank');
	}

	public function index()
	{
		$data = array(
			'title'	=> 'Bank',
			'data'	=> $this->bank->list(),
			'content'	=> 'admin/bank/v_content'
		);
		$this->load->view('admin/layout/v_wrapper', $data, FALSE);
	}

	public function add()
	{
		$valid = $this->form_validation;

		$valid->set_rules('norek','<i class="fa fa-info-circle"></i> Nomor rekening','required|is_unique[bank.nomor_rekening]',
			array('required'  => '%s harus di isi!',
				'is_unique' => '%s sudah terdaftar!'
			));

		if ($valid->run()) 
		{
			$config['upload_path'] 		= './public/media/upload-bank/';
			$config['allowed_types'] 	= 'gif|jpg|png|jpeg';
			$config['max_size']  		= '2400';
			$config['max_width'] 		= '2024';
			$config['max_height']  		= '2024';
			
			$this->load->library('upload', $config);

			if ( ! $this->upload->do_upload('logo'))
			{
				$i = $this->input;
				$data = array(
					'bank'    => $i->post('bank'),
					'nomor_rekening' 	 		=> $i->post('norek'),
					'atas_nama' 	 		=> $i->post('atas_nama')
				);
				$this->db->insert('bank', $data);
				$this->session->set_flashdata('sukses', '<i class="fa fa-info-circle"></i> Bank berhasil ditambahkan!');
				redirect(base_url('admin/bank'),'refresh');
			}
			else
			{
				$upload_gambar = array('upload_data' => $this->upload->data());
				$config['image_library'] = 'gd2';
				$config['source_image'] = './public/media/upload-bank/'.$upload_gambar['upload_data']['file_name'];
				$config['new_image']    = './public/media/upload-bank-thumb/';
				$config['create_thumb'] = TRUE;
				$config['maintain_ratio'] = TRUE;
				$config['width']         = 2024;
				$config['height']       = 2024;

				$this->load->library('image_lib', $config);

				$this->image_lib->resize();

				$i = $this->input;
				$data = array(
					'bank'    => $i->post('bank'),
					'nomor_rekening' 	 		=> $i->post('norek'),
					'atas_nama' 	 		=> $i->post('atas_nama'),
					'logo'       	=> $upload_gambar['upload_data']['file_name']
				);
				$this->db->insert('bank', $data);
				$this->session->set_flashdata('sukses', '<i class="fa fa-info-circle"></i> Bank berhasil ditambahkan!');
				redirect(base_url('admin/bank'),'refresh');
			}
		}
		$data = array(
			'title'		=> 'Tambah Bank',
			'content'	=> 'admin/bank/v_add'
		);
		$this->load->view('admin/layout/v_wrapper', $data, FALSE);
	}

	public function edit($id_bank)
	{

		$detail = $this->bank->detail($id_bank);

		$valid = $this->form_validation;

		$valid->set_rules('norek','<i class="fa fa-info-circle"></i> Nomor rekening','required',
			array('required'  => '%s harus di isi!'
		));

		if ($valid->run()) 
		{
			$config['upload_path'] 		= './public/media/upload-bank/';
			$config['allowed_types'] 	= 'gif|jpg|png|jpeg';
			$config['max_size']  		= '2400';
			$config['max_width'] 		= '2024';
			$config['max_height']  		= '2024';
			
			$this->load->library('upload', $config);

			if ( ! $this->upload->do_upload('logo'))
			{
				$i = $this->input;
				$data = array(
					'id_bank'    => $id_bank,
					'bank'    => $i->post('bank'),
					'nomor_rekening' 	 		=> $i->post('norek'),
					'atas_nama' 	 		=> $i->post('atas_nama')
				);
				$this->bank->edit($data);
				$this->session->set_flashdata('sukses', '<i class="fa fa-info-circle"></i> Bank berhasil diubah!');
				redirect(base_url('admin/bank'),'refresh');
			}
			else
			{
				if (!empty($detail->logo)) 
				{
					unlink('./public/media/upload-bank/'.$detail->logo);
				}
				$upload_gambar = array('upload_data' => $this->upload->data());
				$config['image_library'] = 'gd2';
				$config['source_image'] = './public/media/upload-bank/'.$upload_gambar['upload_data']['file_name'];
				$config['new_image']    = './public/media/upload-bank-thumb/';
				$config['create_thumb'] = TRUE;
				$config['maintain_ratio'] = TRUE;
				$config['width']         = 2024;
				$config['height']       = 2024;

				$this->load->library('image_lib', $config);

				$this->image_lib->resize();

				$i = $this->input;
				$data = array(
					'id_bank'    => $id_bank,
					'bank'    => $i->post('bank'),
					'nomor_rekening' 	 		=> $i->post('norek'),
					'atas_nama' 	 		=> $i->post('atas_nama'),
					'logo'       	=> $upload_gambar['upload_data']['file_name']
				);
				$this->bank->edit($data);
				$this->session->set_flashdata('sukses', '<i class="fa fa-info-circle"></i> Bank berhasil diubah!');
				redirect(base_url('admin/bank'),'refresh');
			}
		}
		$data = array(
			'title'		=> 'Ubah Bank',
			'detail'	=> $detail,
			'content'	=> 'admin/bank/v_edit'
		);
		$this->load->view('admin/layout/v_wrapper', $data, FALSE);
	}

	public function delete($id_bank)
	{
		$detail = $this->bank->detail($id_bank);
		if (!empty($detail->logo)) 
		{
			unlink('./public/media/upload-bank/'.$detail->logo);
		}
		$data = array(
			'id_bank'    => $id_bank
		);
		$this->bank->delete($data);
		$this->session->set_flashdata('sukses', '<i class="fa fa-info-circle"></i> Bank berhasil dihapus!');
		redirect(base_url('admin/bank'),'refresh');
	}

}

/* End of file Bank.php */
/* Location: ./application/controllers/admin/Bank.php */