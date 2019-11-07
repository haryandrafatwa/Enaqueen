<?php
class Home extends CI_Controller{

	function __construct(){
		parent:: __construct();
		$this->load->model('Users_model','um');
		$this->load->model('Product_model','pm');
	}
	
  public function index(){
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

  public function Food(){
	$username = $this->session->userdata('username');
	$data = $this->um->getUserName($username);
	  
	$productJav = $this->pm->getProduct('Javanese');
	$productSun = $this->pm->getProduct('Sundanese');
	$productBal = $this->pm->getProduct('Balinese');
	$data['productJav'] = $productJav;
	$data['productSun'] = $productSun;
	$data['productBal'] = $productBal;
	  
	$data['judul'] = 'Food';
	if ($this->session->userdata('status')== true) {
		$this->load->view('headers/header_login',$data);
	}else{
		$this->load->view('headers/header_not_login',$data);
	}
    $this->load->view('user/food');
    $this->load->view('footers/footer');
  }

  public function Drink(){
	$username = $this->session->userdata('username');
	$data = $this->um->getUserName($username);
	$data['judul'] = 'Drink';
	if ($this->session->userdata('status')== true) {
		$this->load->view('headers/header_login',$data);
	}else{
		$this->load->view('headers/header_not_login',$data);
	}
    $this->load->view('user/drink');
    $this->load->view('footers/footer');
  }

  public function Dessert(){
	$username = $this->session->userdata('username');
	$data = $this->um->getUserName($username);
	$data['judul'] = 'Dessert';
	if ($this->session->userdata('status')== true) {
		$this->load->view('headers/header_login',$data);
	}else{
		$this->load->view('headers/header_not_login',$data);
	}
    $this->load->view('user/dessert');
    $this->load->view('footers/footer');
  }
	
  public function MyAccount(){
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
}
