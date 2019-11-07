<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	function __construct(){
		parent:: __construct();
		$this->load->model('users_model','um');
	}

	public function index()
	{
		$data['data'] = $this->um->list_users();
		$this->load->view('admin/users',$data);
	}
	public function add(){
		$this->load->view('admin/add');
	}
	public function submit(){
		$result = $this->um->submit();
		if($result){
			$this->session->set_flashdata('success_msg','Data Berhasil disimpan');
		}else{
			$this->session->set_flashdata('error_msg','Data gagal disimpan');
		}
		redirect(base_url('admin/users'));
	}
	public function ubah(){
		$id = $this->input->post('id');
		$data = array(
			'namalengkap' => $this->input->post('namalengkap'), 
			'hp' => $this->input->post('hp'),
			'kokab' => $this->input->post('kokab'),
			'kecamatan' => $this->input->post('kecamatan'),
			'desa' => $this->input->post('desa'),
			'level' => $this->input->post('level'),
		);
		$this->um->ubah($data,$id);
		redirect(base_url('admin/users'));
	}
	
	function delete($id){
		$where = array('id' => $id);
		$this->um->hapus_data($where,'tb_user');
		redirect(base_url('admin/users'));
	}
}
