<?php  
class ErrorController extends Controllers{

	public function __construct(){
		parent::__construct();
	}

	public function index(){

		echo 'Error 404 pagina no encontrada';
	}
}


?>