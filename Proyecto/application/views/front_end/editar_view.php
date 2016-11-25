<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="">
                <form class="form-horizontal" action="<?php echo base_url('index.php?/Biblioteca_controler '); ?>" method="post">
                    <fieldset>
                        <legend class="text-center header">Editar de Usuario</legend>
                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                            <div class="col-md-8">
                                <input id="nombre" name="nombre" type="text" values="<?=$nombre ?>" placeholder="Nombre" class="form-control input input-lg">
                            </div>
                        </div>
                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                            <div class="col-md-8">
                                <input id="apellido" name="apellido" required type="text" values="<?=$apellido ?>" placeholder="Apellido" class="form-control input input-lg">
                            </div>
                        </div>
                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-phone-square bigicon"></i></span>
                            <div class="col-md-8">
                                <select class="form-control input input-lg" id="lugar" name="lugar">
                                  <option values="">Lugar</option>
                                  <option values="1">Santo Domingo</option>
                                  <option values="E">otro</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-envelope-o bigicon"></i></span>
                            <div class="col-md-8">
                                <input id="telefono" name="telefono" type="text" placeholder="Telefono" class="form-control input input-lg">
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
                                <select class="form-control input input-lg" id="tipo_visita" name="tipo_visita">
                                  <option values="">Tipo de visita</option>
                                  <option values="I">Interno</option>
                                  <option values="E">Externo</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-envelope-o bigicon"></i></span>
                            <div class="col-md-8">
                                <input id="centro" name="centro" type="text" placeholder="Centro De Estudios" class="form-control input input-lg">
                            </div>
                        </div>
                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-envelope-o bigicon"></i></span>
                            <div class="col-md-8">
                                <input id="motivo" name="motivo" type="text" placeholder="Motivo De La Visita" class="form-control input input-lg">
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
