  <!-- Navbar -->
  <!--<nav class="main-header navbar navbar-expand-md navbar-light navbar-white">-->
		

<?php
$cor = isset($_REQUEST['cor'])  ? $_REQUEST['cor'] : 'info';
?>

  <nav class="main-header navbar navbar-expand-md navbar-light navbar-<?php echo($cor);?>">	  
    <div class="container">
      <a href="<?php echo base_url(); ?>/public/" class="navbar-brand">
        <img src="<?php echo base_url(); ?>/lte/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light "><strong>Sua Empresa</strong></span>
      </a>

      <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse order-3" id="navbarCollapse">
        <!-- Left navbar links -->
      <ul class="navbar-nav">
			
<li class="nav-item"><a href="<?php echo base_url(); ?>/public" class="nav-Link"></a></li>





		<li class="nav-item dropdown">
		<a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">Cadastros</a>
		<ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">

			<li><a href="<?php echo base_url(); ?>/public/Clientes" class="dropdown-item">Clientes</a></li>
			<li><a href="#!" class="dropdown-item">Fornecedores</a></li>
			<li><a href="<?php echo base_url(); ?>/public/Produtos" class="dropdown-item">Produtos</a></li>	
			<li class="dropdown-divider"></li>
			<li><a href="#" class="dropdown-item">Colaboradores</a></li> 
			<li><a href="#" class="dropdown-item">Fornecedores</a></li> 

				<!-- Segundo nível -->			
				<li class="dropdown-submenu dropdown-hover">
				<a id="dropdownSubMenu2" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle">Nível 3</a>
				<ul aria-labelledby="dropdownSubMenu2" class="dropdown-menu border-0 shadow">
				<li><a tabindex="-1" href="#" class="dropdown-item">Link Um</a></li>
				<li><a href="#" class="dropdown-item">Link Dois</a></li>

				<li><a href="<?php //echo base_url(); ?>/public/home/listar" class="dropdown-item">Link Tres</a></li>

				<li class="dropdown-submenu">
				<a id="dropdownSubMenu3" href="" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle">Outro nível</a>
				<ul aria-labelledby="dropdownSubMenu3" class="dropdown-menu border-0 shadow">
				  <li><a href="<?php  //echo base_url(); ?>/public/home/listar" class="dropdown-item">Listar</a></li>
				  <li><a href="#" class="dropdown-item">Cadastrar</a></li>
				</ul>
				</li> 
				</ul>
				</li>
				<!-- / Segundo nível -->	
		</ul>
		</li>	


		<li class="nav-item dropdown">
		<a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">Uteis</a>
		<ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">

      <li><a href="<?php echo base_url();?>/public/Home/sweetalert2/x" class="dropdown-item" target="_blank">Sweetalert2</a></li>	
      <li><a href="<?php echo base_url();?>/public" class="dropdown-item">Home</a></li> 
			<li class="dropdown-divider"></li>
			<li><a href="<?php echo base_url();?>/public/Home/modal/sav" class="dropdown-item">Modais</a></li> 


				<!-- Segundo nível-->			
				<li class="dropdown-submenu dropdown-hover">
				<a id="dropdownSubMenu2" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle">Nível 3</a>
				<ul aria-labelledby="dropdownSubMenu2" class="dropdown-menu border-0 shadow">
				<li><a tabindex="-1" href="#" class="dropdown-item">Link Um</a></li>
				<li><a href="#" class="dropdown-item">Link Dois</a></li>

				<li><a href="<?php //echo base_url(); ?>/public/home/listar" class="dropdown-item">Link Tres</a></li>

				<li class="dropdown-submenu">
				<a id="dropdownSubMenu3" href="" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle">Outro nível</a>
				<ul aria-labelledby="dropdownSubMenu3" class="dropdown-menu border-0 shadow">
				  <li><a href="<?php  //echo base_url(); ?>/public/home/listar" class="dropdown-item">Listar</a></li>
				  <li><a href="#" class="dropdown-item">Cadastrar</a></li>
				</ul>
				</li> 
				</ul>
				</li>
				<!-- / Segundo nível -->	
		</ul>
		</li>	

		  
     <!-- DROPDOWN UTEIS      -->
		<li class="nav-item dropdown">
		<a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">Admin</a>
		<ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">

    <li><a href="https://codeigniter.com/user_guide/index.html" class="dropdown-item" target="_blank">Manual ci4</a></li>	
    <li><a href="<?php echo base_url(); ?>/public/login" class="dropdown-item">Logar</a></li> 
    <li><a href="<?php echo base_url(); ?>/public/login/deslogar" class="dropdown-item">Deslogar</a></li> 			

		</ul>
		</li>			  
		  
		  
		   
		  
		  
</ul>

        <!-- SEARCH FORM 
        <form class="form-inline ml-0 ml-md-3" style="float: ">
          <div class="input-group input-group-sm">
            <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
              <button class="btn btn-navbar" type="submit">
                <i class="fas fa-search"></i>
              </button>
            </div>
          </div>
        </form>-->
		  

		  
      </div>

      <!-- Right navbar links -->
      <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
		  
		<!-- Notifications Dropdown Menu -->
