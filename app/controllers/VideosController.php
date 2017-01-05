<?php  
class VideosController extends Controllers{
	private $config;
	public function __construct(){
		parent::__construct();
		Util::Requir('Fl');
		$this->config = new Config;
	}

	public function index(){
		echo $this->view->render('videos/index',array(
			'vids' => $this->config->get_config_vids(),
			'videos' => $this->config->getVideos(),
			'confers' => $this->config->getConfers()
		));
	}

	public function vervideo($id){
		echo $this->view->render('videos/vervideo');
	}
}




