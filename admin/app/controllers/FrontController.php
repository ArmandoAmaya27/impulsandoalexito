<?php  
class FrontController extends Controllers{

	public function __construct(){
		parent::__construct();
	}

	public function index(){
		echo $this->view->render('front/index');
	}
}


?>