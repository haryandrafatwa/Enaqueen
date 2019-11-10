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
	  
	$cart = $this->um->getCartList($username);
	  
	if($cart != null){
		$data['statusCart'] = true;
	}else{
		$data['statusCart'] = false;
	}
	  
	$data['cart'] = $cart;
	  
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
	  
	$cart = $this->um->getCartList($username);
	  
	if($cart != null){
		$data['statusCart'] = true;
	}else{
		$data['statusCart'] = false;
	}
	  
	$data['cart'] = $cart;
	  
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
		
	$cart = $this->um->getCartList($username);
	  
	if($cart != null){
		$data['statusCart'] = true;
	}else{
		$data['statusCart'] = false;
	}
	  
	$data['cart'] = $cart;
		
	$data['judul'] = 'Personal Detail';
	if ($this->session->userdata('status')== true) {
		$this->load->view('headers/header_login',$data);
		$this->load->view('user/myaccount/personalDetail');
    	$this->load->view('footers/footer');
	}else{
		redirect('Welcome');
	}
  }
	
	public function updatePersonalDetail(){
		$username = $this->input->post('username');
		$firstname = $this->input->post('firstname');
		$lastname = $this->input->post('lastname');
		$phoneNumber = $this->input->post('phoneNumber');
		
		
		if(!isset($_FILES['uploadImage'])){
			$this->um->updatePersonalDetail($username,$firstname,$lastname,null,$phoneNumber);
			redirect('User/MyAccount/PersonalDetail');
		}else{
			$image = $_FILES['uploadImage']['tmp_name']; 
			$name = $_FILES['uploadImage']['name']; 
			$image = base64_encode(file_get_contents($image));
			$this->um->updatePersonalDetail($username,$firstname,$lastname,$image,$phoneNumber);
			redirect('User/MyAccount/PersonalDetail');
		}
	}
}
