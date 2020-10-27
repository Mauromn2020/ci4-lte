<?php 

namespace App\Models;
use CodeIgniter\Model;

class TabelaModel extends Model{
	
	protected $table = 'duplasena';
	protected $primaryKey = 'id';
	protected $allowedFields = ['id','data','s1n1','s1n2','s1n3','s1n4','s1n5','s1n6','s2n1','s2n2','s2n3','s2n4','s2n5','s2n6',];
	
	public function getSorteio($id = null){		
		if($id === null){
			return $this->orderBy('id', 'desc')->findAll();
		}
		    return $this->asArray()->where(['id' => $id])->first();	
	}	
	
	
	
}
?>
