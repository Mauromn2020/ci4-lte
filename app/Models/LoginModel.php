<?php 

namespace App\Models;

use CodeIgniter\Model;

class LoginModel extends Model{
	
	protected $table = 'login';
	protected $primaryKey = 'id';
	protected $allowedFields = ['id','nome','email','senha','CliUser','ativo'];		
	


	/** seleciona usuario por id ou todos */
	public function getLogin($id = null){		
		if($id === null){
			return $this->findAll();
		}		
		return $this->asArray()->where(['id' => $id])->first();			
	}	


	
	/** verifica se email existe */
	public function getEmail($email){
		return $this->where(['email' => $email])->first();	
	}	
	
}



?>


