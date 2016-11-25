<?php echo validation_errors(); ?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="">
                <form class="form-horizontal" action="<?php echo base_url('index.php?/Biblioteca_controler/guardarRegistro '); ?>" method="post">
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
                                <input id="apellido" name="apellido"  type="text" placeholder="Apellido" class="form-control input input-lg">
                            </div>
                        </div>
                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-envelope-o bigicon"></i></span>
                            <div class="col-md-8">
                                <input id="cedula" name="cedula" type="text" placeholder="Cedula" class="form-control input input-lg">
                            </div>
                        </div>
                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-envelope-o bigicon"></i></span>
                            <div class="col-md-8">
                                <input id="correo" name="correo" type="email" placeholder="Correo" class="form-control input input-lg">
                            </div>
                        </div>
                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-envelope-o bigicon"></i></span>
                            <div class="col-md-8">
                                <input id="telefono" name="telefono" type="text" placeholder="Telefono " class="form-control input input-lg">
                            </div>
                        </div>
                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-envelope-o bigicon"></i></span>
                            <div class="col-md-8">
                                <input id="celular" name="celular" type="text" placeholder="Celular" class="form-control input input-lg">
                            </div>
                        </div>
                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-envelope-o bigicon"></i></span>
                            <div class="col-md-8">
                                <input id="mas_informacion" name="descripcion" type="textarea" placeholder="Mas Informacion" class="form-control input input-lg">
                           </div>
                         </div>
                        <div class="form-group">
                             <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-envelope-o bigicon"></i></span>
                             <div class="col-md-8">
                                <input id="clave" name="clave" type="textarea" placeholder="Clave" class="form-control input input-lg">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-10 text-center">
                                <button type="submit" class="btn btn-primary btn-lg" onclick="guardar()">Enviar</button>

                                    <a href="<?php echo base_url('index.php?/Biblioteca_controler/verRegistro'); ?>"   class="btn btn-info btn-lg">Ver Registro</a>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
