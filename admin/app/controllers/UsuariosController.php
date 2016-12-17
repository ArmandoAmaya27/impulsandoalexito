<?php  
class UsuariosController extends Controllers{

	private $users;

	public function __construct(){
		parent::__construct(true);
		Util::Requir('Boots');
		$this->users = new Usuarios;

		$this->users->clear_tmp();
	}

	public function index(){
		echo $this->view->render('usuarios/index',array(
			'users' => $this->users->get_users()
		));
	}

	public function create(){
		echo $this->view->render('usuarios/create');
	}

	public function perfil($id){
		echo $this->view->render('usuarios/perfil',array(
			'user' => $this->users->get_users(true),
			'image' => $this->users->getImage(),
			'tmp' => $this->users->tmp_dir()
		));
	}
	

}