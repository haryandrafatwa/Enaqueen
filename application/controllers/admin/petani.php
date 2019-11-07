<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Petani extends CI_Controller {

	function __construct(){
		parent:: __construct();
		$this->load->model('petani_model','pm');
	}

	public function index()
	{
		$data['data'] = $this->pm->list_petani();
		$this->load->view('admin/petani',$data);
	}
	public function add(){
		$this->load->view('admin/add');
	}
	public function submit(){
		$result = $this->pm->submit();
		if($result){
			$this->session->set_flashdata('success_msg','Data Berhasil disimpan');
		}else{
			$this->session->set_flashdata('error_msg','Data gagal disimpan');
		}
		redirect(base_url('admin/petani'));
	}
	public function ubah(){
		$id = $this->input->post('id');
		$data = array(
			'namaketua' => $this->input->post('namaketua'), 
			'namakelompok' => $this->input->post('namakelompok'),
			'telp' => $this->input->post('telp'),
			'kecamatan' => $this->input->post('kecamatan'),
			'tahunberdiri' => $this->input->post('tahunberdiri'),
		);
		$this->pm->ubah($data,$id);
		redirect(base_url('admin/petani'));
	}
	function delete($id){
		$where = array('id' => $id);
		$this->pm->hapus_data($where,'peternak');
		redirect(base_url('admin/petani'));
	}
}
