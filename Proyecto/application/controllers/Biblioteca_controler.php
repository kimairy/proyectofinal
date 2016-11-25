<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Biblioteca_controler extends CI_Controller {

  public function __construct()
    {
      parent::__construct();
      $this->load->helper('url');
      $this->load->model('Registrar_model');
      $this->load->model('login_model');
      $this->load->library('form_validation');
    }

    public function index()
    {

      $data=array();
      $data['datos']=$this->Registrar_model->verAnuncio();



        $this->load->view('plantillas/front_end/header_view',$data);
        $this->load->view('front_end/index_view');
        $this->load->view('plantillas/front_end/footer_view');

    }

    function verRegistro(){
      if(!$this->session->userdata('usuario')){
      redirect('biblioteca_controler');
    }
      $data = array();
      $data['usuarios'] = $this->Registrar_model->verUsuario();
      $this->load->view('plantillas/front_end/header_view',$data);
      $this->load->view('front_end/registro_view');
      $this->load->view('plantillas/front_end/footer_view');
    }

    function guardarRegistro(){

      if($this->session->userdata('usuario')){
        redirect('biblioteca_controler');
       }

        $this->load->library('form_validation');
        $this->form_validation->set_rules('nombre','Nombre','required');
        $this->form_validation->set_rules('apellido','Apellido','required');
        $this->form_validation->set_rules('cedula','Cedula','required');
        $this->form_validation->set_rules('correo','Correo','required');
        $this->form_validation->set_rules('telefono','Telefono','required');
        $this->form_validation->set_rules('celular','Celular','required');
        $this->form_validation->set_rules('clave','Clave','required');

       if($this->form_validation->run()===FAlSE){
         $this->load->view('plantillas/front_end/header_view');
         $this->load->view('front_end/RegistrarUsuario_view');
         $this->load->view('plantillas/front_end/footer_view');
       }else{
         $this->load->view('plantillas/front_end/header_view');
         $this->load->view('front_end/RegistrarUsuario_view');
         $this->load->view('plantillas/front_end/footer_view');
       }
        if($_POST){
          $this->Registrar_model->guardarRegistro($_POST);
          redirect('biblioteca_controler');
        }

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

      function agregarAnuncio(){
        if(!$this->session->userdata('usuario')){
          redirect('biblioteca_controler');}
        $id=$this->Registrar_model->obtenerIdUsuario($this->session->userdata('usuario'));


        $dir_subida = './upload/imagenes';
        $fichero_subido = $dir_subida . basename($_FILES['foto']['name']);


        if (move_uploaded_file($_FILES['foto']['tmp_name'], $fichero_subido)) {
          $ruta=$fichero_subido;
          if($_POST){

            $this->Registrar_model->guardarInmueble($_POST['numero_parcela'],$_POST['titulo'],$_POST['tipo'],$_POST['Direccion'],$ruta,$_POST['descripcion'],$id[0]['id']);
            $this->Registrar_model->guardarAnuncio($_POST['precio'],$_POST['descripcion'],$_POST['numero_parcela'],$id[0]['id']);
            redirect('biblioteca_controler');
          }
        } else {
            echo "¡Posible ataque de subida de ficheros!\n";
        }


      }

      function verMapa(){

        echo  json_encode($this->Registrar_model->mapa());



      }
      function mapa(){
          $this->load->view('front_end/mapa_view');
      }

      function subirArchivo(){

        $data['error']="";

        $this->load->view('plantillas/front_end/header_view');
        $this->load->view('front_end/agregarAnuncio_view',$data);
        $this->load->view('plantillas/front_end/footer_view');

      /*  $config['upload_path']='./upload/imagenes/';
        $config['allowed_types']='gif|jpg|png|pdf|xlsx|docx';
        $config['max_size']='2048';
        $config['max_width']='2024';
        $config['max_heigth']='2008';

        $this->load->library('upload',$config);
          if(!$this->upload->do_upload("fileImagen")){
            $data['error']=$this->upload->display_errors();
            $this->load->view('plantillas/front_end/header_view');
            $this->load->view('front_end/agregarAnuncio_view',$data);
            $this->load->view('plantillas/front_end/footer_view');
        }else{
          $file_info=$this->upload->data();

          $imagen=$file_info['file_mame'];
          //$subir=$this->mupload->subir($imagen);
          $data['imagen']=$imagen;

          $this->load->view('plantillas/front_end/header_view');
          $this->load->view('front_end/agregarAnuncio_view',$data);
          $this->load->view('plantillas/front_end/footer_view');
        }*/
    /*    $dir_subida = './upload/imagenes';
        $fichero_subido = $dir_subida . basename($_FILES['fileImagen']['name']);

        echo '<pre>';
        if (move_uploaded_file($_FILES['fileImagen']['tmp_name'], $fichero_subido)) {
          $ruta=$fichero_subido;

        } else {
            echo "¡Posible ataque de subida de ficheros!\n";
        }*/



            }

      function confilmarDatosUsuarios(){

        if(!$this->session->userdata('usuario')){
          redirect('biblioteca_controler');
        }
           $this->load->view('plantillas/front_end/header_view');
           $this->load->view('front_end/administrarUsuario_view');
          $this->load->view('plantillas/front_end/footer_view');

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
