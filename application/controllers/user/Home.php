<?php
class Home extends CI_Controller{

  public function index(){
    $this->load->view('headers/header_not_login');
    $this->load->view('user/home');
    $this->load->view('footers/footer');
  }

  public function Food(){
    $this->load->view('headers/header_not_login');
    $this->load->view('user/food');
    $this->load->view('footers/footer');
  }

  public function Drink(){
    $this->load->view('headers/header_not_login');
    $this->load->view('user/drink');
    $this->load->view('footers/footer');
  }

  public function Dessert(){
    $this->load->view('headers/header_not_login');
    $this->load->view('user/dessert');
    $this->load->view('footers/footer');
  }
}
