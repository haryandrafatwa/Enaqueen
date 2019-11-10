<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users_model extends CI_Model{

	public function getUserEmail($email){
			$this->db->where('email',$email);
			$result = $this->db->get('user');
			return $result->row_array();
	}

	public function getUserName($username){
			$this->db->where('username',$username);
			$result = $this->db->get('user');
			return $result->row_array();
	}

	public function getUserPassword($pass,$username){
			$this->db->where(array('password' => $pass, 'username' => $username));
			$result = $this->db->get('user');
			return $result->row_array();
	}

	function register(){
		$url = base_url('assets/template/front/img/icons/user.png');
		$data = [
			"username" => $this->input->post('username', true),
			"email" => $this->input->post('email', true),
			"firstname" => "",
			"lastname" => "",
			"password" => base64_encode($this->input->post('password', true)),
			"no_telp" => "",
			"alamat" => "",
			"photoProfile" => base64_encode(file_get_contents($url)),
		];
		return $this->db->insert('user', $data);
	}
	
	function updatePersonalDetail($username,$first,$last,$image,$phonenumber){
		
		if($image == null){
			$data = array(
				'firstname' => $first,
				'lastname'  => $last,
				'no_telp' => $phonenumber
			);
			$this->db->where('username', $username);
			$this->db->update('user', $data);
		}else{
			$data = array(
				'firstname' => $first,
				'lastname'  => $last,
				'photoProfile'  => $image,
				'no_telp' => $phonenumber
			);
			$this->db->where('username', $username);
			$this->db->update('user', $data);
		}
	}
	
	function getCart($username,$productName,$category){
		$this->db->where(array('username' => $username, $category.'_name' => $productName));
		$result = $this->db->get('cart');
		return $result->row_array();
	}
	
	function getCartList($username){
		
		$this->db->select('cart.food_name as food_name,cart.drink_name as drink_name,cart.dessert_name as dessert_name,cart.amount as amount,food.photo as food_photo,drink.photo as drink_photo,dessert.photo as dessert_photo,food.price as food_price,drink.price as drink_price,dessert.price as dessert_price');
		$this->db->from('cart');
		
		$this->db->join('food', 'food.food_name = cart.food_name','left');
		$this->db->join('drink', 'drink.drink_name = cart.drink_name','left');
		$this->db->join('dessert', 'dessert.dessert_name = cart.dessert_name','left');
		
		$this->db->where('username',$username);
		$query = $this->db->get();
		return $query->result();
	}
	
	function addCart($username,$productName,$category){
		if($category == 'Food'){
			$data = [
				"username" => $username,
				"food_name" => $productName,
				"drink_name" => "",
				"dessert_name" => "",
				"amount" => 1,
			];
		}else if($category == 'Drink'){
			$data = [
				"username" => $username,
				"food_name" => "",
				"drink_name" => $productName,
				"dessert_name" => "",
				"amount" => 1,
			];
		}else if($category == 'Dessert'){
			$data = [
				"username" => $username,
				"food_name" => "",
				"drink_name" => "",
				"dessert_name" => $productName,
				"amount" => 1,
			];
		}
		$this->db->insert('cart', $data);
	}
	
	function updateCart($username,$productName,$amount,$category){
		$data = [
			"amount" => $amount,
		];
		$this->db->where(array(
			"username" => $username,
			$category."_name" => $productName));
		$this->db->update('cart', $data);
	}
	
	public function deleteCart($username,$product,$category){
		$this->db->where(array('username' => $username,$category.'_name' => $product));
		$this->db->delete('cart');
	}

}
