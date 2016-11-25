<?php
defined('BASEPATH') OR exit('No direct script acess allowed');

class Registrar_model extends CI_Model{

  public function  __construct()
  {
      parent::__construct();
    $this->load->database();

  }
  function index()
  {

  }

  function guardarRegistro($usuario){

    $this->db->insert('usuario',$usuario);
  }

  function obtener($id) {
         $this->db->where('idEstudiante', $id);
         $query = $this->db->get('estudiantes');
         return $query;
}
  function actualizarEstudiante(){

  }
  # Funcion que devuelve el id del usuario que halla iniciado seccion
function obtenerIdUsuario($usuario) {

  $id = $this->db->query("SELECT id FROM usuario where correo   = '{$usuario}' ");

  return $id->result_array();
}

function guardarInmueble($numero,$tipo,$titulo,$direccion,$foto,$descripcion,$idUsuario){

  $this->db->query("INSERT INTO inmueble (numero_parcela,tipo,titulo,Direccion,foto,descripcion,id_usuario) VALUES ('{$numero}','{$tipo}','{$titulo}','{$direccion}','{$foto}','{$descripcion}','{$idUsuario}')");
}

function guardarAnuncio($precio,$descripcion,$idAnuncio,$idUsuario){
  $this->db->query("INSERT INTO anuncio (precio,descripcion,id_usuario,id_inmueble) VALUES ('{$precio}','{$descripcion}','{$idUsuario}','{$idAnuncio}')");
}

function verAnuncio(){

  $sql = $this->db->query("SELECT tipo,Direccion,foto,anuncio.descripcion descripcion,precio FROM inmueble inner join anuncio on numero_parcela=id_inmueble order by anuncio.id DESC ");

  return $sql->result_array();
}
  /*function estudiante() {
    $query = $this->db->get('estudiantes');
        foreach ($query->result() as $fila)
        {
            $data[] = $fila;
        }
    return $data;
}
/  function obtener($id) {
         $this->db->where('idEstudiante', $id);
         $query = $this->db->get('estudiantes');
         $fila = $query->row();
         return $fila;
}

function actualizarEstudiante($idEstudiante, $nombre, $apellido, $lugar, $telefono,$matricula,$tipo_visita,$centro,$motivo) {
     $data = array(
         'nombre' => $nombre,
         'email' => $apellido,
         'asunto' => $lugar,
         'telefono' => $telefono,
         'matricula' => $matricula,
         'tipo_visita' => $tipo_visita,
         'centro' => $centro,
         'motivo' => $motivo,
     );
     $this->db->where('idEstudiante', $id);
     return $this->db->update('estudiantes', $data);
 }*/

 function mapa(){

 $sql=$this->db->query("SELECT * from mapa");

 return $sql->result();
 }
}



?>
