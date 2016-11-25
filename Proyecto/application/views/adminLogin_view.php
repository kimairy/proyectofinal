<body>
 <div id="loginModal" class="modal show" tabindex="-1" role="dialog" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
    <div class="modal-header">
        <h1 class="text-center">Login-Control de biblioteca</h1>
    </div>
    <div class="modal-body">
        <form class="form col-md-12 center-block" method="post" action="<?php echo base_url('index.php/Login_controler/loginAmind'); ?>">
          <div class="form-group">
            <input type="text" name="usuario" class="form-control input-lg" placeholder="Correo">
          </div>
          <div class="form-group">
            <input type="password" name="clave" class="form-control input-lg" placeholder="Contraseña">
          </div>
          <div class="form-group">
            <input type="submit" class="btn btn-primary btn-lg btn-block" values="Entrar">
          </div>
        </form>
    </div>
    <div class="modal-footer">
    </div>
</div>
</div>
</div>
