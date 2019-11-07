<?php

class Product_model extends CI_Model{

	public function getProduct($category){
			$this->db->where('category',$category);
			$result = $this->db->get('food');
			return $result->result();
	}
	
}