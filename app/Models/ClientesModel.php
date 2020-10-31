<?php 

namespace App\Models;
use CodeIgniter\Model;

class ClientesModel extends Model{
	
	protected $table = 'clientes';
	protected $primaryKey = 'id';
	protected $allowedFields = ['id','nome','cidade','fone','pagamento','vendedor','cpf','endereco',];
	
	public function getClientes($id = null){			
		if($id === null){
			return $this->orderBy('id', 'desc')->findAll();
		}		
		return $this->asArray()->where(['id' => $id])->first();			
	}	
	
	public function getCliPorCliUser($CliUser = null){
		return $this->asArray()->where( ['CliUser'=> $CliUser] )->first();
		
	}

	public function contReg($cli = null){
		echo $this->builder()->where(['CliUser'=> $cli,'ativo'=> 1 ])->countAllResults();
	}
	
}
?>