<!--        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="far fa-bell  fa-2x"></i>
            <span class="badge badge-warning navbar-badge">5</span>
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <span class="dropdown-header text-dark "><strong>Cor do site</strong></span>
            
			<div class="dropdown-divider"></div>
            <a href="../../../../CI404-AdminLTE/app/Views/includes/index.php?cor=info" class="dropdown-item"><i class="fas fa-file mr-2 text-info"></i><span class="text-info">Info</span></a>
			  
            <div class="dropdown-divider"></div>
            <a href="../../../../CI404-AdminLTE/app/Views/includes/index.php?cor=danger" class="dropdown-item"><i class="fas fa-file mr-2 text-danger"></i><span class="text-danger">Danger</span></a>
			  
            <div class="dropdown-divider"></div>
            <a href="../../../../CI404-AdminLTE/app/Views/includes/index.php?cor=warning" class="dropdown-item"><i class="fas fa-file mr-2 text-warning"></i><span class="text-warning">Warning</span></a>
			  
			<div class="dropdown-divider"></div>
            <a href="../../../../CI404-AdminLTE/app/Views/includes/index.php?cor=success" class="dropdown-item"><i class="fas fa-file mr-2 text-success"></i><span class="text-success">Success</span></a>
			  
			<div class="dropdown-divider"></div>
            <a href="../../../../CI404-AdminLTE/app/Views/includes/index.php?cor=primary" class="dropdown-item"><i class="fas fa-file mr-2 text-primary"></i><span class="text-primary">Primary</span></a>  
			  
			<div class="dropdown-divider"></div>
            <a href="../../../../CI404-AdminLTE/app/Views/includes/index.php?cor=secondary" class="dropdown-item"><i class="fas fa-file mr- text-secondary"></i><span class="text-secondary">Secondary</span></a>
			  
			<div class="dropdown-divider"></div>
            <a href="../../../../CI404-AdminLTE/app/Views/includes/index.php?cor=dark" class="dropdown-item"><i class="fas fa-file mr- text-dark"></i><span class="text-dark">Dark</span></a> 
			  
			<div class="dropdown-divider"></div>
            <a href="../../../../CI404-AdminLTE/app/Views/includes/index.php?cor=light" class="dropdown-item"><i class="fas fa-file mr- text-secondary"></i><span class="text-secondary">Light</span></a>   
          </div>
        </li>-->  
		  
		  
		  
		  
        <!-- Messages Dropdown Menu -->
<!--        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="fas fa-comments fa-2x"></i>
            <span class="badge badge-danger navbar-badge">3</span>
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <a href="#" class="dropdown-item">
              <!-- Message Start -->
<!--              <div class="media">
                <img src="<?php //echo base_url(); ?>/lte/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                <div class="media-body">
                  <h3 class="dropdown-item-title">
                    Brad Diesel
                    <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                  </h3>
                  <p class="text-sm">Call me whenever you can...</p>
                  <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                </div>
              </div>

            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">

<!--              <div class="media">
                <img src="<?php //echo base_url(); ?>/lte/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                <div class="media-body">
                  <h3 class="dropdown-item-title">
                    John Pierce
                    <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                  </h3>
                  <p class="text-sm">I got your message bro</p>
                  <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                </div>
              </div>

            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
  
              <div class="media">
                <img src="<?php //echo base_url(); ?>/lte/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                <div class="media-body">
                  <h3 class="dropdown-item-title">
                    Nora Silvester
                    <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                  </h3>
                  <p class="text-sm">The subject goes here</p>
                  <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                </div>
              </div>
 
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
          </div>
        </li>-->
		  
		  
        <!-- Notifications Dropdown Menu -->
<!--        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="far fa-bell"></i>
            <span class="badge badge-warning navbar-badge">15</span>
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <span class="dropdown-header">15 Notifications</span>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-envelope mr-2"></i> 4 new messages
              <span class="float-right text-muted text-sm">3 mins</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-users mr-2"></i> 8 friend requests
              <span class="float-right text-muted text-sm">12 hours</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-file mr-2"></i> 3 new reports
              <span class="float-right text-muted text-sm">2 days</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
          </div>
        </li>-->		  
		  
        <!-- Notifications Dropdown Menu -->
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
            <!--<i class="far fa-user "></i>-->
			  
			<?php 
				if(session()->has('CliUser')){
				echo "<i class='fas fa-cog fa-2x fa-spin' style='color:orange'></i>";
				echo"<span class='badge badge-success navbar-badge'>Logado</span>";
				}else{
				echo "<i style='color:red' class='fas fa-cog fa-2x fa-spin'></i>";
				echo"<span class='badge badge-danger navbar-badge'>Logar</span>";
				}  
			?>            
          </a>
			
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <span class="dropdown-header"><strong>DETALHES DO CLIENTE</strong></span>
			  
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-file mr-2"></i> 
				<?php echo '<strong>Cliente : </strong>' .session()->get('CliUser'); ?>
              <!--<span class="float-right text-muted text-sm">2 days</span>-->
            </a>
			  
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-users mr-2"></i>
				<?php echo '<strong>Nome : </strong>'. session()->get('nome'); ?>				
              <!--<span class="float-right text-muted text-sm">12 hours</span>-->
            </a>
			  
			 <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-envelope mr-2"></i> 
				<?php echo '<strong>Email : </strong>' .session()->get('email'); ?>
              <!--<span class="float-right text-muted text-sm">2 days</span>-->
            </a> 
			  
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-clone mr-2"></i>
				<?php echo '<strong>Id : </strong>' .session()->get('id'); ?>
              <!--<span class="float-right text-muted text-sm">3 mins</span>-->
            </a>			  
			  
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item dropdown-footer"><strong><?php echo hoje() ?></strong></a>
          </div>
        </li>
		  
		  
		  
		  
<!--		BOTÃO ABRE MENU DIREITA- CONFIGURAÇÕES  -->
        <li class="nav-item">
          <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button"><i
              class="fas fa-th-large fa-1x "></i></a>
        </li>
		  
		  
      </ul>
    </div>
  </nav>
  <!-- /.navbar -->