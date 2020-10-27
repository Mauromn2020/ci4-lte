<?php 
    
//para carregar uma só view
return view('xxx');

//para carregar varias views
echo view('xxx');     
echo view('xxx');   


// PASSAR ARRAY PARA UMA VIEW
$data['nome'] = "Juaquim Manél";
$data['cidade'] = "Juaquinopolis";  
echo view('index', $data);  //no contrôle

echo $nome;                 //Receber na view
echo $cidade;               //Receber na view

//RECEBER DADOS VIA FORMULARIO - METODO POST
$this->request()->getVar('nome'); // Receber dados via post / get


// SESSION SESSÕES
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

https://xxx.com/public/login/recebe/100/1960    
functionn recebe($idade, $nascimento){ echo $idade.$nascimento; } resultado 100 1960

?>