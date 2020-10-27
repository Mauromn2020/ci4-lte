<?php 

namespace App\Models;
use CodeIgniter\Model;

class ProdutosModel extends Model{
	
	protected $table = 'produtos';
	protected $primaryKey = 'id';
	protected $allowedFields = ['id','nome','Descricao','Fabricante','peso','compra','venda','lucro','distribuidor','estoque','unidade','Tipo','CliUser','ativo'];
	
	public function getProdutos($id = null){	
		
		if($id === null){
			return $this->orderBy('id', 'asc')->findAll();
		}
		
		return $this->asArray()->where(['id' => $id])->first();	
		
	}	
}
?>
