<?php  
class VideosController extends Controllers{

	private $videos;

	public function __construct(){
		parent::__construct();
		Util::Requir('Boots');
		$this->videos = new Videos;

		$this->videos->clear_tmp();
	}

	public function index(){
		echo $this->view->render('videos/index',array(
			'vids' => $this->videos->get_videos(),
			'confers' => $this->videos->get_confers()
		));
	}
	public function create(){
		echo $this->view->render('videos/create', array(
			'confers' => $this->videos->get_confers(),
			'tmp' => $this->videos->tmp_dir()
		));
	}
	public function ver($id){
		echo $this->view->render('videos/ver', array(
			'vid' => $this->videos->get_videos(true),
			'confers' => $this->videos->get_confers()
		));
	}

	public function edit($id){
		echo $this->view->render('videos/edit', array(
			'vid' => $this->videos->get_videos(true),
			'confers' => $this->videos->get_confers(),
			'tmp' => $this->videos->tmp_dir(),
			'image' => $this->videos->getImage()
		));
	}

	public function delete($id){
		$this->videos->delete_video($id);
	}

}