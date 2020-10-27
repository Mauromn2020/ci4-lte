<div class="container"> 
<div class="content-wrapper">
	
	
	
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Tabelas</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Tabelas</li>
            </ol>
          </div>
        </div>
      </div>
    </section><!-- /.container-fluid -->
	

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Tabela com filtragem e paginação</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped table-dark">
                  <thead>
                  <tr>
                    <th>Id:</th>
                    <th>Data</th>
                    <th>11</th>
                    <th>12</th>
					<th>13</th> 
					<th>14</th> 
					<th>15</th> 
					<th>16</th> 
                    <th>Opções</th>
                  </tr>
                  </thead>
                  <tbody>
					  
				<?php 
				 	if( !empty($sorteio) && is_array($sorteio) ){
						foreach($sorteio as $sorteios){
				?>			
				<tr>
					<td><?php echo($sorteios['id']);?></td>
					<td><?php echo($sorteios['data'] );?></td>
					<td><?php echo($sorteios['s1n1'] );?></td>
					<td><?php echo($sorteios['s1n2'] );?></td>
					<td><?php echo($sorteios['s1n3'] );?></td>
					<td><?php echo($sorteios['s1n4'] );?></td>
					<td><?php echo($sorteios['s1n5'] );?></td>
					<td><?php echo($sorteios['s1n6'] );?></td>

					<td>
						<a href="<?php echo(base_url()); ?>/public/home/edit/<?php echo($sorteios['id']); ?>" title="Editar esta notícia">
						<i class="fas fa-edit fa-2x text-success" aria-hidden="true"></i>
						</a>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<a href="<?php echo(base_url()); ?>/public/home/delete/<?php echo($sorteios['id']); ?>" onclick="return confirma()" title="Apagar esta notícia">
						<i class="fas fa-trash-alt fa-2x text-danger" aria-hidden="true"></i>
						</a>
					</td>							
				</tr>							
							
					<?php	} 
					}else{
					?>	
					<tr>
						<td colspan="5" align="center"><p class="display-4 text-secondary ">Nenhuma notícia encontrada!</p>
						</td>
					</tr>
					<?php
					}	  
					?>					  
					  
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Id:</th>
                    <th>Data</th>
                    <th>11</th>
                    <th>12</th>
					<th>13</th> 
					<th>14</th> 
					<th>15</th> 
					<th>16</th> 
                    <th>Opções</th>
                  </tr>
                  </tfoot>
                </table>
              </div><!-- /.card-body -->
            </div><!-- /.card -->
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </section><!-- /.content -->
	  
</div><!-- /.content-wrapper -->
</div><!-- /.container -->  