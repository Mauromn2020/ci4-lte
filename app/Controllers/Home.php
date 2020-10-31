<?php

	namespace App\Controllers;
	use CodeIgniter\Controller;

	class Home extends BaseController {
		public function index($msg = '')
		{
			$data['cor'] = 'warning';
			$data['msg'] = $msg;
			
			echo view('includes/header', $data );
			echo view('home');
			echo view('includes/footer' );
		}

		// public function enviaEmail(){
		// 	if ( enviaEmail() ) {
		// 		alerta("Email enviado com successo !");
		// 	} else {
		// 		alerta("Erro ao enviar o email !");
		// 	}
		// }

				
		public function modal($msg = ''){
			$data['msg'] = $msg;
			
			echo view('includes/header', $data);
			echo view('views-modelo/modals');
			echo view('includes/footer');
		}
		
		
		// SWEETALERT2  
		public function swheetalert2( $msg = '' ){
			$data['msg'] = $msg ; 

			echo view('includes/header', $data);
			echo view('swheetalert2');
			echo view('includes/footer');
		}

	}
?>
