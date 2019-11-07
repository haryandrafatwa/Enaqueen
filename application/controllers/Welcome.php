<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {


	function __construct(){
		parent:: __construct();
		$this->load->model('Users_model','um');
	}

	public function index()
	{
		$username = $this->session->userdata('username');
		$data = $this->um->getUserName($username);
		$data['judul'] = 'Home';
		if ($this->session->userdata('status')== true) {
			$this->load->view('headers/header_login',$data);
		}else{
			$this->load->view('headers/header_not_login',$data);
		}
    	$this->load->view('user/home');
    	$this->load->view('footers/footer');
	}

	public function Login(){
		if ($this->session->userdata('status')== true) {
		  redirect(site_url('User/Home'));
		}
		$this->load->view('login');
	}

	public function Register(){
		if ($this->session->userdata('status')== true) {
		  redirect(site_url('User/Home'));
		}
		$this->load->view('register');
	}
}
