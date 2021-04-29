<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Booking extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('booking_model', 'booking');
	}

	public function index()
	{
		$data = array(
			'title'		=> 'Data Booking',
			'data'		=> $this->booking->list2(),
			'content'	=> 'admin/booking/v_content'
		);
		// var_dump($this->booking->list2());die;
		$this->load->view('admin/layout/v_wrapper', $data, FALSE);
	}

	public function pembayaran($id_booking)
	{
		$data = array(
			'title'		=> 'Data Pembayaran',
			'detail'		=> $this->booking->detail($id_booking),
			'data'		=> $this->booking->pembayaran($id_booking),
			'content'	=> 'admin/booking/v_pembayaran'
		);
		$this->load->view('admin/layout/v_wrapper', $data, FALSE);
	}

	public function konfirmasi($id_booking)
	{
		$i = $this->input;
		$data = array(
			'id_booking'	=> $id_booking,
			'status'		=> 'Lunas',
			'id_admin'		=> $this->session->userdata('id_admin')
		);
		$this->booking->konfirmasi($data);
		$this->session->set_flashdata('sukses', '<i class="fa fa-info-circle"></i> Pembayaran berhasil dikonfirmasi!');
		redirect(base_url('admin/booking'), 'refresh');
	}

}

/* End of file Booking.php */
/* Location: ./application/controllers/admin/Booking.php */