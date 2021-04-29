<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Booking extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('jenis_model', 'jenis');
		$this->load->model('booking_model', 'booking');
		$params = array('server_key' => 'SB-Mid-server-sUm2Ca9qpPeyBuITay_iO0UI', 'production' => false);
		$this->load->library('midtrans');
		$this->midtrans->config($params);
		$this->load->helper('tanggal');
	}

	public function index()
	{
		
	}

	public function cek($id_jenis_grooming)
	{
		if (empty($this->session->userdata('nama_pelanggan'))) 
		{
			$this->session->set_flashdata('danger', '<i class="fa fa-info-circle"></i> Anda harus login terlebih dahulu!');
			redirect(base_url('login'),'refresh');
		}
		else
		{
			$valid = $this->form_validation;

			$valid->set_rules('tanggal','<i class="fa fa-info-circle"></i> Tanggal','required',
				array('required'  => '%s harus di isi!'
			));

			if ($valid->run()===FALSE) 
			{
				$data = array(
					'title'	=> 'Cek Booking',
					'detail'	=> $this->jenis->detail($id_jenis_grooming),
					'content'	=> 'grooming/booking/v_cek'
				);
				$this->load->view('grooming/layout/v_wrapper', $data, FALSE);
			}
			else
			{
				$i = $this->input;
				$cek = $this->booking->cek($i->post('tanggal'),$i->post('jam'));
				if ($cek==1) 
				{
					$this->session->set_flashdata('danger', '<i class="fa fa-info-circle"></i> Mohon maaf, untuk tanggal dan jam yang Anda pilih tidak tersedia!');
					redirect(base_url('booking/cek/'.$id_jenis_grooming),'refresh');
				}
				else
				{
					$this->session->set_flashdata('danger', '<i class="fa fa-info-circle"></i> Booking tersedia pada tanggal dan jam yang Anda pilih!');
					redirect(base_url('booking/cart/'.$id_jenis_grooming.'/'.$i->post('tanggal').'/'.$i->post('jam')),'refresh');
				}
			}	
		}
		
	}

	public function cart($id_jenis_grooming,$tanggal,$jam)
	{
		$data = array(
			'title'	=> 'Cart Booking',
			'detail'	=> $this->jenis->detail($id_jenis_grooming),
			'tanggal'	=> $tanggal,
			'jam'		=> $jam,
			'content'	=> 'grooming/booking/v_cart'
		);
		$this->load->view('grooming/layout/v_wrapper', $data, FALSE);
	}

	public function checkout()
	{
		$valid = $this->form_validation;

		$valid->set_rules('tanggal','<i class="fa fa-info-circle"></i> Tanggal','required',
			array('required'  => '%s harus di isi!'
		));

		if ($valid->run()) 
		{
			date_default_timezone_set('Asia/Jakarta');
			$tanggal_pesan = date('Y-m-d H:i:s');
			$expires = strtotime('+1 days', strtotime($tanggal_pesan));
			$deadline=date('Y-m-d H:i:s', $expires);

			$i = $this->input;
			$kode_booking = $i->post('kode_booking');
			$data = array(
				'id_jenis_grooming'	=> $i->post('id_jenis_grooming'),
				'id_pelanggan'	=> $i->post('id_pelanggan'),
				'kode_booking'	=> $kode_booking,
				'token'	=> rand(),
				'hewan'	=> $i->post('hewan'),
				'tanggal'	=> $i->post('tanggal'),
				'jam'	=> $i->post('jam'),
				'status'	=> 'Pending',
				'deadline'      => $deadline,
			);
			$this->db->insert('booking', $data);
			redirect(base_url('booking/pembayaran/'.$kode_booking),'refresh');
		}
	}

	public function pembayaran($kode_booking)
	{
		$data = array(
			'title'	=> 'Pembayaran Booking',
			'detail'		=> $this->booking->detail($kode_booking),
			'content'	=> 'grooming/booking/v_pembayaran'
		);
		$this->load->view('grooming/layout/v_wrapper', $data, FALSE);
	}

	public function pembayaran2()
	{
		
	}

	public function token($kode_booking)
	{
		$booking = $this->booking->detail($kode_booking); // manggil function pelanggan di  
		
		// Required
		$transaction_details = array(
			'order_id' => $booking->token,
		  'gross_amount' => $booking->harga_grooming, // no decimal allowed for creditcard
		);

		// Optional
		$customer_details = array(
			'first_name'    => $booking->nama_pelanggan,
			'last_name'     => "",
			'email'         => $booking->email_pelanggan,
			'phone'         => $booking->telepon_pelanggan,
		);

		// Data yang akan dikirim untuk request redirect_url.
		$credit_card['secure'] = true;
        //ser save_card true to enable oneclick or 2click
        //$credit_card['save_card'] = true;

		$time = time();
		$custom_expiry = array(
			'start_time' => date("Y-m-d H:i:s O",$time),
			'unit' => 'day', 
			'duration'  => 1
		);

		$transaction_data = array(
			'transaction_details'=> $transaction_details,
			'customer_details'   => $customer_details,
			'credit_card'        => $credit_card,
			'expiry'             => $custom_expiry
		);

		error_log(json_encode($transaction_data));
		$snapToken = $this->midtrans->getSnapToken($transaction_data);
		error_log($snapToken);
		echo $snapToken;
	}

	public function deadline($kode_booking)
	{
		$result = json_decode($this->input->post('result_data'));

		$detail = $this->booking->detail($kode_booking);

		$data = array(
			'title'	=> 'Deadline Pembayaran',
			'data'	=> $result,
			'detail'	=> $detail,
			'content'	=> 'grooming/booking/v_deadline'
		);

		// echo json_encode($data);die;
		$this->load->view('grooming/layout/v_wrapper', $data, FALSE);
	}

}

/* End of file Booking.php */
/* Location: ./application/controllers/Booking.php */
