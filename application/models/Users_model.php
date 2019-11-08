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

}
