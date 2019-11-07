<?php
class Auth extends CI_Controller{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Users_model');
	}
	
	public function Logout(){
		unset($_SESSION);
		session_destroy();
		redirect('Welcome');
	}

	public function Register(){

		$data['judul'] = 'Enaqueen | Register';
		$this->form_validation->set_rules('username','Username','required');
		$this->form_validation->set_rules('email','Email','required');
		$this->form_validation->set_rules('password','Password','required');
		$this->form_validation->set_rules('repassword','Repassword','required');
		if ($this->form_validation->run() == FALSE)
		{
			return $this->load->view('register',$data);
		}
		else
		{

			$username = $this->input->post('username');
			$email = $this->input->post('email');
			$pass = $this->input->post('password');
			$repass = $this->input->post('repassword');

			if($pass == $repass){
				$getUsername = $this->Users_model->getUserName($username);
				$getEmail = $this->Users_model->getUserEmail($email);

				if ($getUsername == null){
					if ($getEmail == null){
						$this->Users_model->register();
						$data_session = array(
							'username' => $this->input->post('username'),
							'status' => true,
						);
						$this->session->set_userdata($data_session);
						redirect('Welcome');
					}else{
						$this->session->set_flashdata('gagal',"<strong>Email</strong> already taken!");
						redirect('Welcome/Register');
					}
				}else{
					$this->session->set_flashdata('gagal',"<strong>Username</strong> already taken!");
					redirect('Welcome/Register');
				}
			}else{
				$this->session->set_flashdata('gagal',"<strong>Password</strong> and <strong>Repassword</strong> doesn't equals!");
				redirect('Welcome/Register');
			}
		}
	}

	public function Login(){

		$data['judul'] = 'Enaqueen | Login';
		$this->form_validation->set_rules('username_field','Username','required');
		$this->form_validation->set_rules('pass_field','Password','required');
		if ($this->form_validation->run() == FALSE)
		{
			redirect('Welcome/Login');
		}
		else
		{
			$username = $this->input->post('username_field');
			$pass = base64_encode($this->input->post('pass_field'));

			if($username != null){
				if ($pass != null) {
					$getUsername = $this->Users_model->getUserName($username);
					$getPassword = $this->Users_model->getUserPassword($pass);
					if($getUsername != null){
						if($getPassword != null){
							$data_session = array(
								'username' => $this->input->post('username_field'),
								'status' => true,
							);
							$this->session->set_userdata($data_session);
							redirect('User/Home');
						}else{
							$this->session->set_flashdata('gagal',"The <strong>Password</strong> is wrong!"+$pass);
							redirect('Welcome/Login');
						}
					}else{
						$this->session->set_flashdata('gagal',"The <strong>Username</strong> not yet registered!");
						redirect('Welcome/Login');
					}
				}
			}
		}
	}

}
