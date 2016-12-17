<?php  
class FrontController extends Controllers{

	public function __construct(){
		parent::__construct(true);
		Util::Requir(array('Str','Fl'));

	}

	public function index(){
		echo $this->view->render('front/index');
	}
}


?>