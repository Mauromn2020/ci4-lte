
</div> <!-- /.content-wrapper -->	

  <!-- BARRA NA LATERAL DIREITA-->
<aside class="control-sidebar control-sidebar-light">
	<div class="p-3">
		<h5>CONFIGURAÇÕES</h5>
		<p><a href="<?php echo base_url(); ?>/public"  title="Vamos para o Ítem 0001">Ítem 0001</a></p>
		<p><a href="<?php echo base_url(); ?>/public/Home"  title="Vamos para o Ítem 0002">Ítem 0002</a></p>
	</div>
</aside> <!-- /.control-sidebar -->	

  <!-- Main Footer -->
<footer class="main-footer bg-danger">
	<div class="container"> 
		<!-- To the right -->
		<div class="float-right d-none d-sm-inline">
			Anything you want
		</div>
		<!-- Default to the left -->
		<strong>Copyright &copy; 2014-2020 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
	</div>
</footer>




</div> <!-- ./wrapper -->


<script src="<?php echo base_url(); ?>/lte/plugins/jquery/jquery.min.js"></script>

<script src="<?php echo base_url(); ?>/lte/js/adminlte.min.js"></script>
<script src="<?php echo base_url(); ?>/lte/js/demo.js"></script>
<script src="<?php echo base_url(); ?>/lte/js/pages/dashboard.js"></script>

<script src="<?php echo base_url(); ?>/lte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo base_url(); ?>/lte/plugins/chart.js/Chart.min.js"></script>
<script src="<?php echo base_url(); ?>/lte/plugins/sparklines/sparkline.js"></script>
<script src="<?php echo base_url(); ?>/lte/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="<?php echo base_url(); ?>/lte/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<script src="<?php echo base_url(); ?>/lte/plugins/jquery-knob/jquery.knob.min.js"></script>
<script src="<?php echo base_url(); ?>/lte/plugins/moment/moment.min.js"></script>
<script src="<?php echo base_url(); ?>/lte/plugins/daterangepicker/daterangepicker.js"></script>
<script src="<?php echo base_url(); ?>/lte/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<script src="<?php echo base_url(); ?>/lte/plugins/summernote/summernote-bs4.min.js"></script>
<script src="<?php echo base_url(); ?>/lte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<script src="<?php echo base_url(); ?>/lte/plugins/jquery-ui/jquery-ui.min.js"></script>
<script src="<?php echo base_url(); ?>/lte/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>/lte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?php echo base_url(); ?>/lte/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?php echo base_url(); ?>/lte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>

<!-- <script src="< ?php echo base_url(); ?>/lte/plugins/sweetalert2/sweetalert2.all.min.js"></script> -->

<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>$.widget.bridge('uibutton', $.ui.button)</script>

<script>
  $(function () {	  
	$('#example1').DataTable({      
	"responsive": true,
     "autoWidth": false,		
	"language":{
		"lengthMenu": "Mostrar _MENU_ registros/página",
		"zeroRecords": "Nenhum resultado na busca!",
		"searchPlaceholder": "",
		"info": "Mostrando de _START_ à _END_ registros filtrados. ( Total de _TOTAL_ registros )",
		"infoEmpty": "Não existem registros",
		"infoFiltered": "( Total _MAX_ registros )",
		"search": "Buscar:",
		"paginate":{
		"first": "<|",
		"last": "|>",
		"next": ">>",
		"previous": "<<"
		},
	}
	});  
  }); 
</script>
</body>
</html>

	  

	

	  

