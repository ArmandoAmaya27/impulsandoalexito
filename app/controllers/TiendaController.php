<?php  
class TiendaController extends Controllers{
	private $config;
	public function __construct(){
		parent::__construct();
		$this->config = new Config;
	}

	public function index(){
		echo $this->view->render('tienda/index', array(
			'tiend' => $this->config->get_config_tienda()
		));
	}
}


