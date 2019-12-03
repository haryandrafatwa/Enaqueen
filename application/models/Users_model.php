<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users_model extends CI_Model{

	public function getAllUser($username){
		$this->db->where('username !=' , $username);
		$result = $this->db->get('user');
		return $result->result();
	}

	public function getTransaction($date,$month,$year){
		$this->db->select('*');
		$this->db->from('transaction');
		$this->db->join('user', 'user.username = transaction.username','left');
		$this->db->where('date', $year."-".$month."-".$date);
		$query = $this->db->get();
		return $query->result();
	}

	public function getAllTransaction(){
		$this->db->select('*');
		$this->db->from('transaction');
		$this->db->join('user', 'user.username = transaction.username','left');
		$query = $this->db->get();
		return $query->result();
	}

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

	public function getUserAllAddress($username){
			$this->db->where('username',$username);
			$result = $this->db->get('address');
			return $result->result();
	}

	public function getUserAddress($username,$street){
			$this->db->where(array('username'=>$username,'street'=>$street));
			$result = $this->db->get('address');
			return $result->row_array();
	}

	public function getUserPassword($pass,$username){
			$this->db->where(array('password' => $pass, 'username' => $username));
			$result = $this->db->get('user');
			return $result->row_array();
	}

	function register(){
		date_default_timezone_set('Asia/Bangkok');
		$date = date('Y-m-d H:i:s');

		$url = base_url('assets/template/front/img/icons/user.png');
		$data = [
			"username" => $this->input->post('username', true),
			"email" => $this->input->post('email', true),
			"firstname" => "-",
			"lastname" => "-",
			"password" => base64_encode($this->input->post('password', true)),
			"no_telp" => "-",
			"photoProfile" => base64_encode(file_get_contents($url)),
			"join_date" => $date
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

	function addAddress($username,$streetAdd,$streetAdd2,$city,$province,$building,$zip){
			$data = array(
				'street' => $streetAdd,
				'street2'  => $streetAdd2,
				'building' => $building,
				'city' => $city,
				'province'  => $province,
				'zip' => $zip,
				'username' => $username,
				'default' => true
			);
		return $this->db->insert('address', $data);
	}

	function getCart($username,$productName,$category){
		$this->db->where(array('username' => $username, 'product_name' => $productName));
		$result = $this->db->get('cart');
		return $result->row_array();
	}

	function getCartList($username){

		$this->db->select('cart.product_name as product_name,cart.amount as amount,cart.price as price, cart.totalprice as totalprice,menu.photo as photo,category.category_name as category');
		$this->db->from('cart');

		$this->db->join('menu', 'menu.product_name = cart.product_name','left');
		$this->db->join('category', 'menu.id_category = category.id_category','left');

		$this->db->where('username',$username);
		$query = $this->db->get();
		return $query->result();
	}

	function addCart($username,$productName,$category,$price){
			$data = [
				"username" => $username,
				"product_name" => $productName,
				"amount" => 1,
				"price" => $price,
				"totalprice" => $price
			];
		$this->db->insert('cart', $data);
	}

	function updateCart($username,$productName,$amount,$category,$price){
		$total_price = $price * $amount;
		$data = [
			"amount" => $amount,
			"price" => $price,
			"totalprice" => $total_price
		];
		$this->db->where(array(
			"username" => $username,
			"product_name" => $productName));
		$this->db->update('cart', $data);
	}

	public function deleteCart($username,$product,$category){
		$this->db->where(array('username' => $username,'product_name' => $product));
		$this->db->delete('cart');
	}

	public function addTransaction($username,$productName,$transaction_method,$date,$total_price,$amount){
		$data = array(
				'username' => $username,
				'product_name' => $productName,
				'transaction_method' => $transaction_method,
				'date' => $date,
				'totalprice'  => $total_price,
				'amount' => $amount
			);

		return $this->db->insert('transaction', $data);
	}

	public function deleteUser($username){
		$this->db->where('username', $username);
		$this->db->delete('user');
	}

	public function deleteTransaction($id,$username){
		$this->db->where(array('username' => $username, 'trans_id' => $id));
		$this->db->delete('transaction');
	}

	public function getMinDate($table){
		$this->db->select_min('date');
		$result = $this->db->get($table);
		return $result->result();
	}

}
