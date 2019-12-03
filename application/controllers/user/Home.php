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
		if ($this->session->userdata('username') != null) {
			$this->load->view('headers/header_login',$data);
		}else{
			$data['username'] = null;
			$this->load->view('headers/header_not_login',$data);
		}
	    $this->load->view('user/home');
	    $this->load->view('footers/footer');
  }

  public function Product(){
	$username = $this->session->userdata('username');
	$data = $this->um->getUserName($username);

	$cart = $this->um->getCartList($username);

	if($cart != null){
		$data['statusCart'] = true;
	}else{
		$data['statusCart'] = false;
	}

	$data['cart'] = $cart;

	$judul = $_GET['type'];

	if($judul == 'Food'){
		$productCat1 = $this->pm->getProduct(1,"menu");
		$productCat2 = $this->pm->getProduct(2,"menu");
		$productCat3 = $this->pm->getProduct(3,"menu");

		$data['productCat1'] = $productCat1;
		$data['productCat2'] = $productCat2;
		$data['productCat3'] = $productCat3;
	}else if($judul == 'Drink'){
		$productCat1 = $this->pm->getProduct(4,"menu");
		$productCat2 = $this->pm->getProduct(5,"menu");
		$productCat3 = $this->pm->getProduct(6,"menu");

		$data['productCat1'] = $productCat1;
		$data['productCat2'] = $productCat2;
		$data['productCat3'] = $productCat3;
	}else if($judul == 'Dessert'){
		$productCat1 = $this->pm->getProduct(7,"menu");
		$productCat2 = $this->pm->getProduct(8,"menu");
		$productCat3 = $this->pm->getProduct(9,"menu");

		$data['productCat1'] = $productCat1;
		$data['productCat2'] = $productCat2;
		$data['productCat3'] = $productCat3;
	}

	$data['judul'] = $judul;
	if ($this->session->userdata('username') != null) {
		$this->load->view('headers/header_login',$data);
	}else{
		$this->load->view('headers/header_not_login',$data);
	}
    $this->load->view('user/product');
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
	if ($this->session->userdata('username') != null) {
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
	if ($this->session->userdata('username') != null) {
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
	if ($this->session->userdata('username') == null) {
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
		$product = $this->pm->getAProduct($productName,"menu");

		$price = $product['price'];
		$amount = $cart['amount'];
		$amount = $amount + 1;
		$price = $amount*$price;

		if($cart == null){
			$this->um->addCart($username,$productName,$category,$price);
			$this->session->set_flashdata('gagal',"The product successfully added to your cart!");
			redirect('User/Home/Product?type='.$category);
		}else{
			$this->um->updateCart($username,$productName,$amount,$category,$price);
			$this->session->set_flashdata('gagal',"The product successfully added to your cart!");
			redirect('User/Home/Product?type='.$category);
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
		if ($this->session->userdata('username') != null) {
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
		if ($getAddress != null){
			for($i = 0; $i < count($getAddress); $i++){
				if($getAddress[$i]->default == 1){
					$address = $this->um->getUserAddress($username,$getAddress[$i]->street);
					break;
				}else{
					$address['street'] = "-";
				}
			}
		}else{
			$address = "-";
		}

		$objItem = $_GET['obj'];
		$objItem = json_decode(base64_decode($objItem));

		$obj = [];

		for($i = 0; $i < count($objItem);$i++){
			$obj[$i] = $this->pm->getAProduct($objItem[$i]->productName,"menu");
			$obj[$i]['category'] = $objItem[$i]->category;
			$obj[$i]['amount'] = (int)$objItem[$i]->amount;
			$obj[$i]['pricess'] = (int)$objItem[$i]->price;
		}

		$data['address'] = $address;
		$data['objItem'] = $obj;
		$data['judul'] = 'Checkout';
		if ($this->session->userdata('username') != null) {
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
			$obj[$i] = $this->pm->getAProduct($objItem[$i]->productName,"menu");
			$obj[$i]['amount'] = $objItem[$i]->amount;
			$obj[$i]['category'] = $objItem[$i]->category;
		}
		$data['price'] = $objItem[0]->price;
		$data['objItem'] = $obj;
		$data['judul'] = 'Payment';
		if ($this->session->userdata('username') != null) {
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
			$obj[$i] = $this->pm->getAProduct($objItem[$i]->productName,"menu");
			$this->um->deleteCart($username,$objItem[$i]->productName,$objItem[$i]->category);
			$stock = $obj[$i]['stock'] - $objItem[$i]->amount;
			$this->um->addTransaction($username,$objItem[$i]->productName,$objItem[$i]->trans_method,$date,$objItem[$i]->price,$objItem[$i]->amount);
			$this->pm->updateStockProduct($objItem[$i]->productName,$stock,"menu");
		}
		redirect('Welcome');
	}

	public function DataUser(){
		$username = $this->session->userdata('username');
		$data = $this->um->getUserName($username);

		$data['user'] = $this->um->getAllUser($username);

		$data['judul'] = 'Data User';
		if ($this->session->userdata('username') != null) {
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

		$minDate= $this->um->getMinDate('transaction');
		$arrDate = explode("-",$minDate[0]->date);
		$minYear = $arrDate[0];
		$data['minYear'] = $minYear;

		$currDate = date("d");
		$currMonth = date("m");
		$currYear = date("Y");

		$data['currDate'] = $currDate;
		$data['currMonth'] = $currMonth;
		$data['currYear'] = $currYear;

		$data['judul'] = 'Data Transaksi';
		if ($this->session->userdata('username') != null) {
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

	public function SortingDate(){
		$date = $this->input->post('inputDate');
		$month = $this->input->post('inputMonth');
		$year = $this->input->post('inputYear');

		if($date == null || $month == null || $year == null){
			$this->session->set_flashdata('kosong',"Please fill in the date, month, and year first!");
			redirect('User/Home/DataTransaksi?arr=0');
		}else{
			$arr['date'] = $date;
			$arr['month'] = $month;
			$arr['year'] = $year;
			printf();
			redirect('User/Home/ResultSort?arr='.base64_encode(json_encode($arr)));
		}
	}

	public function resultSort(){
		$username = $this->session->userdata('username');
		$data = $this->um->getUserName($username);

		$arr = json_decode(base64_decode($_GET['arr']));

		print_r($arr->date."-".$arr->month."-".$arr->year);

		$data['transaction'] = $this->um->getTransaction($arr->date,$arr->month,$arr->year);

		$data['judul'] = 'Data Transaksi';
		if ($this->session->userdata('username') != null) {
			$this->load->view('headers/header_login',$data);
			$this->load->view('admin/resultSort');
			$this->load->view('footers/footer');
		}else{
			redirect('User/Home/');
		}
	}

}
