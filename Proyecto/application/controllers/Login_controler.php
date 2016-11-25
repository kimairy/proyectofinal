<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_controler extends CI_Controller {

	public function __construct()
	    {
	      parent::__construct();
	      $this->load->helper('url');
				$this->load->database();
				$this->load->model('Login_model');
	    //  $this->load->library('form_validation');
	    }

	public function index()
	{
		if($this->session->userdata('usuario')){
			redirect('biblioteca_controler');
		}
		if(isset($_POST['clave'])){
				$this->load->model('login_model');
				if($this->login_model->login($_POST['correo'],$_POST['clave'])){
					$this->session->set_userdata('usuario',$_POST['correo']);
					redirect('biblioteca_controler');
				}else{
					redirect('login_controler');
				}
		}
		$this->load->view('login_view');
	}

	function loginAdmind(){
		if($this->session->userdata('usuario')){
			redirect('biblioteca_controler');
		}
		if($this->session->userdata('admin')){
			redirect('Admin_controler');
		}
		if(isset($_POST['clave'])){
				$this->load->model('admin_model');
				if($this->login_model->loginAdmin($_POST['usuario'],$_POST['clave'])){
					$this->session->set_userdata('admin',$_POST['usuario']);
					redirect('admin_controler');
				}else{
					redirect('login_controler/loginAmind');
				}
		}
		$this->load->view('plantillas/front_end/header_view');
		$this->load->view('adminLogin_view');
		$this->load->view('plantillas/front_end/footer_view');
	}

public function logaut(){
	$this->session->sess_destroy();
	redirect('biblioteca_controler');
}
}
