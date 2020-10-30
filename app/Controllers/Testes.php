<?php

	namespace App\Controllers;
    use CodeIgniter\Controller;
    use App\Helpers;

	class Testes extends BaseController {


		public function index($msg = '')
		{
            $data['msg'] = $msg;
            	
            echo view('includes/header', $data );
			echo view('views-modelo/basico');
			echo view('includes/footer' );
		}

		
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
