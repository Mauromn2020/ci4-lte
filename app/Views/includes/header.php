<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>MMsys Sistemas</title>

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
	
  <link rel="stylesheet" href="<?php echo base_url(); ?>/lte/css/adminlte.min.css">	
  <link rel="stylesheet" href="<?php echo base_url(); ?>/lte/plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>/lte/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>/lte/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>/lte/plugins/jqvmap/jqvmap.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>/lte/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>/lte/plugins/daterangepicker/daterangepicker.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>/lte/plugins/summernote/summernote-bs4.min.css">	
  <link rel="stylesheet" href="<?php echo base_url(); ?>/lte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>/lte/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
	
</head>
<body class="hold-transition layout-top-nav">
<div class="wrapper">
		
<?php 
	if( ! session()->get('CliUser') ){ direciona( base_url().'/public/login');  }
	include_once('navbar-topo.php') 		
?>		

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
  
	  
