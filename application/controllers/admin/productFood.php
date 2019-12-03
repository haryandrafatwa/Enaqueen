<?php
class productFood extends CI_Controller{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Users_model','um');
		$this->load->model('Product_model','pm');
	}

	public function editFoodProduct($productName){
		$username = $this->session->userdata('username');
		$data = $this->um->getUserName($username);


		$data['product'] = $this->pm->getAProduct(urldecode($productName),'menu');

		if(	$data['product']['id_category'] == 1){
			$data['product']['id_category'] = "Javanese";
		}else if(	$data['product']['id_category'] == 2){
			$data['product']['id_category'] = "Sundanese";
		}if(	$data['product']['id_category'] == 3){
			$data['product']['id_category'] = "Balinese";
		}

		$data['judul'] = 'Edit Product';
		if ($this->session->userdata('username') != null) {
			$this->load->view('headers/header_login',$data);
			$this->load->view('admin/edit_product_food');
			$this->load->view('footers/footer');
		}else{
			redirect('Welcome');
		}
	}

	public function updateFoodProduct(){
		$productName = $this->input->post('productName');
		$price = $this->input->post('price');
		$stock = $this->input->post('stock');

		$newPrice = (int) str_replace(".", "", $price);

		if(!isset($_FILES['uploadImage'])){
			$this->pm->updateProduct($productName,$newPrice,$stock,null,'menu');
		}else{
			$image = $_FILES['uploadImage']['tmp_name'];
			$name = $_FILES['uploadImage']['name'];
			$image = base64_encode(file_get_contents($image));
			$this->pm->updateProduct($productName,$newPrice,$stock,$image,'menu');
		}
		$this->session->set_flashdata('gagal',"The product successfully updated!");
		redirect('Admin/ProductFood/editFoodProduct/'.$productName);
	}

	public function deleteFoodProduct($productName){
		$this->pm->deleteProduct(urldecode($productName),'menu');
		$this->session->set_flashdata('gagal',"The product successfully deleted!");
		redirect('User/Home/Product?type=Food');
	}

	public function addFoodProduct(){
		$username = $this->session->userdata('username');
		$data = $this->um->getUserName($username);

		$data['judul'] = 'Add Product';
		if ($this->session->userdata('status')== true) {
			$this->load->view('headers/header_login',$data);
			$this->load->view('admin/add_product_food');
			$this->load->view('footers/footer');
		}else{
			redirect('Welcome');
		}
	}

	public function addProductFood(){
		$productCategory = $this->input->post('productCategory');
		$productName = $this->input->post('productName');
		$price = $this->input->post('price');
		$stock = $this->input->post('stock');

		$newCat;

		if($productCategory == "Javanese"){
			$newCat = 1;
		}else if($productCategory == "Sundanese"){
			$newCat = 2;
		}else if($productCategory == "Balinese"){
			$newCat = 3;
		}

		$productCheck = $this->pm->getAProduct(urldecode($productName),'menu');
		$newPrice = (int) str_replace(".", "", $price);

		if($productCheck != null){
			$this->session->set_flashdata('gagal',"<strong>Product Name</strong> already taken!");
			redirect('Admin/ProductFood/addFoodProduct');
		}else{
			$image = $_FILES['uploadImage']['tmp_name'];
			$name = $_FILES['uploadImage']['name'];
			$image = base64_encode(file_get_contents($image));
			$this->pm->addProduct($newCat,$productName,$newPrice,$stock,$image,1);
			$this->session->set_flashdata('gagal',"The product successfully added!");
			redirect('User/Home/Product?type=Food');
		}
	}

}
