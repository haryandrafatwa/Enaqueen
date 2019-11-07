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

	public function getUserPassword($pass){
			$this->db->where('username',$pass);
			$result = $this->db->get('user');
			return $result->row_array();
	}

	function register(){
		$url = base_url('assets/template/front/img/icons/user-solid.svg');
		$data = [
			"username" => $this->input->post('username', true),
			"email" => $this->input->post('email', true),
			"fullname" => "",
			"password" => base64_encode($this->input->post('password', true)),
			"no_telp" => "",
			"alamat" => "",
			"photoProfile" => base64_decode($url),
		];
		return $this->db->insert('user', $data);
	}

}
