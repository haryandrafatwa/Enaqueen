<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Komoditas_model extends CI_Model {

	public function list_komoditas(){
		$this->db->order_by('id','desc');
		$query = $this->db->get('komoditas');
		if($query->num_rows() > 0){
			return $query->result();
		}else{
			return false;
		}
	}
	public function submit(){
		$field = array(
			'nama'=>$this->input->post('nama'),
			'deskripsi'=>$this->input->post('deskripsi'),
			'foto'=>$this->input->post('foto'),
			);
		$this->db->insert('komoditas',$field);
		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
	}
	function ubah($data, $id){
        $this->db->where('id',$id);
        $this->db->update('komoditas', $data);
        return TRUE;
    }
    function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}


}
