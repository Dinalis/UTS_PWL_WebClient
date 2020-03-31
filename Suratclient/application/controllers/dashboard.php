<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index()
	{
		$curl = curl_init();
		curl_setopt($curl, CURLOPT_URL, 'http://localhost/suratsurat1/api/Suratmasuk');
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
		$result = curl_exec($curl);
		$data['surat_masuk'] =json_decode($result, TRUE);
		curl_close($curl);

		$this->load->view('template/header_user');
		$this->load->view('dashboard' , $data);
		$this->load->view('template/footer_user');
	}
}

?>