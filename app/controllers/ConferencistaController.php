<?php  
class ConferencistaController extends Controllers{
	
	private $config; 
	public function __construct(){

		parent::__construct();
		$this->config= new Config();
		Util::Requir('Fl');
	}

	public function index(){
		echo $this->view->render('conferencistas/videos');
	}

	public function perfil($id){
		echo $this->view->render('conferencistas/videos', array(
			'datosc'=>$this->config->getConfers(true)[0],
			'vids'=>$this->config->getVideos(true, '', 'id_conferencista') 
		));
	}


}


?>