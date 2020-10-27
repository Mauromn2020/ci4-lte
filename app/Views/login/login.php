<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>MMsys - Login</title>

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
    <a href="../index2.html"><b>Sistemas</b>MMsys</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">

      <?php
        switch ($msg) {
          case 'ok':        msg_ok('Cadastrado!');                     break;
          case 'erro':      msg_erro('Erro ao cadastrar!');            break;  
          case 'deslogado': msg_att('Deslogado ! Logar Novamente ?');  break;
          default:          '';                                        break;
        }
      ?>

      <p class="login-box-msg">Iniciar uma nova sessão.</p>

      <form action="<?php echo base_url() ?>/public/login/validar" method="post">
		  
        <div class="input-group mb-3">
          <input type="email" class="form-control" name="email" id="email" placeholder="Email" autofocus required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
		  
        <div class="input-group mb-3">
          <input type="password" class="form-control" name="senha" id="senha" placeholder="Senha" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
		  
        <div class="row">
          <div class="col-8">
            <div class="icheck-warning">
              <input type="checkbox" name="remember" id="remember">
              <label for="remember">
                Lembre Me
              </label>
            </div>
          </div><!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-info btn-block">Logar</button>
          </div><!-- /.col -->
        </div>
      </form>

<!--      <div class="social-auth-links text-center mb-3">
        <p><strong>- Ou -</strong></p>
        <a href="#" class="btn btn-block btn-info">
          <i class="fab fa-facebook mr-2"></i> Logar usando o Facebook
        </a>
        <a href="#" class="btn btn-block btn-warning">
          <i class="fab fa-google-plus mr-2 "></i> Logar usando o Google
        </a>
      </div><!-- /.social-auth-links -->

      <p class="mb-1">
        <a href="<?php echo base_url(); ?>/public/Login/forgot">Esqueci minha senha</a>
      </p>
      <p class="mb-0">
        <a href="<?php echo base_url(); ?>/public/Login/register" class="text-center">Registrar novo usuário.</a>
      </p>
    </div><!-- /.login-card-body -->
  </div>
</div><!-- /.login-box -->

<script src="<?php echo base_url(); ?>/lte/plugins/jquery/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>/lte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo base_url(); ?>/lte/js/adminlte.min.js"></script>

</body>
</html>