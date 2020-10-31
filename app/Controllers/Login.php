<?php  
namespace App\Controllers;

use App\Models\LoginModel;
use CodeIgniter\Controller;


class Login extends BaseController{

	/*
	|--------------------------------------------------------------------------
	| Index  
	|--------------------------------------------------------------------------
	*/
	public function index($msg = ''){  
		$data['msg'] = $msg ;

		echo view('login/login', $data);	
	}
	
	




	/*
	|--------------------------------------------------------------------------
	| Validar e logar 	
	|--------------------------------------------------------------------------
	| Verifica se o email existe no banco de dados e faz o login
	*/
	public function validar(){
		
		$model = new LoginModel();		
		$data['mail'] = $model->getEmail($this->request->getVar('email'));	
		
		if( empty($data['mail'] ) ){
			throw new \CodeIgniter\Exceptions\PageNotFoundException('USUARIO OU SENHA INCORRETOS');			
		}else{		
			if ( password_verify( $this->request->getVar('senha'), $data['mail']['senha'] ) === true ) {			
				$dados = array(
				'email'  => $data['mail']['email'],
				'nome'   => $data['mail']['nome'],
				'id'     => $data['mail']['id'],
				'senha'  => $data['mail']['senha'],
				'CliUser'=> $data['mail']['CliUser'],
				'Ativo'  => $data['mail']['ativo'],
				'lembrar'=> $this->request->getVar('remember')
			);
				session()->set($dados);					
				return redirect()->to(base_url().'/public/home');			
			} else {
				return redirect()->to(base_url().'/public/login/index/nlog' );	
			}	
    	}		
	}	
	
	



	/*
	|--------------------------------------------------------------------------
	|  Forgot(), Esqueceu() , eback() e nova()
	|--------------------------------------------------------------------------
	|  Encaminha o usuário para criação de nova senha e retorna para função
	|  esqueceu abaixo.	
	*/
	public function forgot($msg = ''){
		$data['msg'] = $msg ;
		echo view('login/forgot', $data);
	}

	
	public function esqueceu(){
		$email = $this->request->getvar('email');
		
		$model = new LoginModel();
		$data['mail'] = $model->getEmail($email);

		if (empty($data['mail'])) {
			return redirect()->to(base_url().'/public/login/forgot/xemail');
		} else{

			$email = $data['mail']['email'];
			$user  = $data['mail']['CliUser'];
			$nome  = $data['mail']['nome'];
			$id    = $data['mail']['id'];

			$email = \Config\Services::email();

			$email->setFrom('mauro@mmsites.com.br', 'MMsites sistemas web');
			$email->setTo($data['mail']['email']);
			$horario = date('d/m/Y - H:i:s');
			$email->setSubject('Nova senha solicitada no MMsites');
			$url = base_url();
			$email->setMessage("
				<html>
				<hr>
				<h2>Click no link abaixo para alterar sua senha</h2>
				<a href='$url/public/login/eback/$user/$id'>Alterar senha MMsites</a>			
				<hr>
				<h3> <?= $horario ?></h3>		
				</html>
			");		
			$email->send();

			return redirect()->to(base_url().'/public/login/index/envEmail');	
		}		
	}
	
	public function eback($user,$id){		
		$model = new LoginModel();

		$data['id'] = $model->getLogin($id);

		if( empty($data['id'] ) ){
			return redirect()->to( base_url().'/public/login/forgot');				
		}else{

			$dados = array(
				'nome'   => $data['id']['nome'],
				'id'     => $data['id']['id'],
				'CliUser'=> $data['id']['CliUser'],
			);
	
			echo view('login/recover', $dados);

    	}			

	}

	public function nova(){
		$model = new LoginModel();

		$id = $this->request->getVar('id');
		$updated = date('Y-m-d H:i:s');
		
		alerta($id .' - '. $updated);

		$novasenha = password_hash($this->request->getVar('novasenha'), PASSWORD_DEFAULT) ;
		
		if( isset($id) and isset($novasenha) ){
			$dados = array(
				'id'=> $id ,
				'senha'=> $novasenha,
				'updated_at' => $updated
			);
			
			$model->save($dados);

			return redirect()->to(base_url().'/public/Login/index/sav');
		}else{
			return redirect()->to(base_url().'/public/Login/index/nsav');
		}
	}	







	/*
	|--------------------------------------------------------------------------
	| REGISTER
	|--------------------------------------------------------------------------
	| Vai para o formulário de registro de usuários e retorna para 
	| a função abaixo
	*/
	public function register(){
		echo view('login/register');
	}	


	//deletar usuario  aqui
	// deleted_at 

	/*
	|--------------------------------------------------------------------------
	| SALVAR USUARIO
	|--------------------------------------------------------------------------
	*/
	public function salvarUsuario(){
		$model = new LoginModel();			
		$data = array(
			'nome'    =>  $this->request->getVar('nome')  ,
			'email'   =>  $this->request->getVar('email') ,	
			'senha'   =>  password_hash( $this->request->getVar('senha'), PASSWORD_DEFAULT ) ,	
			'CliUser' =>  random_int(100,999) . date('His') ,	
			'ativo'   =>  1 ,
			'created_at'-> date('Y-m-d H:i:s')		
		);	

		if( isset($data['nome']) and isset($data['email']) and isset($data['senha'])  ){
			$model->save($data);
			
			session()->set($data);
			return redirect()->to(base_url().'/public/Home');
		}else {
			return redirect()->to(base_url().'/public/login/register/nsav' );	
		}		
	}







	
	
	
	/*
	|--------------------------------------------------------------------------
	| DESLOGAR 
	|--------------------------------------------------------------------------
	*/
	public function deslogar(){
		session()->destroy();
		return redirect()->to(base_url().'/public/login/index/nlog');
	}


	
	
}





















//		echo '<br>Senha mmn = '. password_hash("mauromn", PASSWORD_DEFAULT);
//		echo '<br>Senha admin ='. password_hash("admin", PASSWORD_DEFAULT);

//			$ml = $data['mail']['email'];
//			$nm = $data['mail']['nome'];
//			$id = $data['mail']['id'];
//			$sh = $data['mail']['senha'];
//			$us = $data['mail']['CliUser'];
//			$at = $data['mail']['ativo'];

//		$model->save([
//		id'   => $this->request->getVar('id'),
//		title'=> $this->request->getVar('title'),
//		slug' => url_title($this->request->getVar('title')),
//		body' => $this->request->getVar('body')					
//		]);

//		public function index($id = null){//	
//		$model = new LoginModel();//
//	    $data['login'] = $model->getLogin($id);
//
//		if(empty( $data['login'] ) ){
//			throw new \CodeIgniter\Exceptions\PageNotFoundException('ÍTEM NÃO ENCONTRADO'.$id);
//		}else{//		
//			echo view('includes/header');
//			echo view('Login/lista-Login', $data);
//			echo view('includes/footer');//			
//		}
//	}
?>
