<?php

/**
* 
*/
class user_login extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->model('m_logindaftar');
	}

	function index(){
		if($this->session->userdata('status') == "Pengguna"){
				redirect(base_url("pengguna/user"));
		}elseif ($this->session->userdata('status') == "Admin") {
				redirect(base_url("pengguna/admin"));
		}else{
		$this->load->view('login_register/register_head');
		}
	}

	function login(){
		if($this->session->userdata('status') == "Pengguna"){
				redirect(base_url("pengguna/user"));
		}elseif ($this->session->userdata('status') == "Admin") {
				redirect(base_url("pengguna/admin"));
		}else{
		$this->load->view('login_register/login_head');
		}
	}

	function aksi_login(){
		$email = $this->input->post('email');
		$pass = md5($this->input->post('pass'));
		$cek = $this->m_logindaftar->cek_login(array('email' => $email), array('password' => $pass));

		if($cek != false){
				foreach ($cek as $c) {
				$data_session = array(
							'nama' => $c->username,
							'status' => $c->hak_akses,
							'email' =>$c->email
									);
			}
			$this->session->set_userdata($data_session);
			redirect(base_url("pengguna/admin"));
		}else{
			redirect(base_url('form/login'));
		}
	}

	function aksi_daftar(){
		
	}

	function aksi_logout(){
		$data_session = array(
				'nama' => "",
				'status' => "",
				'status' => ""
			);
		$this->session->set_userdata($data_session);
		$this->session->sess_destroy();
		redirect(base_url('form/login'));
	}
}