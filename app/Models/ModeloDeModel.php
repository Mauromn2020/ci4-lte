<?php 

namespace App\Controllers;

use App\Models\NewsModel;
use CodeIgniter\Controller;

class News extends BaseController{



	/*index
	*****************************************************/
	public function index(){			
		$model = new NewsModel();			
		$data = [
			'news' => $model->getNews(),
			'title' => 'Visão Geral'
		];			
		echo view('includes/header', $data);
		echo view('news/overview', $data);
		echo view('includes/footer', $data);
	}



	/* view
	*****************************************************/		
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



	/* create
	*****************************************************/		
	function create(){
		helper('form');
		$data = [
			'title' => 'Inserir/Alterar Notícia'
		];
		echo view('includes/header', $data);
		echo view('news/form');
		echo view('includes/footer');				
	}




	/* edit
	*****************************************************/	
	public function edit($id = null){
		$model = new NewsModel();

		$data['news'] = $model->getNews($id);

		if(empty($data['news'])){
			throw new \CodeIgniter\Exceptions\PageNotFoundException(' A NOTÍCIA '. $id .'  NÃO FOI ENCONTRADA NO BANCO DE DADOS!');
		}

		$data = [
			'title' => $data['news']['title'],
			'id' => $data['news']['id'],
			'body' => $data['news']['body']				
		];

		echo view('includes/header', $data);
		echo view('news/form', $data);
		echo view('includes/footer');				

	}


	/******************************************************		
		DELETAR	
	******************************************************/		
	public function delete($id = null){

		$model = new NewsModel();

		/*deleta o registro com o id passado*/
		$model->delete($id);	

		$data = [ 'title' => 'SUCESSO!'	];
		echo view('includes/header', $data);
		echo view('news/del_success',$data);
		echo view('includes/footer');		
	}	


	/*store
	*****************************************************************/
	public function store(){
		helper('form');
		$model = new NewsModel();

		$rules = [
			'title' => 'required|min_length[3]|max_length[255]',
			'body'  => 'required'
		];

		/*Se passar pelas regras acima salva ou altera*/
		if( $this->validate($rules) ){

			/*cria um registro se não tiver o id ou 
			altera se tiver o id */	
			$model->save([
				'id'   => $this->request->getVar('id'),
				'title'=> $this->request->getVar('title'),
				'slug' => url_title($this->request->getVar('title')),
				'body' => $this->request->getVar('body')					
			]);

				$data = [ 'title' => 'SUCESSO!'	];
				echo view('includes/header', $data);
				echo view('news/success',$data);
				echo view('includes/footer');		

		}else{
				$data = [ 'title' => 'ERRO!'	];
				echo view('includes/header', $data);
				echo view('news/error',$data);
				echo view('includes/footer');					
		}			
	}
	
	
	
	/*sobre nós
	*****************************************************************/
	public function sobre(){
		$data = [ 'title' => 'SOBRE ESTE SISTEMA!'	];
		echo view('includes/header', $data);
		echo view('sobre');
		echo view('includes/footer');		
	}

}

?>
