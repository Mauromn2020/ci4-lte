<?php  
namespace App\Controllers;

use App\Models\ClientesModel;
use CodeIgniter\Controller;

class Clientes extends BaseController{

	public function index($id = null){
	
		$model = new ClientesModel();

	    $data['cli'] = $model->getClientes($id);

		if(empty( $data['cli'] ) ){
			throw new \CodeIgniter\Exceptions\PageNotFoundException('<hr>NENHUM CLIENTE ENCONTRADO<hr>'.$id);
		}else{		
			echo view('includes/header');
			echo view('clientes/lista-clientes', $data);
			echo view('includes/footer');			
		}
	}
	
	
	
	
	
	
	
}


?>
