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
    #vrg{
      color:#919195;
    }
    #nav{
        color:#919195;
    }

    </style>
  </head>
  <body>
  <nav class="navbar navbar-default" id="nav">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="<?php echo base_url ('index.php?/Biblioteca_controler') ?>" >WebSiteName</a>
    </div>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon glyphicon-user"></span> Regi</a></li>
      <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Salir</a></li>
    </ul>
  </div>
</nav>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="">
                    <form class="form-horizontal" action="<?php echo base_url('index.php?/Biblioteca_controler/guardarRegistro'); ?>" method="post">
                        <fieldset>
                            <legend class="text-center header">Registro de Usuario</legend>

                            <div class="form-group">
                                <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                                <div class="col-md-8">
                                    <input id="nombre" name="nombre" type="text" placeholder="Nombre" class="form-control input input-lg">
                                </div>
                            </div>
                            <div class="form-group">
                                <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                                <div class="col-md-8">
                                    <input id="apellido" name="apellido" type="text" placeholder="Apellido" class="form-control input input-lg">
                                </div>
                            </div>

                            <div class="form-group">
                                <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-envelope-o bigicon"></i></span>
                                <div class="col-md-8">
                                    <input id="matricula" name="matricula" type="text" placeholder="Matricula o Usuario" class="form-control input input-lg">
                                </div>
                            </div>

                            <div class="form-group">
                                <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-phone-square bigicon"></i></span>
                                <div class="col-md-8">
                                    <select class="form-control input input-lg" id="#919195" name="tipo_visita">
                                      <option values="">Tipo de visita</option>
                                      <option values="I">Interno</option>
                                      <option values="E">Externo</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-10 text-center">
                                    <button type="submit" class="btn btn-primary btn-lg">Enviar</button>

                                        <a href="<?php echo base_url('index.php?/Biblioteca_controler/verRegistro'); ?>"  class="btn btn-info btn-lg">Ver Registro</a>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
  </body>
</html>
