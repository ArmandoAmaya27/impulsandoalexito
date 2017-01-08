<?php  
class VideosController extends Controllers{
	private $config;
	public function __construct(){
		parent::__construct();
		Util::Requir(['Fl', 'Str']);
		$this->config = new Config;

		// print_r ($this->config->get_contv()); exit;
 
	}

	public function index(){
		echo $this->view->render('videos/index',array(
			'vids' => $this->config->get_config_vids(),
			'videos' => $this->config->getVideos(),
			'confers' => $this->config->getConfers()
		));
	}

	 public function ver($id){
	 	echo $this->view->render('videos/vervideo', array( 
			'vids' => $this->config->get_videosinfo(true),
			'conf'=> $this->config->get_videosinfo(false, 'LIMIT 1'),
			'idvid'=> $this->config->get_datos()[1],
			'cantv'=> $this->config->get_contv()[0][0]
		)); 
	 }
}




