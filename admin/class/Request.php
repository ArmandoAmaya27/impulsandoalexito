<?php 
// --------------------------
final class Request{

	// --------------------------

	private $dir = DIR;
	private $controller = null;
	private $method = null;
	private $arg = null;
	private $url = null;

	// --------------------------	
	
	final public function __construct(){

		Util::Requir('Val');

		$this->url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

		if ($this->dir == '/' && strlen($this->url) > strlen($this->dir)) {
			$this->url[0] = '';
		}else{
			$this->url = explode($this->dir, $this->url);
			$this->url = $this->url[1];
		}

		if (!empty($this->url) && $this->url != $this->dir) {
			$this->url = explode('/', $this->url);

			$this->controller = Val::Alphanum($this->url[0]) ? ucfirst(strtolower($this->url[0])) .'Controller' : 'FrontController';

			$this->method = (array_key_exists(1, $this->url) && !Val::isEmpty($this->url[1])) ? strtolower($this->url[1]) : 'index';

			$this->arg = (array_key_exists(2,$this->url) && !Val::isEmpty($this->url[2])) ? $this->url[2] : null;

		}else{
			$this->controller = 'FrontController';
			$this->method = 'index';
		}
	}

	// --------------------------

	/**
	 * Obtiene el controlador
	 * 
	 * @return El controlador actual
	 */
	final public function getCon(){
		return trim($this->controller);
	}

	// --------------------------

	/**
	 * Obtiene el metodo
	 * 
	 * @return El metodo actual
	 */
	final public function getMet(){
		return $this->method;
	}

	// --------------------------

	/**
	 * Obtiene el argumento en caso de existir
	 * 
	 * @return El metodo actual
	 */

	final public function getArg(){
		return $this->arg;
	}

	// --------------------------
}


?>