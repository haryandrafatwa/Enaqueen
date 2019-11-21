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
	$data['judul'] = 'My Account';
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
		$product = $this->pm->getAProduct($productName,$category);

		$price = $product['price'];
		$amount = $cart['amount'];
		$amount = $amount + 1;
		$price = $amount*$price;

		if($cart == null){
			$this->um->addCart($username,$productName,$category,$price);
			$this->session->set_flashdata('gagal',"The product successfully added to your cart!");
			redirect('User/Home/'.$category);
		}else{
			$this->um->updateCart($username,$productName,$amount,$category,$price);
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

		$data['judul'] = 'Cart';
		if ($this->session->userdata('status')== true) {
			$this->load->view('headers/header_login',$data);
			$this->load->view('user/cart');
			$this->load->view('footers/footer');
		}else{
			redirect('User/Home/');
		}

	}

	public function Checkout(){
		$username = $this->session->userdata('username');
		$data = $this->um->getUserName($username);
		$getAddress = $this->um->getUserAllAddress($username);
		for($i = 0; $i < count($getAddress); $i++){
			if($getAddress[$i]->default == 1){
				$address = $this->um->getUserAddress($username,$getAddress[$i]->street);
				break;
			}else{
				$address['street'] = "-";
			}
		}

		$objItem = $_GET['obj'];
		$objItem = json_decode(base64_decode($objItem));

		$obj = [];

		for($i = 0; $i < count($objItem);$i++){
			$obj[$i] = $this->pm->getAProduct($objItem[$i]->productName,$objItem[$i]->category);
			$obj[$i]['category'] = $objItem[$i]->category;
			$obj[$i]['amount'] = $objItem[$i]->amount;
			$obj[$i]['pricess'] = $objItem[$i]->price;
		}

		$data['address'] = $address;
		$data['objItem'] = $obj;
		$data['judul'] = 'Checkout';
		if ($this->session->userdata('status')== true) {
			$this->load->view('headers/header_checkout',$data);
			$this->load->view('user/Checkout');
			$this->load->view('footers/footer');
		}else{
			redirect('User/Home/');
		}
	}

	public function Payment(){
		$username = $this->session->userdata('username');
		$data = $this->um->getUserName($username);

		$objItem = $_GET['obj'];
		$objItem = json_decode(base64_decode($objItem));

		$obj = [];

		for($i = 0; $i < count($objItem);$i++){
			$obj[$i] = $this->pm->getAProduct($objItem[$i]->productName,$objItem[$i]->category);
			$obj[$i]['amount'] = $objItem[$i]->amount;
			$obj[$i]['category'] = $objItem[$i]->category;
		}
		$data['price'] = $objItem[0]->price;
		$data['objItem'] = $obj;
		$data['judul'] = 'Payment';
		if ($this->session->userdata('status')== true) {
			$this->load->view('headers/header_checkout',$data);
			$this->load->view('user/Payment');
			$this->load->view('footers/footer');
		}else{
			redirect('User/Home/');
		}
	}

	public function payNow(){
		$username = $this->session->userdata('username');
		$data = $this->um->getUserName($username);

		$objItem = $_GET['obj'];
		$objItem = json_decode(base64_decode($objItem));

		date_default_timezone_set('Asia/Bangkok');
		$date = date('Y-m-d H:i:s');

		for($i = 0; $i < count($objItem);$i++){
			$obj[$i] = $this->pm->getAProduct($objItem[$i]->productName,$objItem[$i]->category);
			$this->um->deleteCart($username,$objItem[$i]->productName,$objItem[$i]->category);
			$amount = $obj[$i]['stock'] - $objItem[$i]->amount;
			$this->um->addTranscation($username,$objItem[$i]->productName,$objItem[$i]->trans_method,$date,$objItem[$i]->price);
			$this->pm->updateStockProduct($objItem[$i]->productName,$amount,$objItem[$i]->category);
		}
		redirect('Welcome');
	}

	public function DataUser(){
		$username = $this->session->userdata('username');
		$data = $this->um->getUserName($username);

		$data['user'] = $this->um->getAllUser($username);

		$data['judul'] = 'Data User';
		if ($this->session->userdata('status')== true) {
			$this->load->view('headers/header_login',$data);
			$this->load->view('admin/dataUser');
			$this->load->view('footers/footer');
		}else{
			redirect('User/Home/');
		}
	}

	public function DataTransaksi(){
		$username = $this->session->userdata('username');
		$data = $this->um->getUserName($username);

		$data['transaction'] = $this->um->getAllTransaction();

		$data['judul'] = 'Data Transaksi';
		if ($this->session->userdata('status')== true) {
			$this->load->view('headers/header_login',$data);
			$this->load->view('admin/dataTransaksi');
			$this->load->view('footers/footer');
		}else{
			redirect('User/Home/');
		}
	}

	public function deleteUser(){

		$username = $_GET['user'];
		$username = base64_decode($username);
		$this->um->deleteUser($username);
		$this->session->set_flashdata('gagal',"That user successfully deleted from database!");
		redirect('User/Home/DataUser');
	}

	public function deleteTransaction(){

		$transaction = $_GET['transObj'];
		$transaction = json_decode(base64_decode($transaction));
		$this->um->deleteTransaction($transaction->id,$transaction->username);
		$this->session->set_flashdata('gagal',"That transaction successfully deleted from database!");
		redirect('User/Home/DataTransaksi');
	}

}
