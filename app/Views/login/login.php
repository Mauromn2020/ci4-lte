<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>MMsys - Login</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="<?php echo base_url(); ?>/lte/plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>/lte/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>/lte/css/adminlte.min.css">
	
<script src="<?php echo base_url();?>/lte/sweetalert2/sweetalert2.min.js"></script> 
<link  href="<?php echo base_url();?>/lte/sweetalert2/sweetalert2.min.css" rel="stylesheet">

</head>

<body class="hold-transition login-page">

<div class="login-box">
  <div class="login-logo">
    <a href="<?php echo base_url();?>/public "><b>Sistemas</b>MMsys</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">

      <p class="login-box-msg"><br>
      <?php  
      if( $msg === 'nlog'){ msg_att('Você não está logado no sistema!'); } 
      if( $msg ===  'log'){ msg_att('Você está logado no sistema!'); }
      if( $msg === 'sav' ){ msg_ok('Senha alterada com sucesso !'    ); } 
      if( $msg === 'nsav'){ msg_ok('Problemas ao alterar sua senha !'); }  
      if( $msg === 'envEmail'){ msg_ok('Click no link enviado para seu email, para alterar sua senha !'); }    
      ?>
      </p>

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

      <!--      
        <div class="social-auth-links text-center mb-3">
        <p><strong>- Ou -</strong></p>
        <a href="#" class="btn btn-block btn-info">
        <i class="fab fa-facebook mr-2"></i> Logar usando o Facebook
        </a>
        <a href="#" class="btn btn-block btn-warning">
        <i class="fab fa-google-plus mr-2 "></i> Logar usando o Google
        </a>
        </div>< !-- /.social-auth-links 
      -->

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
