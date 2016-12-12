<?php  
class ConferencistasController extends Controllers{

	private $conferencistas;

	public function __construct(){
		parent::__construct();
		$this->conferencistas = new Conferencistas;

		$this->conferencistas->clear_tmp();
	}

	public function index(){
		echo $this->view->render('conferencistas/index',array(
			'conferencistas' => $this->conferencistas->get_confers()
		));
	}

	public function ver($id){
		echo $this->view->render('conferencistas/ver', array(
			'conferencista' => $this->conferencistas->get_confers(true)
		));
	}
	public function create(){
		echo $this->view->render('conferencistas/create',array(
			'tmp' => $this->conferencistas->tmp_dir()
		));
	}
	public function edit($id){
		echo $this->view->render('conferencistas/edit', array(
			'confer' => $this->conferencistas->get_confers(true),
			'tmp' => $this->conferencistas->tmp_dir(),
			'image' => $this->conferencistas->getImage()
		));
	}
	public function delete($id){
		$this->conferencistas->delete($id);
	}
}