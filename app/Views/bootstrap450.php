<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="generator" content="Jekyll v4.0.1">
    <title>Navbar fixa no topo · Bootstrap</title>

    <link rel="canonical" href="http://localhost/index.php">

    <!-- Bootstrap core CSS -->
<link href="<?php echo base_url()?>/assets/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo base_url()?>/assets/dist/css/navbar-top-fixed.css" rel="stylesheet">
<link href="<?php echo base_url()?>/assets/dist/css/estilo.css" rel="stylesheet">
<link href="<?php echo base_url()?>/assets/dist/css/carousel.css" rel="stylesheet">	
</head>
  <body>  
	  
	  
<nav class="navbar navbar-expand-md navbar-warning fixed-top bg-warning">
	<div class="container">
		<a class="navbar-brand" href="#">Navbar Fixa</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  	</button>
	
		<div class="collapse navbar-collapse" id="navbarCollapse">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item active">
					<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Links</a>
				</li>
				<li class="nav-item">
					<a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Desabilitado</a>
				</li>
			</ul>
			<form class="form-inline mt-2 mt-md-0">
				<input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
				<button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Procurar</button>
			</form>
		</div>
	</div>
	<!--container fluid	-->
</nav>


	  
<main role="main" class="container">
	
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="<?php echo base_url();?>/img/santos.jpg" class="d-block w-100" alt="Praia de santos sp">
    </div>
    <div class="carousel-item">
      <img src="<?php echo base_url();?>/img/santos.jpg" class="d-block w-100" alt="Praia de santos sp">
    </div>
    <div class="carousel-item">
      <img src="<?php echo base_url();?>/img/santos.jpg" class="d-block w-100" alt="Praia de santos sp">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>  	
	
  <div class="jumbotron">
    <h2>Codeigniter 4.0.3 + Bootstrap 4.5.0</h2>
    <p class="lead">Modelo de view </p>
    <a class="btn btn-lg btn-primary" href="#" role="button">Documentação&raquo;</a>
  </div>	
</main>


<script src="<?php echo base_url()?>/assets/dist/js/bootstrap.min.js"></script>	
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="<?php echo base_url()?>/assets/dist/js/docs.min.js"></script>
	
	</body>
</html>
