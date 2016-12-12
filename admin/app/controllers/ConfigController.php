<?php
class ConfigController extends Controllers{
	private $config;
	public function __construct(){
		parent::__construct();
		$this->config = new Config;
	}

	public function index(){
		
		echo $this->view->render('config/index',array(
			'princ' => $this->config->get_config_princ()
		));
	}

	public function tienda(){
		echo $this->view->render('config/tienda',array(
			'tiend' => $this->config->get_config_tienda()
		));
	}
	public function videos(){
		echo $this->view->render('config/videos', array(
			'vids' => $this->config->get_config_vids()
		));
	}
}