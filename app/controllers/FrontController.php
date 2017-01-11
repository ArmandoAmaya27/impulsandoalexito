<?php
class FrontController extends Controllers {
	private $config;
	public function __construct(){
		parent::__construct();
		Util::Requir(['Fl','Email']);
		$this->config = new Config;

	}

	public function index(){
		$meses = array(
			'1' => 'Enero',
			'2' => 'Febrero',
			'3' => 'Marzo',
			'4' => 'Abril',
			'5' => 'Mayo',
			'6' => 'Junio',
			'7' => 'Julio',
			'8' => 'Agosto',
			'9' => 'Septiembre',
			'10' => 'Octubre',
			'11' => 'Noviembre',
			'12' => 'Diciembre'
		);



		echo $this->view->render('front/index', array(
			'princ' => $this->config->get_config_princ(),
			'confers' => $this->config->getConfers(),
			'vids' => $this->config->getVideos(false,'LIMIT 3'),
			'meses' => $meses

		));


	}


}


?>
