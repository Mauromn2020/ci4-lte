<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>MMsys - Recuperar senha</title>
msg
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>/lte/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>/lte/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>/lte/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="<?php echo base_url();?>/public"><b>Sistemas</b>MMsys</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg"> Caro Cliente:  <?php echo $nome ?> <br> Digite sua nova senha.</p>

      <form action="<?php echo base_url()?>/public/login/nova" method="post">
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Nova senha" name="novasenha" autofocus required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Confirme a senha" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>

        <input type="hidden" name="id" value="<?php echo $id ?>">


        <div class="row">
          <div class="col-12">
            <button type="submit" class="btn btn-info btn-block">Trocar senha</button>
          </div><!-- /.col -->
        </div>
      </form>

      <p class="mt-3 mb-1">
        <a href="<?php echo base_url(); ?>/public/Login">Login</a>
      </p>
    </div><!-- /.login-card-body -->
  </div>
</div><!-- /.login-box -->

<!-- jQuery -->
<script src="<?php echo base_url(); ?>/lte/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url(); ?>/lte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>/lte/js/adminlte.min.js"></script>

</body>
</html>
<!-- <p>este é um teste</p> -->