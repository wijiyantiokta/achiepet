<?php  

class Auth
{
	
	protected $CI;

	public function __construct()
	{
		$this->CI =& get_instance();

		$this->CI->load->model('pelanggan_model','pelanggan');
	}

	public function login($username,$password)
	{
		$check = $this->CI->pelanggan->login($username,$password);
		if ($check)
		{
			$data = [
				'id_pelanggan'			=> $check->id_pelanggan,
				'nama_pelanggan'			=> $check->nama_pelanggan,
				'username_pelanggan'			=> $check->username_pelanggan,
				'password_pelanggan'			=> $check->password_pelanggan,
				'jk_pelanggan'			=> $check->jk_pelanggan,
				'telepon_pelanggan'			=> $check->telepon_pelanggan,
				'alamat_pelanggan'			=> $check->alamat_pelanggan,
				'login'	=> true
			];
			$this->CI->session->set_userdata($data);
			redirect(base_url('member'),'refresh');
		}
		else{
			$this->CI->session->set_flashdata('danger', '<i class="fa fa-info-circle"></i> Password anda salah');
			redirect(base_url('login'),'refresh');	
		}
	}

	public function cek()
	{
		if ($this->CI->session->userdata('nama_groomer') == "") {
			$this->CI->session->set_flashdata('danger', '<i class="fa fa-info-circle"></i> Silahkan  login terlebih dahulu!');
			redirect(base_url('login'),'refresh');
		}
	}

	public function logout()
	{

		session_destroy();
		$this->CI->session->set_flashdata('sukses', '<i class="fa fa-info-circle"></i> Anda Telah Logout');
		redirect(base_url('login'),'refresh');
	}
}
?>