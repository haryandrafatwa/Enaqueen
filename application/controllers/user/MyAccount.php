<?php
class MyAccount extends CI_Controller{

	function __construct(){
		parent:: __construct();
		$this->load->model('Users_model','um');
		$this->load->model('Product_model','pm');
	}

  public function index(){
	$username = $this->session->userdata('username');
	$data = $this->um->getUserName($username);
	$data['judul'] = 'Profile';
	if ($this->session->userdata('status')== true) {
		$this->load->view('headers/header_login',$data);
		$this->load->view('user/myaccount/myaccount');
    	$this->load->view('footers/footer');
	}else{
		redirect('Welcome');
	}
  }

  public function Profile(){
	$username = $this->session->userdata('username');
	$data = $this->um->getUserName($username);
	$data['judul'] = 'Profile';
	if ($this->session->userdata('status')== true) {
		$this->load->view('headers/header_login',$data);
		$this->load->view('user/myaccount/profile');
    	$this->load->view('footers/footer');
	}else{
		redirect('Welcome');
	}
  }

	public function PersonalDetail(){
	$username = $this->session->userdata('username');
	$data = $this->um->getUserName($username);
	$data['judul'] = 'Personal Detail';
	if ($this->session->userdata('status')== true) {
		$this->load->view('headers/header_login',$data);
		$this->load->view('user/myaccount/personalDetail');
    	$this->load->view('footers/footer');
	}else{
		redirect('Welcome');
	}
  }
}
