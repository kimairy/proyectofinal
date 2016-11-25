<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {

	public function __construct()
	    {
	      parent::__construct();
        $this->load->database();
	    }
	public function index()
	{

	}
  public function Login($username,$clave){
    $this->db->where('correo',$username);
    $this->db->where('clave',$clave);
    $q= $this->db->get('usuario');
    if($q->num_rows()>0){
      return true;
    }else{
      return false;
    }
  }

	public function loginAdmin($username,$clave){
    $this->db->where('usuario',$username);
    $this->db->where('clave',$clave);
    $q= $this->db->get('admin');
    if($q->num_rows()>0){
      return true;
    }else{
      return false;
    }
  }
}
