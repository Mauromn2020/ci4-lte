<?php 

namespace App\Models;

use CodeIgniter\Model;

class LoginModel extends Model{
	
	protected $table = 'login';
	protected $primaryKey = 'id';
	protected $allowedFields = ['id','nome','email','senha','CliUser','ativo','created_at','updated_at','deleted_at'];	
	
	protected $useTimestamps = false;
	protected $createdField  = 'created_at';
	protected $updatedField  = 'updated_at';
	protected $deletedField  = 'deleted_at';

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

<!-- 
namespace App/Models;

use CodeIgniter/Model;

class LoginModel.php extends Model
{
	protected $table      = 'tableName';
	protected $primaryKey = 'id';

	protected $returnType = 'array';
	protected $useSoftDeletes = true;

	protected $allowedFields = ['id','nome'];

	protected $useTimestamps = false;
	protected $createdField  = 'created_at';
	protected $updatedField  = 'updated_at';
	protected $deletedField  = 'deleted_at';

	protected $validationRules    = [];
	protected $validationMessages = [];
	protected $skipValidation     = false;
} -->
