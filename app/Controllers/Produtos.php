<?php  
namespace App\Controllers;

use App\Models\ProdutosModel;
use CodeIgniter\Controller;

class Produtos extends BaseController{

	public function index($id = null){
	
		$model = new ProdutosModel();

	    $data['prod'] = $model->getProdutos($id);

		if(empty( $data['prod'] ) ){
			throw new \CodeIgniter\Exceptions\PageNotFoundException('ÍTEM NÃO ENCONTRADO'.$id);
		}else{
		
			echo view('includes/header');
			echo view('produtos/lista-produtos', $data);
			echo view('includes/footer');
			
		}
	}	
	
}


?>
