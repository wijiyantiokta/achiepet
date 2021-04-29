<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Member extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('booking_model', 'booking');
		$this->load->model('pelanggan_model', 'pelanggan');
	}

	public function index()
	{
		$data = array(
			'title'	=> 'Member',
			'data'		=> $this->pelanggan->detail($this->session->userdata('id_pelanggan')),
			'content'	=> 'grooming/member/v_content'
		);
		$this->load->view('grooming/layout/v_wrapper', $data, FALSE);
	}

	public function pembayaran($id_booking)
	{
		$valid = $this->form_validation;

		$valid->set_rules('jumlah','<i class="fa fa-info-circle"></i> Jumlah','required',
			array('required'  => '%s harus di isi!'
		));

		if ($valid->run()) 
		{

			$config['upload_path'] 		= './public/media/upload-bukti/';
			$config['allowed_types'] 	= 'gif|jpg|png|jpeg';
			$config['max_size']  		= '2400';
			$config['max_width'] 		= '2024';
			$config['max_height']  		= '2024';

			$this->load->library('upload', $config);

			if ( ! $this->upload->do_upload('bukti'))
			{
				$data = array(
					'title'	=> 'Pembayaran',
					'detail'		=> $this->booking->detail($id_booking),
					'content'	=> 'grooming/member/v_pembayaran'
				);
				$this->load->view('grooming/layout/v_wrapper', $data, FALSE);
			}
			else
			{
				$upload_gambar = array('upload_data' => $this->upload->data());
				$config['image_library'] = 'gd2';
				$config['source_image'] = './public/media/upload-bukti/'.$upload_gambar['upload_data']['file_name'];
				$config['new_image']    = './public/media/upload-bukti-thumb/';
				$config['create_thumb'] = TRUE;
				$config['maintain_ratio'] = TRUE;
				$config['width']         = 2024;
				$config['height']       = 2024;

				$this->load->library('image_lib', $config);

				$this->image_lib->resize();

				$i = $this->input;
				$data = array(
					'id_pelanggan'    => $i->post('id_pelanggan'),
					'id_booking' 	 		=> $i->post('id_booking'),
					'jumlah' 	 		=> $i->post('jumlah'),
					'bukti'       	=> $upload_gambar['upload_data']['file_name'],
					'tgl_konfirmasi'       	=> date('Y-m-d')
				);
				$this->db->insert('pembayaran', $data);
				$pem = array(
					'id_booking'	=> $id_booking,
					'status'		=> 'Menunggu Konfirmasi'
				);
				$this->booking->update($pem);
				$this->session->set_flashdata('sukses', '<i class="fa fa-info-circle"></i> Pembayaran berhasil dikirim!');
				redirect(base_url('member/order'),'refresh');
			}
		}
		$data = array(
			'title'	=> 'Pembayaran',
			'detail'		=> $this->booking->detail($id_booking),
			'data'		=> $this->booking->pembayaran($id_booking),
			'content'	=> 'grooming/member/v_pembayaran'
		);
		$this->load->view('grooming/layout/v_wrapper', $data, FALSE);

	}

	public function order()
	{
		$data = array(
			'title'	=> 'Orderan Saya',
			'order'		=> $this->booking->pelanggan($this->session->userdata('id_pelanggan')),
			'content'	=> 'grooming/member/v_order'
		);
		$this->load->view('grooming/layout/v_wrapper', $data, FALSE);
	}

	// public function nota($id_booking)
	// {
	// 	$data = array(
	// 		'title'	=> 'Nota',
	// 		'order'		=> $this->booking->detail($id_booking)
	// 	);
	// 	// var_dump($this->booking->detail($id_booking));die;
	// 	$this->load->view('grooming/member/v_nota', $data, FALSE);
	// }

}

/* End of file Member.php */
/* Location: ./application/controllers/Member.php */
