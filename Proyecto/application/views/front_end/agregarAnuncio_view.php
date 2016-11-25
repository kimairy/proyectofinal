
<div class="container">

    <div class="row">
        <div class="col-md-12">
            <div class="">
                <form class="form-horizontal" action="<?php echo base_url('index.php?/Biblioteca_controler/agregarAnuncio '); ?>" method="post" enctype="multipart/form-data">
                    <fieldset>
                        <legend class="text-center header">Registro De Anuncio</legend>
                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-phone-square bigicon"></i></span>
                            <div class="col-md-8">
                                <select class="form-control input input-lg" id="tipoInmueble" name="tipo">
                                  <option values="">Tipo de Inmueble</option>
                                  <option values="casa">Casa</option>
                                  <option values="apartamento">Apartamento</option>
                                  <option values="mejora">Mejora</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-envelope-o bigicon"></i></span>
                            <div class="col-md-8">
                                <input id="numero" name="numero_parcela" type="text" placeholder="Numero de Parcela" class="form-control input input-lg">
                           </div>
                         </div>
                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                            <div class="col-md-8">
                                <input id="descripcion_inmobiliario" name="descripcion"  type="text" placeholder="Descripcion" class="form-control input input-lg">
                            </div>
                        </div>
                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-envelope-o bigicon"></i></span>
                            <div class="col-md-8">
                                <input id="titulo" name="titulo" type="text" placeholder="Titulo" class="form-control input input-lg">
                            </div>
                        </div>
                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-envelope-o bigicon"></i></span>
                            <div class="col-md-8">
                                <input id="precio" name="precio" type="text" placeholder="precio" class="form-control input input-lg">
                            </div>
                        </div>
                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-envelope-o bigicon"></i></span>
                            <div class="col-md-8">
                                <input id="direccion" name="Direccion" type="text" placeholder="Direccion " class="form-control input input-lg">
                            </div>
                        </div>
                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-envelope-o bigicon"></i></span>
                            <div class="col-md-8">
                                <input id="foto" name="foto" type="file" placeholder="Foto" class="form-control input input-lg">
                            </div>
                        </div>
                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-envelope-o bigicon"></i></span>
                            <div class="col-md-8">
                                <input id="comentario" name="comentario" type="textArea" placeholder="Comentario" class="form-control input input-lg">
                           </div>
                         </div>
                        <div class="form-group">
                            <div class="col-md-10 text-center">
                                <button type="submit" class="btn btn-primary btn-lg" onclick="guardar()">Enviar</button>
                            </div>
                        </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>


</div>
