<?php namespace Config;

require_once SYSTEMPATH . 'Config/AutoloadConfig.php';

/**
 * -------------------------------------------------------------------
 * AUTO-LOADER
 * -------------------------------------------------------------------
 * This file defines the namespaces and class maps so the Autoloader
 * can find the files as needed.
 */
class Autoload extends \CodeIgniter\Config\AutoloadConfig
{
	public $psr4 = [];

	public $classmap = [];

	//--------------------------------------------------------------------

	/**
	 * Collects the application-specific autoload settings and merges
	 * them with the framework's required settings.
	 *
	 * NOTE: If you use an identical key in $psr4 or $classmap, then
	 * the values in this file will overwrite the framework's values.
	 */
	public function __construct()
	{
		parent::__construct();

		/**
		* -------------------------------------------------------------------
		* Namespaces
		* -------------------------------------------------------------------
		* Isso mapeia as localizações de quaisquer namespaces em seu aplicativo 
		* para sua localização no sistema de arquivos. Eles são usados pelo 
		* Autoloader para localizar arquivos na primeira vez em que foram instanciados. 
		* * Os diretórios '/ app' e '/ system' já estão mapeados 
		* para você. Você pode alterar o nome do namespace 'App' se desejar, 
		* mas isso deve ser feito antes de criar qualquer classe com namespace, 
		* caso contrário, você precisará modificar todas essas classes para que isso funcione. 
		* * NÃO mude o nome do namespace CodeIgniter ou seu aplicativo * IRÁ falhar. 
		*
		* Prototype:
		*
		*   $Config['psr4'] = [
		*       'CodeIgniter' => SYSPATH
		*   `];
		*/		
		$psr4 = [
			'App'         => APPPATH,                // To ensure filters, etc still found,
			APP_NAMESPACE => APPPATH,                // For custom namespace
			'Config'      => APPPATH . 'Config',
		];

		
		
		
		
		
		
		
		/**
		* ------------------ * Mapa de classe * ----------------------------- 
		* O mapa da classe fornece um mapa dos nomes das classes e sua localização exata 
		* na unidade. As classes carregadas desta maneira terão 
		* um desempenho ligeiramente mais rápido porque não terão que ser 
		* procuradas em um ou mais diretórios como fariam se 
		* estivessem sendo carregadas automaticamente por meio de um namespace. 
		* * Protótipo:
		*
		*   $Config['classmap'] = [
		*       'MyClass'   => '/path/to/class/file.php'
		*   ];
		*/
		$classmap = [];

		
		
		
		
		
		//--------------------------------------------------------------------
		// Do Not Edit Below This Line
		//--------------------------------------------------------------------

		$this->psr4     = array_merge($this->psr4, $psr4);
		$this->classmap = array_merge($this->classmap, $classmap);

		unset($psr4, $classmap);
		
		
		
	}

	//--------------------------------------------------------------------

}
