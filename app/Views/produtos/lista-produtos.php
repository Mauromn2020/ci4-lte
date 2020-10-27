
<div class="container">  
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h2>Produtos</h2>
			  
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Produtos</li>
            </ol>
          </div>

            <button class="btn btn-warning btn-block">
              <i class="fas fa-plus fa-2x" style="color: #12043A;"></i>    
              NOVO PRODUTO 
            </button>
				
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->    

            <div class="card">

              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Id</th>
                    <th>Nome</th>
                    <th>Estoque</th>
                    <th>Preço</th>
                    <th>Ação</th>
                  </tr>
                  </thead>
                  <tbody>
					  
					  
					<?php 
		foreach($prod  as $key => $value){
		?>
		<tr>
			<td><?php echo $value['id']     ?></td>
			<td><?php echo $value['nome']   ?></td>
			<td><?php echo $value['estoque'] ?></td>
			<td><?php echo $value['venda'] ?></td>
			<td colspan="2">
				
<div class="btn-group mr-2" role="group" aria-label="First group">
    <button type="button" class="btn btn-warning"><i class="fas fa-edit"></i></button>
	<button type="button" class="btn btn-success"><i class="fas fa-eye"></i></button>
    <button type="button" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
</div>
				
			</td>
		</tr>					  
		<?php }?> 	
					  
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Id</th>
                    <th>Nome</th>
                    <th>Estoque</th>
                    <th>Venda</th>
                    <th>Ação</th>
                  </tr>
                  </tfoot>
                </table>
              </div> <!-- /.card-body -->
            </div> <!-- /.card -->
          </div> <!-- /.content-wrapper -->
  </div> 










