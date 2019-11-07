<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome_model extends CI_Model{

	public function getInfo(){
		$query = $this->db->get('peternak');
		if($query->num_rows() > 0){
			return $query->result();
		}else{
			return false;
		}
	}

	
}