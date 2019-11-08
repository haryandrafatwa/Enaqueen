<?php

class Product_model extends CI_Model{

	public function getProduct($category,$table){
			$this->db->where('category',$category);
			$result = $this->db->get($table);
			return $result->result();
	}

}
