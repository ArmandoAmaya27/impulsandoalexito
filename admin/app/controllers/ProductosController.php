<?php  
class ProductosController extends Controllers{

	private $categoria;
	public function __construct(){
		parent::__construct(true);
		$this->categoria = new Categorias;
	}

	public function index(){
		echo "holaa";
	}

	public function create(){
		echo $this->view->render('productos/create');
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