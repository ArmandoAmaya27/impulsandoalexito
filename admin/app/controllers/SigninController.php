<?php  
class SigninController extends Controllers{


	public function __construct(){
		parent::__construct(false, true);
	}

	public function index(){
		echo $this->view->render('signin/index');
	}

}