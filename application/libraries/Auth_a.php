<?php  

class Auth_a
{
	
	protected $CI;

	public function __construct()
	{
		$this->CI =& get_instance();

		$this->CI->load->model('user_model','user');
	}

	public function login($username,$password)
	{
		$check = $this->CI->user->login($username,$password);
		if ($check)
		{
			$data = [
				'id_admin'			=> $check->id_admin,
				'nama'			=> $check->nama,
				'username'			=> $check->username,
				'password'			=> $check->password,
				'jenis_kelamin'			=> $check->jenis_kelamin,
				'foto'			=> $check->foto,
				'alamat'			=> $check->alamat,
				'login'	=> true
			];
			$this->CI->session->set_userdata($data);
			redirect(base_url('admin/dashboard'),'refresh');
		}
		else{
			$this->CI->session->set_flashdata('danger', '<i class="fa fa-info-circle"></i> Password anda salah');
			redirect(base_url('admin/login'),'refresh');	
		}
	}

	public function cek()
	{
		if ($this->CI->session->userdata('nama') == "") {
			$this->CI->session->set_flashdata('danger', '<i class="fa fa-info-circle"></i> Silahkan  login terlebih dahulu!');
			redirect(base_url('admin/login'),'refresh');
		}
	}

	public function logout()
	{

		session_destroy();
		$this->CI->session->set_flashdata('sukses', '<i class="fa fa-info-circle"></i> Anda Telah Logout');
		redirect(base_url('admin/login'),'refresh');
	}
}
?>