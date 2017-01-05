<?php 

class DescripcionController extends Controllers{

	public function __construct(){
		parent::__construct();
	}

	public function index(){

		echo $this->view->render('desc/descripcion');
	}
}



 ?>