<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {


	function __construct(){
		parent:: __construct();
		$this->load->model('welcome_model','wm');
	}

	public function index()
	{
		// $data['infos'] = $this->wm->getInfo();
		// $this->load->view('welcome_message',$data);
		$this->load->view('headers/header_not_login');
    $this->load->view('user/home');
    $this->load->view('footers/footer');
	}

	public function Login(){
		$this->load->view('login');
	}

	public function Register(){
		$this->load->view('register');
	}
}
