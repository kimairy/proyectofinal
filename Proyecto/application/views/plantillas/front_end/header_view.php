<!DOCTYPE html>
<html>
  <head>
        <meta charset="utf-8">
        <title></title>
        <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <style media="screen">
    .header {
        color: #36A0FF;
        font-size: 27px;
        padding: 10px;
    }

    .bigicon {
        font-size: 35px;
        color: #36A0FF;
    }
    #tipo_visita{
      color:#919195;
    }
    #lugar{
      color:#919195;
    }
    #nav{
        color:#919195;
    }

    #logo{
      height: 80px;
     width: 20%;
    }
    #slide{
      height: 300px;
     width: 800%;;
    }

    </style>
    <script type="text/javascript">


    </script>
  </head>
  <body>
  <nav class="navbar navbar-default" id="nav">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="<?php echo base_url ('index.php?/Biblioteca_controler') ?> " ><img src="<?php echo base_url('upload/logo.jpg'); ?>"id="logo" alt="" /></a>
    </div>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="<?php echo base_url('index.php?/login_controler/loginAdmind'); ?> "><span class=""></span>Control Panel</a></li>
      <li><a href="<?php echo base_url('index.php?/Biblioteca_controler/guardarRegistro'); ?> "><?php if(!$this->session->userdata('usuario')){ echo '<span class=""></span>Registrarse</a>';} ?></li>
      <li><a href="<?php echo base_url('index.php?/biblioteca_controler/confilmarDatosUsuarios'); ?> " values="cambiarcontra()"><span class="glyphicon glyphicon-user"></span> <?php echo  $this->session->userdata('usuario'); ?> </a></li>
      <li><a href="<?php if($this->session->userdata('usuario')){echo base_url('index.php?/login_controler/logaut');}else{echo base_url('index.php/login_controler');} ?> "><span class="glyphicon glyphicon-log-in"></span> <?php if($this->session->userdata('usuario')){echo "Salir";}else{echo "Acceder";} ?> </a></li>

    </ul>
  </div>
</nav>
