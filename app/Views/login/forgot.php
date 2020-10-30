<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>MMsys - Esqueci a senha</title>

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
        <div class="login-logo"><a href="../index2.html"><b>Sistemas</b>MMsys</a></div><!-- /.login-logo -->
    <div class="card">
      <div class="card-body login-card-body">
        <p class="login-box-msg">Esqueceu sua senha? <br>
        Aqui você pode criar outra facilmente.</p>
      
      <?php
          if ( $msg === 'xemail') {
              msg_erro('Email não localizado. Tente outro.');
          }else{
              msg_ok('Digite o email cadastrado.');
          }      
      ?>		

      <form action="<?php echo base_url()?>/public/login/esqueceu" method="post">
		  
        <div class="input-group mb-3">
          <input type="email" class="form-control" name="email" placeholder="Email" autofocus>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope fa-spin"></span>
            </div>
          </div>
        </div>
		  
        <div class="row">
          <div class="col-12">
            <button type="submit" class="btn btn-info btn-block">Criar nova senha</button>
          </div>
          <!-- /.col -->
        </div>
		  
      </form>		

      <p class="mt-3 mb-1">
        <a href="<?php echo base_url(); ?>/public/Login">Login</a>
      </p>
      <p class="mb-0">
        <a href="<?php echo base_url(); ?>/public/Login/register" class="text-center">Registrar um novo usuário</a>
      </p>

    </div><!-- /.login-card-body -->
  </div>
</div><!-- /.login-box -->

<script src="<?php echo base_url(); ?>/lte/plugins/jquery/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>/lte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo base_url(); ?>/lte/js/adminlte.min.js"></script>

</body>
</html>
