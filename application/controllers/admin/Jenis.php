<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jenis extends CI_Controller {

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
			'content'	=> 'admin/jenis/v_content'
		);
		$this->load->view('admin/layout/v_wrapper', $data, FALSE);
	}

	public function add()
	{
		$this->form_validation->set_rules('jenis_grooming', 'Jenis grooming', 'required',
			array( 'required'  => '%s harus diisi!'));

		if ($this->form_validation->run()) 
		{
			$i = $this->input;
			$data = array(
				'jenis_grooming'	=> $i->post('jenis_grooming'),
				'harga_grooming'		=> $i->post('harga'),
			);
			$this->db->insert('jenis_grooming',$data);
			$this->session->set_flashdata('sukses', '<i class="fa fa-info-circle"></i> Layanan berhasil ditambahkan!');
			redirect(base_url('admin/jenis'), 'refresh');
		} 
		$data = array(
			'title'	=> 'Tambah Layanan',
			'data'	=> $this->jenis->list(),
			'content'	=> 'admin/jenis/v_add'
		);
		$this->load->view('admin/layout/v_wrapper', $data, FALSE);
	}

	public function edit($id_jenis_grooming)
	{
		$detail = $this->jenis->detail($id_jenis_grooming);

		$this->form_validation->set_rules('jenis_grooming', 'Jenis grooming', 'required',
			array( 'required'  => '%s harus diisi!'));

		if ($this->form_validation->run()) 
		{
			$i = $this->input;
			$data = array(
				'id_jenis_grooming'	=> $id_jenis_grooming,
				'jenis_grooming'	=> $i->post('jenis_grooming'),
				'harga_grooming'		=> $i->post('harga'),
				'id_admin'		=> $this->session->userdata('id_admin'),
			);
			$this->jenis->edit($data);
			$this->session->set_flashdata('sukses', '<i class="fa fa-info-circle"></i> Layanan berhasil diubah!');
			redirect(base_url('admin/jenis'), 'refresh');
		} 
		$data = array(
			'title'	=> 'Ubah Layanan',
			'data'	=> $detail,
			'content'	=> 'admin/jenis/v_edit'
		);
		$this->load->view('admin/layout/v_wrapper', $data, FALSE);
	}

	public function delete($id_jenis_grooming)
	{
		$data = array(
			'id_jenis_grooming'	=> $id_jenis_grooming
		);
		$this->jenis->delete($data);
		$this->session->set_flashdata('sukses', '<i class="fa fa-info-circle"></i> Layanan berhasil dihapus!');
		redirect(base_url('admin/jenis'), 'refresh');
	}
}