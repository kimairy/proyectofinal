<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Biblioteca_controler extends CI_Controller {

  public function __construct()
    {
      parent::__construct();
      $this->load->helper('url');
      $this->load->model('Registrar_model');
      $this->load->model('login_model');
    }

    public function index()
    {

        $this->load->view('plantillas/front_end/header_view');
        $this->load->view('front_end/index_view');
        $this->load->view('plantillas/front_end/footer_view');

    }

    function verRegistro(){
      if(!$this->session->userdata('usuario')){
      redirect('in_controler');
    }
      $data = array();
      $data['usuarios'] = $this->Registrar_model->verUsuario();
      $this->load->view('plantillas/front_end/header_view',$data);
      $this->load->view('front_end/registro_view');
      $this->load->view('plantillas/front_end/footer_view');
    }

    function guardarRegistro(){

        if($_POST){
          $this->Registrar_model->guardarRegistro($_POST);
        }
        $data['usuarios'] = $this->Registrar_model->verUsuario();
        $this->load->view('biblioteca_view');
      }
      function mensaje(){
         if(!$this->session->userdata('usuario')){
           redirect('biblioteca_controler');
          }else{
            $this->load->view('plantillas/front_end/header_view');
            $this->load->view('front_end/mensaje_view');
            $this->load->view('plantillas/front_end/footer_view');
          }
      }

      function confilmarDatosUsuarios(){

        if(!$this->session->userdata('usuario')){
          redirect('biblioteca_controler');
        }else{
          if($_POST){
            if($_POST['nombre']==$this->session->userdata('usuario') && $_POST['password']==$this->session->userdata('password')){
              redirect('biblioteca_controler/cambiarClave');
            }else{
              redirect('biblioteca_controler/confilmarDatosUsuarios');
            }
          }
           $this->load->view('plantillas/front_end/header_view');
           $this->load->view('front_end/cambiarclave_view');
          $this->load->view('plantillas/front_end/footer_view');
        }
      }
      function actualizarEstudiante(){
        $id=$this->uri->segment(3);
        $obtenerEnlace=$this->Registrar_model->obtener($id);
        if($obtenerEnlace !=false){
          foreach ($obtenerEnlace as result_array()->$row) {
          $nombre=$row->nombre;
          $apellido=$row->apellido;
          $lugar=$row->lugar;
          $telefono=$row->telefono;
          $matricula=$row->matricula;
          $tipo_visita=$row->tipo_visita;
          $centro=$row->centro;
          $motivo=$row->motivo;
          }
          $data=array(
            'idEstudiante'=>$id,
            'nombre' => $nombre,
            'apellido' => $apellido,
            'lugar' => $lugar,
            'telefono' => $telefono,
            'matricula' => $matricula,
            'tipo_visita' => $tipo_visita,
            'centro' => $centro,
            'motivo' => $motivo);
        }
        $this->load->view('plantillas/front_end/header_view',$data);
        $this->load->view('front_end/biblioteca_view');
        $this->load->view('plantillas/front_end/footer_view');
      }

}
?>
