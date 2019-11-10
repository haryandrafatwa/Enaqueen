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
	  
	$cart = $this->um->getCartList($username);
	  
	if($cart != null){
		$data['statusCart'] = true;
	}else{
		$data['statusCart'] = false;
	}
	  
	$data['cart'] = $cart;
	  
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
	  
	$cart = $this->um->getCartList($username);
	  
	if($cart != null){
		$data['statusCart'] = true;
	}else{
		$data['statusCart'] = false;
	}
	  
	$data['cart'] = $cart;
	 
	$productJav = $this->pm->getProduct('Javanese','food');
	$productSun = $this->pm->getProduct('Sundanese','food');
	$productBal = $this->pm->getProduct('Balinese','food');
	  
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

	$cart = $this->um->getCartList($username);
	  
	if($cart != null){
		$data['statusCart'] = true;
	}else{
		$data['statusCart'] = false;
	}
	  
	$data['cart'] = $cart;
	  
	$productTea = $this->pm->getProduct('Tea','drink');
	$productCof = $this->pm->getProduct('Coffee','drink');
	$productMil = $this->pm->getProduct('Milkshake','drink');
	$data['productTea'] = $productTea;
	$data['productCof'] = $productCof;
	$data['productMil'] = $productMil;

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

	$cart = $this->um->getCartList($username);
	  
	if($cart != null){
		$data['statusCart'] = true;
	}else{
		$data['statusCart'] = false;
	}
	  
	$data['cart'] = $cart;
	  
	$productIce = $this->pm->getProduct('Ice Cream','dessert');
	$productCak = $this->pm->getProduct('Cake','dessert');
	$productPas = $this->pm->getProduct('Pastry','dessert');
	$data['productIce'] = $productIce;
	$data['productCak'] = $productCak;
	$data['productPas'] = $productPas;

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
	
	public function addToCart($productName,$username,$category){
		$username = urldecode($username);
		$productName = urldecode($productName);
		$category = urldecode($category);
		$cart = $this->um->getCart($username,$productName,$category);
		
		$amount = $cart['amount'];
		$amount = $amount + 1;
		
		if($cart == null){
			$this->um->addCart($username,$productName,$category);
			$this->session->set_flashdata('gagal',"The product successfully added to your cart!");
			redirect('User/Home/'.$category);
		}else{
			$this->um->updateCart($username,$productName,$amount,$category);
			$this->session->set_flashdata('gagal',"The product successfully added to your cart!");
			redirect('User/Home/'.$category);
		}
	}
	
	public function deleteFromCart($username,$product,$category){
		$username = urldecode($username);
		$product = urldecode($product);
		
		
		$cartFood = $this->um->getCart($username,$product,$category);
		
		$data = $this->um->deleteCart($username,$product,$category);
		$this->session->set_flashdata('gagal',"The product successfully deleted from your cart!");
		redirect('User/Home/'.$category);
	}
	
	public function Cart(){
		$username = $this->session->userdata('username');
		$data = $this->um->getUserName($username);

		$cart = $this->um->getCartList($username);

		if($cart != null){
			$data['statusCart'] = true;
		}else{
			$data['statusCart'] = false;
		}

		$data['cart'] = $cart;

		$data['judul'] = 'Home';
		if ($this->session->userdata('status')== true) {
			$this->load->view('headers/header_login',$data);
		}else{
			$this->load->view('headers/header_not_login',$data);
		}
		$this->load->view('user/cart');
		$this->load->view('footers/footer');
	}
}
