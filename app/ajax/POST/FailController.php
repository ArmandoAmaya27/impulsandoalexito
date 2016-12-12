<?php  

class FailController extends Controllers{

	public function __construct(){
		parent::__construct();
	}

	public function index(){
		die('Error 404 pagina no encontrada.');
	}
}

?>