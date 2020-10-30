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
				return redirect()->to(base_url().'/public/home/index/log');			
			} else {
				return redirect()->to(base_url().'/public/login/index/nlog' );	
			}	
    	}		
	}	
	
	



	/*
	|--------------------------------------------------------------------------
	|  Esqueceu a senha e  forgot
	|--------------------------------------------------------------------------
	|  Encaminha o usuário para criação de nova senha e retorna para função
	|  esqueceu abaixo.	
	*/
	public function forgot($msg = ''){
		$data['msg'] = $msg ;
		echo view('login/forgot', $data);
	}
	




	/*
	|--------------------------------------------------------------------------
	|  Esqueceu 
	|--------------------------------------------------------------------------
	| Salva a nova senha do usuário  desde o form forgot
	*/
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
				<a href='$url/public/login/esqVolta/$user/$id'>Alterar senha MMsites</a>			
				<hr>
				<h3> <?= $horario ?></h3>		
				</html>
			");		
			$email->send();

			return redirect()->to(base_url().'/public/login/index/envEmail');	

		}		
	}
	
	public function esqVolta(){
		echo"
			<script src='<?php echo base_url();?>/lte/sweetalert2/sweetalert2.min.js'></script> <br>	
			<link  href='<?php echo base_url();?>/lte/sweetalert2/sweetalert2.min.css' rel='stylesheet'><br>
			<script> Swal.fire('Any fool can use a computer') </script>
		 ";
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
			'ativo'   =>  1 		
		);	

		if( isset($data['nome']) and isset($data['email']) and isset($data['senha'])  ){
			$model->save($data);
			
			session()->set($data);
			return redirect()->to(base_url().'/public/Home/index/log');
		}else {
			return redirect()->to(base_url().'/public/login/register/nsav' );	
		}		
	}




	/*
	|--------------------------------------------------------------------------
	| SALVAR NOVA SENHA
	|--------------------------------------------------------------------------
	| Cadastrar nova senha se usuário esquecido
	*/
	public function nova(){
		$model = new LoginModel();
		$id = $this->request->getVar('id');
		$novasenha = password_hash($this->request->getVar('novasenha'), PASSWORD_DEFAULT) ;
		
		if( isset($id) and isset($novasenha) ){
			$dados = array(
				'id'=> $id ,
				'senha'=> $novasenha
			);
			
			$model->save($dados);

			return redirect()->to(base_url().'/public/Login/index/sav');
		}else{
			return redirect()->to(base_url().'/public/Login/index/nsav');
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




	public function nvpass(){
		$id = 12345 ;
		alerta('Vamos criar uma nova senha aqui,<br><h2>Aguardemmmmmm !</h2>');
	}

	//https://mmsites.com.br/ci4-lte/public/login/nvpass/12345
	
	
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
