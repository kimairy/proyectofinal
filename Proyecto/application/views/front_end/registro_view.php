  <div class="container ">
    <h3 class="well">Registro de usuario</h3>
  <table class="table table-bordered">
    <thead>
         <td>Nombre</td>
         <td>Apellido</td>
         <td>Lugar</td>
         <td>Telefono</td>
         <td>Matricula</td>
         <td>Fecha</td>
         <td>Tipo_visita</td>
         <td>Centro</td>
         <td>Motivo</td>
         <td>--</td>
     </thead>


  <?php
    //  echo "<pre/>";
    //  print_r($usuarios);
    //  print_r($usuarios[0]->nombre);
    //  exit();
     foreach($usuarios as $usuario)
      {
        $terminar= base_url("index.php/biblioteca_controler/actualizarEstudiante/?idEstudiante{$usuario['idEstudiante']}");
        echo "<tr>
          <td>{$usuario['nombre']}</td>
          <td>{$usuario['apellido']}</td>
          <td>{$usuario['idLugar']}</td>
          <td>{$usuario['telefono']}</td>
          <td>{$usuario['matricula']}</td>
          <td>{$usuario['hora_entrada']}</td>
          <td>{$usuario['tipo_visita']}</td>
          <td>{$usuario['centro']}</td>
          <td>{$usuario['motivo']}</td>
          <td><a href='{$terminar}' class='btn btn-xs btn-danger'>Modificar</a></td>
        </tr>";
      }
    ?>
    </tbody>
  </table>
  </div>
