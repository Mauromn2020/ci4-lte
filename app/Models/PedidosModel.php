<?php 

namespace App\Models;
use CodeIgniter\Model;

class PedidosModel extends Model{
	
	protected $table = 'pedidos';
	protected $primaryKey = 'id';
	protected $allowedFields = ['id','numero','bloco','cliente','vendedor','data','vencimento','pagamento','pago','chqs','horario','location','CliUser','ativo'];
	
	public function getPedidos($id = null){			
		if($id === null){
			return $this->orderBy('id', 'asc')->findAll();
		}		
		return $this->asArray()->where(['id' => $id])->first();			
	}
	
	public function contReg($cli = null){
		echo $this->builder()->where(['CliUser'=> $cli,'ativo'=> 1 ])->countAllResults();
	}
}
?>
