<?php
class productDessert extends CI_Controller{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Users_model','um');
		$this->load->model('Product_model','pm');
	}
	
	public function editDessertProduct($productName){
		$username = $this->session->userdata('username');
		$data = $this->um->getUserName($username);
		
		
		$data['product'] = $this->pm->getAProduct(urldecode($productName),'dessert');
		$data['type'] = 'dessert';
		$data['judul'] = 'Edit Product';
		if ($this->session->userdata('status')== true) {
			$this->load->view('headers/header_login',$data);
			$this->load->view('admin/edit_product_dessert');
			$this->load->view('footers/footer');
		}else{
			redirect('Welcome');
		}
	}
	
	public function updateDessertProduct(){
		$productName = $this->input->post('productName');
		$price = $this->input->post('price');
		$stock = $this->input->post('stock');
		
		$newPrice = (int) str_replace(".", "", $price);
		
		if(!isset($_FILES['uploadImage'])){
			$this->pm->updateProduct($productName,$newPrice,$stock,null,'dessert');
		}else{
			$image = $_FILES['uploadImage']['tmp_name']; 
			$name = $_FILES['uploadImage']['name']; 
			$image = base64_encode(file_get_contents($image));
			$this->pm->updateProduct($productName,$newPrice,$stock,$image,'dessert');
		}
		$this->session->set_flashdata('gagal',"The product successfully updated!");
		redirect('Admin/ProductDessert/editDessertProduct/'.$productName);
	}
	
	public function deleteDessertProduct($productName){
		$this->pm->deleteProduct(urldecode($productName),'dessert');
		$this->session->set_flashdata('gagal',"The product successfully deleted!");
		redirect('User/Home/Dessert');
	}
	
	public function addDessertProduct(){
		$username = $this->session->userdata('username');
		$data = $this->um->getUserName($username);
		
		$data['judul'] = 'Add Product';
		if ($this->session->userdata('status')== true) {
			$this->load->view('headers/header_login',$data);
			$this->load->view('admin/add_product_dessert');
			$this->load->view('footers/footer');
		}else{
			redirect('Welcome');
		}
	}
	
	public function addProductDessert(){
		$productCategory = $this->input->post('productCategory');
		$productName = $this->input->post('productName');
		$price = $this->input->post('price');
		$stock = $this->input->post('stock');
		
		$productCheck = $this->pm->getAProduct(urldecode($productName),'dessert');
		$newPrice = (int) str_replace(".", "", $price);
		
		if($productCheck != null){
			$this->session->set_flashdata('gagal',"<strong>Product Name</strong> already taken!");
			redirect('Admin/ProductDessert/addDessertProduct');
		}else{
			$image = $_FILES['uploadImage']['tmp_name']; 
			$name = $_FILES['uploadImage']['name']; 
			$image = base64_encode(file_get_contents($image));
			$this->pm->addProduct($productCategory,$productName,$newPrice,$stock,$image,'dessert');
			$this->session->set_flashdata('gagal',"The product successfully added!");
			redirect('User/Home/Dessert');
		}
	}
	
}
