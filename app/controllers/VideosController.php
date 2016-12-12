<?php  
class VideosController extends Controllers{
	private $config;
	public function __construct(){
		parent::__construct();

		$this->config = new Config;
	}

	public function index(){
		echo $this->view->render('videos/index',array(
			'vids' => $this->config->get_config_vids()
		));
	}
}


