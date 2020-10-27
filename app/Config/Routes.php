<?php namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php'))
{
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
* --------------------------------------------------------------------
* Router Setup
* --------------------------------------------------------------------
*/
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/**
* --------------------------------------------------------------------
* Route Definitions
* --------------------------------------------------------------------
*/

// Obtemos um aumento de desempenho especificando o padrão
// rota, já que não precisamos verificar os diretórios.

$routes->get('/', 'Home::index');

$routes->get('/Login', 'Login::index');
//$routes->get('/login', 'Login::index');




/**
* ------------------------------------------------- -------------------
* Roteamento Adicional
* ------------------------------------------------- -------------------
* Haverá momentos em que você precisa de roteamento adicional e você
* precisa ser capaz de substituir qualquer padrão neste arquivo. Meio Ambiente
* Rotas baseadas é uma dessas vezes. require () arquivos de rota adicionais aqui
* para fazer isso acontecer.
*
* Você terá acesso ao objeto $ routes dentro desse arquivo sem
* necessidade de recarregar.
*/

if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}

if(file_exists( APPPATH.'mf.php') ){
	require APPPATH .'mf.php'; 	
}

