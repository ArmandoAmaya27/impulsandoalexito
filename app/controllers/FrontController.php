<?php  
class FrontController extends Controllers {
	private $config;
	public function __construct(){
		parent::__construct();
		$this->config = new Config;
	}

	public function index(){
		echo $this->view->render('front/index', array(
			'princ' => $this->config->get_config_princ()
		));
	}

	
}


?>