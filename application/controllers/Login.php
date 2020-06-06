<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('auth');
		$this->load->database();
		sudah_login();
	}

	public function index()
	{	
		$data = array('title' => 'Login Admin - Info Corona');
		$this->load->view('auth/login', $data, FALSE);
	}

	public function login_aksi()
	{
		$this->load->model('Users_model' , 'users');

		$this->form_validation->set_rules('username', 'Username Wajib', 'required|trim');
		$this->form_validation->set_rules('password', 'Password Wajib', 'required|trim');

		if($this->form_validation->run() == TRUE)
		{
			$cek = $this->users->get(['username' => $this->input->post('username'), 'password' => md5($this->input->post('password'))]);

			if ($cek->num_rows() > 0) {
				
				$login = array(
					'id_user' 	=> $cek->row()->id_user,
					'username'	=> $cek->row()->username
				);

				$this->session->set_userdata($login);

				echo json_encode(array('status' => 1));
			} else {

				echo json_encode(array('status' => 0, 'message' => 'Username / Password Salah.'));
			}
		} else {

			echo json_encode(array('status' => 0, 'message' => validation_errors()));

		}
	}
}
