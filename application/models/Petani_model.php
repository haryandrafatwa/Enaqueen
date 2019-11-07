<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Petani_model extends CI_Model {

	public function list_petani(){
		$this->db->order_by('id','desc');
		$query = $this->db->get('peternak');
		if($query->num_rows() > 0){
			return $query->result();
		}else{
			return false;
		}
	}
	public function submit(){
		$field = array(
			'namaketua'=>$this->input->post('namaketua'),
			'namakelompok'=>$this->input->post('namakelompok'),
			'telp'=>$this->input->post('telp'),
			'kecamatan'=>$this->input->post('kecamatan'),
			'tahunberdiri'=>$this->input->post('tahunberdiri'),
			);
		$this->db->insert('peternak',$field);
		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
	}
	function ubah($data, $id){
        $this->db->where('id',$id);
        $this->db->update('peternak', $data);
        return TRUE;
    }
    function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
}
