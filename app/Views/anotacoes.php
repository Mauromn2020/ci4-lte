<?php 
    
// CARREGAR VIEWS
return view('xxx');//para carregar uma só view
<pre class="codigo"> 
echo view('xxx');   //para carregar varias views   
echo view('xxx');   
</pre>




// PASSAR ARRAY PARA UMA VIEW
$data['nome'] = "Juaquim Manél";
$data['cidade'] = "Juaquinopolis";  
echo view('index', $data);  //no contrôle

echo $nome;                 //Receber na view
echo $cidade;               //Receber na view




//RECEBER DADOS VIA FORMULARIO - METODO POST
$this->request()->getVar('nome'); // Receber dados via post / get




// SESSION - SESSÕES
session()->set($data);  // Cria uma sessão e insere os dados

session()->destroy();   //Destruir uma sessão
session()->stop();

print_r( session()->get() );       // Imprimir todos od dados da sessão
print_r( session()->get('nome') ); // Imprimir dados expecifíco





//ENCRYPTAR E VERIFYCAR
password_hash($this->request()-getVar('senha'), PASSWORD_DEFAULT);
password_verify( $this->request()->getVar('senha'), $senha );
password_verify( $this->request()->getVar('senha'), $data['mail']['senha']




// REDIRECIONAR
return redirect()->to(base_url().'/public/Home/index/ok');





// PASSAR PARAMETROS PELA URL
https://xxx.com/public/login/recebe/100
functionn recebe($idade){ echo $idade; } resultado 100

https://xxx.com/public/login/recebe/100    
// recebe($idade){ 
//     echo $idade ; //resultado 100
// } 




// LISTA DE ERROS EXCEPTIONS
//AlertError // CastException  // CriticalError
//DownloadExcepition  // EmergencyError
//ExceptionInterface  // FrameworkException
//ModelException  // PageNotFoundException

?>


