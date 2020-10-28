<?php

	/* CONSTANTES
	=========================================================*/
    define('base',    'https://mmsites.com.br/ci4-lte/');
	define('SITE',    'https://mmsites.com.br/ci4-lte/');
	define('ANO', 	   date("Y", time()));

	define('EMPRESA', 'MMSites - ci4');
	define('END',     'Rua Vitória Régia, 84');
	define('BAIRRO' , 'Brasilândia');
	define('CIDEST' , 'São Paulo - SP');
	define('CEP' ,    '02848-010');

	define('TIM',     '(11) 98470-3505');
	define('VIVO',    '(11) 95079-2712');
	define('FIXO',    '(11) 5199-0677');	
	define('WHATS',   '(11) 98470-3505');

	define('DESENV',  'https://www.mmsites.com.br');	
	
	define('EMAIL1',  'mauro<img src="img/arrouba36x36.fw.png" alt="arrouba email">mmsites.com.br');
	define('EMAIL2',  'mauro<img src="img/arrouba36x36.fw.png" alt="arrouba email">multipabx.com.br');


	function mensagem($msg){
		switch ($msg) {
		case 'cad':       mesage('PERIGO !','Você não deve fazer isso !','dark');  break;
		case 'ncad':      mesage('ERRO !','Erro ao cadastrar !','error');  break;
		case 'log': 	  mesage('LOGADO !','Você está logado no sistema !','info');  break;
		case 'nlog':      mesage('LOGAR !','Voçê não está logado !','info');  break;
		case 'alt':       mesage('ALTERADO !','Registro Alterado com sucesso!','success');  break;
		case 'nalt':      mesage('ERRO !','Erro ao alterar o registro !','error');  break;
		case 'sav':       mesage('SALVO !','Registro salvo com sucesso !','success');  break;
		case 'nsav':      mesage('ERRO !','Erro ao salvar o registro !','error');  break;	
		case 'env':		  mesage('SUCESSO !','Email enviado','success'); break;	
		default: '';      mesage('OLA !','Seja Bem Vindo!','success');  break;
		}
	}

	function mesage($titulo,$mensagem,$icone){
		$end = base_url();
		//echo"<script src='$end/lte/js/sweetalert2.all.js'></script>";
		echo"
		   <script>
		   let timerInterval
		   Swal.fire({
			 title: '<b>$titulo</b>',
			 html: '$mensagem',
			 icon: '$icone',
			 timer: 3000,			 
			 footer: '<a href>Por favor aguarde.</a>',
			 timerProgressBar: true,
			 willOpen: () => {
			   Swal.showLoading()
			   timerInterval = setInterval(() => {
				 const content = Swal.getContent()
				 if (content) {
				   const b = content.querySelector('b')
				   if (b) {
					 b.textContent = Swal.getTimerLeft()
				   }
				 }
			   }, 100)
			 },
			 onClose: () => {
			   clearInterval(timerInterval)
			 }
		   }).then((result) => {
			 /* Read more about handling dismissals below */
			 if (result.dismiss === Swal.DismissReason.timer) {
			   console.log('I was closed by the timer')
			 }
		   }) 
		   </script>
		";
	}



	/* MENSAGENS DE ERRO PARA O USUÁRIO
	=========================================================*/
	function msg_erro($mensagem){		
		echo'<br>';
		echo'<div class="alert alert-danger alert-dismissible fade show" role="alert">';
		echo'<strong>ERRO!<br></strong>' .$mensagem;
		echo'<button type="button" class="close" data-dismiss="alert" aria-label="Close">';
		echo' <span aria-hidden="true">&times;</span>';
		echo'</button>';
		echo'</div>';		
	}


	function msg_ok($mensagem){		
		echo'<br>';
		echo'<div class="alert alert-success alert-dismissible fade show" role="alert">';
		echo'<strong>SUCESSO!<br></strong>' .$mensagem;
		echo'<button type="button" class="close" data-dismiss="alert" aria-label="Close">';
		echo' <span aria-hidden="true">&times;</span>';
		echo'</button>';
		echo'</div>';
	}


	function msg_att($mensagem){		
		echo'<br>';
		echo'<div class="alert alert-warning alert-dismissible fade show" role="alert">';
		echo'<strong>ATENÇÃO!<br></strong>' .$mensagem;
		echo'<button type="button" class="close" data-dismiss="alert" aria-label="Close">';
		echo' <span aria-hidden="true">&times;</span>';
		echo'</button>';
		echo'</div>';
	}

function msg_per($mensagem){		
		echo'<br>';
		echo'<div class="alert alert-dark alert-dismissible fade show" role="alert">';
		echo'<strong>PERIGO!<br></strong>' .$mensagem;
		echo'<button type="button" class="close" data-dismiss="alert" aria-label="Close">';
		echo' <span aria-hidden="true">&times;</span>';
		echo'</button>';
		echo'</div>';
	}
	/* VOLTAR PARA PÁGINA ANTERIOR
	==========================================================*/
	function voltar()
	{
		echo "<script>history.back();</script>	";
	}


	/* LIMPA SENHA DIGITADA PARA EVITAR TRAMBIQUES DE RAQUERS
	==========================================================*/
	
	function limpa($senha)
	{	
		$senha_digitada = $senha;
		$senha_digitada = str_replace("=","",$senha_digitada);
		$senha_digitada = str_replace("*","",$senha_digitada);
		$senha_digitada = str_replace("--","",$senha_digitada);
		$senha_digitada = str_replace("'","",$senha_digitada);
		$senha_digitada = str_replace("drop","",$senha_digitada);
		$senha_digitada = str_replace("insert","",$senha_digitada);
		$senha_digitada = str_replace("delete","",$senha_digitada);
		$senha_digitada = str_replace("uptade","",$senha_digitada);
		$senha_digitada = str_replace("like","",$senha_digitada);
		$senha_digitada = str_replace("where","",$senha_digitada);
		$senha_digitada = str_replace("from","",$senha_digitada);
		$senha_digitada = str_replace("or","",$senha_digitada);
		$senha_digitada = str_replace("==","",$senha_digitada);
		$senha_digitada = str_replace("\"","",$senha_digitada);
		$senha_digitada = str_replace("/","",$senha_digitada);
		$senha_digitada = str_replace("%","",$senha_digitada);
		$senha_digitada = addslashes($senha_digitada);			
		return $senha_digitada;				
	}




	/* MOSTRA A DATA DE HOJE POR EXTENSO
	==========================================================*/
		
		function hoje()
		{
			$dia = date ("d", time( ));
			$mes = date ("m", time( ));
			$ano = date ("Y", time( ));
			$hoje = $dia.'/'.$mes.'/'.$ano; 
			echo 'Sao Paulo,'.$dia.'/'.$mes.'/'.$ano;  
		}




	/* MOEDA - REAL
	==========================================================*/
		function reais($valor){
			return number_format($valor,2,',','.');			
		}	


	/* ALERTA COM MENSAGEM
	==========================================================*/
	function alerta($mensagem)
	{
		echo '<script>alert("'.$mensagem.'");</script>';	
	}	





	/* REDIRECIONAR PARA OUTRA PÁGINA
	===========================================================*/
	function direciona($url)
	{
		echo '<script>window.location=" '.$url.' "</script>';	
	}
?>