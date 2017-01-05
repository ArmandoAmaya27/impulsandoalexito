<?php  
class TiendaController extends Controllers{
	private $config;
	public function __construct(){
		parent::__construct();
		Util::Requir('Fl');
		$this->config = new Config;
	}

	public function index(){
		echo $this->view->render('tienda/index', array(
			'tiend' => $this->config->get_config_tienda(),
			'cats' => $this->config->get_cats(),
			'prods' => $this->config->get_prods(),
			'users' => $this->config->get_user()
		));
	}
}


