<?php  
class ProductosController extends Controllers{

	private $categoria;
	private $productos;
	public function __construct(){
		parent::__construct(true);
		Util::Requir('Boots');
		$this->categoria = new Categorias;
		$this->productos = new Productos;

		$this->productos->clear_dir();
	}

	public function index(){
		echo $this->view->render('productos/index', array(
			'cats'  => $this->categoria->get_cats(),
			'prods' => $this->productos->get_prods(),
			'users' => $this->productos->get_users()
		));
	}

	public function create(){
		echo $this->view->render('productos/create',array(
			'cats'  => $this->categoria->get_cats(),
			'tmp' => $this->productos->tmp_dir()
		));
	}
	public function edit($id){
		echo $this->view->render('productos/edit', array(
			'cats'  => $this->categoria->get_cats(),
			'tmp' => $this->productos->tmp_dir(),
			'image' => $this->productos->get_img(),
			'prod' => $this->productos->get_prods(true)
		));
	}
	public function ver($id){
		echo $this->view->render('productos/ver', array(
			'cats' => $this->categoria->get_cats(),
			'image' => $this->productos->get_img(),
			'prod' => $this->productos->get_prods(true),
			'users' => $this->productos->get_users()
		));
	}
	public function categorias(){
		echo $this->view->render('productos/categorias',array(
			'cats' => $this->categoria->get_cats()
		));
	}
	public function editar_categoria($id){
		echo $this->view->render('productos/edit_categoria', array(
			'cat' => $this->categoria->get_cats(),
			'id' => $this->request->getArg()
		));
	}
	public function delete_categoria($id){
		$this->categoria->delete($id);
	}
}