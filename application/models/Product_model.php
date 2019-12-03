<?php

class Product_model extends CI_Model{

	public function getProduct($category,$table){
			$this->db->where('id_category',$category);
			$result = $this->db->get($table);
			return $result->result();
	}

	public function getAProduct($productName,$table){
			$this->db->where('product_name',$productName);
			$result = $this->db->get($table);
			return $result->row_array();
	}

	public function updateProduct($productName,$newPrice,$stock,$image,$table){
		if($image == null){
			$data = array(
				'price' => $newPrice,
				'stock'  => $stock
			);
		}else{
			$data = array(
				'price' => $newPrice,
				'stock'  => $stock,
				'photo' => $image
			);
		}
		$this->db->where('product_name', $productName);
		$this->db->update($table, $data);
	}

	public function updateStockProduct($productName,$stock,$table){
		$data = array(
			'stock'  => $stock
		);
		$this->db->where('product_name', $productName);
		$this->db->update($table, $data);
	}

	public function deleteProduct($productName,$table){
		$this->db->where('product_name', $productName);
		$this->db->delete($table);
	}

	public function addProduct($productCategory,$productName,$price,$stock,$image,$type){
		$data = [
			"product_name" => $productName,
			"id_type" => $type,
			"id_category" => $productCategory,
			"price" => $price,
			"stock" => $stock,
			"photo" => $image,
		];
		return $this->db->insert('menu', $data);
	}

}
