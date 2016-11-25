<div class="container">

        <div class="row">

            <div class="col-md-3">
                <p class="lead">Shop Name</p>
                <div class="list-group">
                    <a href="#" class="list-group-item">Apartamento</a>
                    <a href="#" class="list-group-item">Casa</a>
                    <a href="#" class="list-group-item">Mejora </a>
                </div>
            </div>

            <div class="col-md-9">

                <div class="row carousel-holder">

                    <div class="col-md-12">
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img class="slide-image" src="<?php echo base_url('upload/casa.jpg'); ?>"id="slide"  alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="<?php echo base_url('upload/apartamento.jpg'); ?>" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="<?php echo base_url('upload/parcela.jpg'); ?>" alt="">
                                </div>
                            </div>
                            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                        </div>
                    </div>

                </div>

<?php foreach ($datos as $key): ?>
  <div class="row">

      <div class="col-sm-12 col-lg-12 col-md-4">
          <div class="thumbnail">
              <img src="<?php echo $key['foto']; ?>" alt="">
              <div class="caption">
                  <!-- <h4 class="pull-right">$<?php echo $datos[0]['precio'];?></h4> -->
                  <h4><a href="<?php echo base_url('index.php?/biblioteca_controler/mapa'); ?>"><?php echo  $key['descripcion']; ?></a>
                  </h4>
                  <p>Precio : <?php echo $key['precio'];?></p>
                  <hr>
                  <p>Datos: <?php echo $key['tipo']; ?></p>
              </div>

          </div>
      </div>
    </div>
<?php endforeach; ?>
                <!-- <div class="row">

                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="<?php echo base_url('upload/logo.png'); ?>" alt="">
                            <div class="caption">
                                <h4 class="pull-right">$<?php echo $datos[0]['precio'];?></h4>
                                <h4><a href="#">First Product</a>
                                </h4>
                                <p><?php echo $datos[0]['descripcion'];?><a target="_blank" href="http://www.bootsnipp.com"></a>.</p>
                            </div>
                            <div class="ratings">
                                <p class="pull-right">15 reviews</p>
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="http://placehold.it/320x150" alt="">
                            <div class="caption">
                                <h4 class="pull-right">$<?php echo $datos[1]['precio'];?></h4>
                                <h4><a href="#">Second Product</a>
                                </h4>
                                <p><?php echo $datos[1]['descripcion'];?></p>
                            </div>
                            <div class="ratings">
                                <p class="pull-right">12 reviews</p>
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star-empty"></span>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="<?php echo base_url('upload/lili.jpg'); ?>" alt="">
                            <div class="caption">
                                <h4 class="pull-right">$<?php echo $datos[2]['precio'];?></h4>
                                <h4><a href="#">Third Product</a>
                                </h4>
                                <p><?php echo $datos[2]['descripcion'];?></p>
                            </div>
                            <div class="ratings">
                                <p class="pull-right">31 reviews</p>
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star-empty"></span>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="<?php echo $datos[3]['foto'];?>" alt="">
                            <div class="caption">
                                <h4 class="pull-right">$<?php echo $datos[3]['precio'];?></h4>
                                <h4><a href="#">Fourth Product</a>
                                </h4>
                                <p><?php echo $datos[3]['descripcion'];?></p>
                            </div>
                            <div class="ratings">
                                <p class="pull-right">6 reviews</p>
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star-empty"></span>
                                    <span class="glyphicon glyphicon-star-empty"></span>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="http://placehold.it/320x150" alt="">
                            <div class="caption">
                                <h4 class="pull-right">$<?php echo $datos[4]['precio'];?></h4>
                                <h4><a href="#">Fifth Product</a>
                                </h4>
                                <p><?php echo $datos[4]['descripcion'];?></p>
                            </div>
                            <div class="ratings">
                                <p class="pull-right">18 reviews</p>
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star-empty"></span>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <h4><a href="#">Like this template?</a>
                        </h4>
                        <p>If you like this template, then check out <a target="_blank" href="http://maxoffsky.com/code-blog/laravel-shop-tutorial-1-building-a-review-system/">this tutorial</a> on how to build a working review system for your online store!</p>
                        <a class="btn btn-primary" target="_blank" href="http://maxoffsky.com/code-blog/laravel-shop-tutorial-1-building-a-review-system/">View Tutorial</a>
                    </div>

                </div> -->

            </div>

        </div>

    </div>
    <style media="screen">
    /*!
     * Start Bootstrap - Shop Homepage (http://startbootstrap.com/)
     * Copyright 2013-2016 Start Bootstrap
     * Licensed under MIT (https://github.com/BlackrockDigital/startbootstrap/blob/gh-pages/LICENSE)
     */

    body {
        padding-top: 70px; /* Required padding for .navbar-fixed-top. Remove if using .navbar-static-top. Change if height of navigation changes. */
    }

    .slide-image {
        width: 100%;
    }

    .carousel-holder {
        margin-bottom: 30px;
    }

    .carousel-control,
    .item {
        border-radius: 4px;
    }

    .caption {
        height: 130px;
        overflow: hidden;
    }

    .caption h4 {
        white-space: nowrap;
    }

    .thumbnail img {
        width: 100%;
    }

    .ratings {
        padding-right: 10px;
        padding-left: 10px;
        color: #d17581;
    }

    .thumbnail {
        padding: 0;
    }

    .thumbnail .caption-full {
        padding: 9px;
        color: #333;
    }

    footer {
        margin: 50px 0;
    }
    </style>
