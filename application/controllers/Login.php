<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CLogin {
	public function index(){
		$data['cek'] = 0;
		$this->load->view('login',$data);
	}

	public function do_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'Username' => $username,
			'Password' => $password
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
		   $data['cek'] = 1;
           $this->load->view('Login',$data);
		}
	}
}
