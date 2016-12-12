<?php  
// ----------------------------------
abstract class Controllers{
	
	// ----------------------------------

	protected $view;
	protected $request;
	// ----------------------------------
	

	protected function __construct($log = false, $desc = false){
		global $request;
		Util::Requir(['Str', 'Val']);
		$this->request = $request;

		if (!isset($_SESSION[SESSION_ID]) && is_bool($log) && $log) {
			Str::redir('error');
		}
		if (isset($_SESSION[SESSION_ID]) && is_bool($desc) && $desc) {
			Str::redir(URL);
		}

		if (!AJAX) {
			$this->view = new \League\Plates\Engine('views','php');
		}
		
	}

	// ----------------------------------

	protected function isset_arg(){
		return (Val::isNumeric($this->request->getArg()) && $this->request->getArg() > 0 && null != $this->request->getArg());
	}

	// ----------------------------------

	protected function AjaxResponse($dato){
		is_array($dato) ?: trigger_error($dato . ' No es un array válido...', E_USER_ERROR);
		if (isset($_POST)) {
			return json_encode($dato);
		}
		
	}

}

?>