
<div class="content-wrapper">
    
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>
              Modals & Alerts
              <small>new</small>
            </h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Modals & Alerts</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>  

  

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-primary card-outline">
                        <div class="card-header">
                            <h3 class="card-title">
                            <i class="fas fa-edit fa-3x"></i>
                            Como instalar e usar o sweetalert2.
<p>&nbsp;</p>
<p>&nbsp;</p>


 <?php  if( $msg != ''){ mensagem($msg); } ?>

<p><a onClick="NewWindow(this.href,'name','800','600','yes');return false;" 
href="https://sweetalert2.github.io/#download">
Baixar o sweetalert2 aqui.
</a> </p>

    <br><br>

<p>Inserir as tags abaixo no header.php. Sómente alterando o caminho dos arquivos sweetalert2</p>
<code>
< script src="< ?php echo base_url();?>/lte/sweetalert2/sweetalert2.min.js">< /script> <br>
< link  href="< ?php echo base_url();?>/lte/sweetalert2/sweetalert2.min.css" rel="stylesheet"><br>
</code>

    <br><br>

<p>Chamar a função mensagem($msg) que esta no arquivo   mf_helper.php  na pasta helpers</p>
<code> < ?php  if( $msg != ''){ mensagem($msg); } ?></code>
<br>
<br>
<p>Função mensagem. Recebe o tipo de mensagem a ser exibida e chama a função abaixo para mostrar o alerta</p>

<code>function mensagem($msg){<br>
		switch ($msg) {<br>
		case 'cad':       mesage('PERIGO !','Você não deve fazer isso !','dark');  break;<br>
		case 'ncad':      mesage('ERRO !','Erro ao cadastrar !','error');  break;<br>
		case 'log': 	  mesage('LOGADO !','Você está logado no sistema !','info');  break;<br>
		case 'nlog':      mesage('LOGAR !','Voçê não está logado !','info');  break;<br>
		case 'alt':       mesage('ALTERADO !','Registro Alterado com sucesso!','success');  break;<br>
		case 'nalt':      mesage('ERRO !','Erro ao alterar o registro !','error');  break;<br>
		case 'sav':       mesage('SALVO !','Registro salvo com sucesso !','success');  break;<br>
		case 'nsav':      mesage('ERRO !','Erro ao salvar o registro !','error');  break;	<br>
		case 'env':		  mesage('SUCESSO !','Email enviado','success'); break;	<br>
		default: '';      mesage('OLA !','Seja Bem Vindo!','success');  break;<br>
		}<br>
	}</code>

    <br><br>  

<p>Função mesage($titulo,$mensagem,$icone). chamada pela função mensagem acima, <br>
Mostra o alerta na tela com os parametros passados</p>
<code>
function mesage($titulo,$mensagem,$icone){<br>
		echo"<br>
		   < script><br>
		   let timerInterval<br>
		   Swal.fire({<br>
			 title: '< b>$titulo< /b>',<br>
			 html: '$mensagem',<br>
			 icon: '$icone',<br>
			 timer: 3000,		<br>	 
			 footer: '< a>Por favor aguarde.< /a>',<br>
			 timerProgressBar: true,<br>
			 willOpen: () => {<br>
			   Swal.showLoading()<br>
			   timerInterval = setInterval(() => {<br>
				 const content = Swal.getContent()<br>
				 if (content) {<br>
				   const b = content.querySelector('b')<br>
				   if (b) {<br>
					 b.textContent = Swal.getTimerLeft()<br>
				   }<br>
				 }<br>
			   }, 100)<br>
			 },<br>
			 onClose: () => {<br>
			   clearInterval(timerInterval)<br>
			 }<br>
		   }).then((result) => {<br>
			 /* Read more about handling dismissals below */<br>
			 if (result.dismiss === Swal.DismissReason.timer) {<br>
			   console.log('I was closed by the timer')<br>
			 }<br>
		   }) <br>
		   < /script><br>
		";<br>
	}<br>
</code>

<br><br>

<p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p>

                            </h3>
                        </div>
                    <div class="card-body">
                </div>
            </div>
        </div>         
    </section>
    
</div><!-- /.content -->





	
