<?php  
    namespace App\Helpers;
    use CodeIgniter\Controller;

    class Mf_helper2 extends BaseController {

        public function sweets(){
            msg_sweet('SUCESSO !','Enviamos um link para alteração em seu email','success');
        }
    }
?>