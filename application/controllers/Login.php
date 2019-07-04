<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CLogin {
	public function index(){
		$this->load->view('login');
	}

	public function do_login(){
		$where = array(
			'Username' => $this->input->post('username'),
			'Password' => $this->input->post('password')
		);
		$cek = $this->MLogin->cek_login("Login",$where)->num_rows();
		if($cek > 0) {
			$data_session = array(
				'nama' => $username,
				'status' => 'login'
			);
			$this->session->set_userdata($data_session);
			redirect(base_url('Home'));
		}else {
			$data['error'] = 'Username/Password yang anda masukkan salah';
			$this->load->view('Login',$data);
		}
	}
}
