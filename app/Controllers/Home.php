<?php
	namespace App\Controllers;

	use App\Models\TabelaModel;
	use CodeIgniter\Controller;

	class Home extends BaseController
	{
		public function index()
		{
			$data['cor'] = 'warning';
			
			echo view('includes/header' );
			echo view('modelos/dash1',   $data);
			echo view('includes/footer' );
		}


		public function listar($id = null){
			$model = new TabelaModel();		
			$data['sorteio'] = $model->getSorteio($id);

			if(empty($data['sorteio']) ){
				throw new \CodeIgniter\Exceptions\PageNotFoundException('ÍTEM NÃO ENCONTRADO'.$id);
			}else{
				echo view('includes/header');
				echo view('modelos/tabelas', $data);
				echo view('includes/footer');
			}
		}	
		
		
		public function teste(){
			echo view('teste');
		}

	}
?>

<!--
	public function view($id = null){
		$model = new NewsModel();
		$data['news']= $model->getNews($id);

		if(empty($data['news']) ){
			throw new \CodeIgniter\Exceptions\PageNotFoundException('ÍTEM NÃO ENCONTRADO'.$id);
		}else{
			$data['title'] = $data['news']['title'];

			echo view('includes/header', $data);
			echo view('news/view',$data);
			echo view('includes/footer', $data);					
		}			
	}
-->