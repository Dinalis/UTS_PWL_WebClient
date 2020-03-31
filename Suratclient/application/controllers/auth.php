<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class auth extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->model('auth_model');
		// $this->load->library('session');
	}

	public function index()
	{
		$data['title']='Login';
		$this->load->helper('form');
		$this->load->view('template/header_login',$data);
		$this->load->view('auth/login');
		$this->load->view('template/footer');
	}

	public function proses_login()
		{
		$username=$this->input->post('uname1');
		$password=$this->input->post('pwd1');

		$ceklogin=$this->auth_model->login($username,$password);

		if ($ceklogin) {
			foreach ($ceklogin as $row);
				$this->session->set_userdata('user',$row->username);
			redirect('dashboard');
		} else {
			$data['pesan']="Masukkan username dan password anda";
			$data['title']='Login';
			$this->load->view('template/header_login',$data);
			$this->load->view('auth/login');
			$this->load->view('template/footer');
			//redirect('login/index','refresh');
		}
	}

	// 	public function register()
	// {
	// 	$data['title'] = "Register";
	// 	$this->load->view('template/header_login',$data);
	// 	$this->load->view('auth/register');
	// 	$this->load->view('template/footer');
	// }

	// public function doRegister() {
	// 	if ($this->input->post('submit')){
	// 		$this->form_validation->set_rules('nama', 'Nama', 'required');
	// 		$this->form_validation->set_rules('user', 'Username', 'required');
	// 		$this->form_validation->set_rules('pass', 'Password', 'required');

	// 		if ($this->form_validation->run()) {
	// 			$data = array(
	// 				'username'	=> $this->input->post('user'),
	// 				'password'	=> $this->input->post('pass'),
	// 				'level'	=> 'user',
	// 				'status' => 'Tidak Aktif'
	// 			);

	// 			$register = $this->auth_model->input_data($data);
	// 			if ($register) {
	// 				redirect('auth');
	// 			} else {
	// 				redirect('auth/false');
	// 			}
	// 		}
	// 	}
	// }

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('auth','refresh');
	}
}

/* End of file Controllername.php */ 
?>