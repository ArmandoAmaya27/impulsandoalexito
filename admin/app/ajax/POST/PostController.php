<?php  
class PostController extends Controllers{
	public function __construct(){
		parent::__construct();
	}

	public function index(){
		echo "Welcome AJAX";
	}
	public function configuracion(){
		$model = new Config;
		echo $this->AjaxResponse($model->config_princ($_POST));
	}
	public function config_tienda(){
		$model = new Config;
		echo $this->AjaxResponse($model->config_tienda($_POST));
	}
	public function config_videos(){
		$model = new Config;
		echo $this->AjaxResponse($model->config_videos($_POST));
	}

	public function upload(){
		$model = new Uploader;
		echo $this->AjaxResponse($model->uploadTmp());
	}
	public function removeUpload(){
		$model = new Uploader;
		$model->removeTmp();
	}

	public function conferencistas_create(){
		$model = new Conferencistas;
		echo $this->AjaxResponse($model->create($_POST));
	}
	public function conferencistas_edit(){
		$model = new Conferencistas;
		echo $this->AjaxResponse($model->edit($_POST));
	}

	public function videos_create(){
		$model = new Videos;
		echo $this->AjaxResponse($model->create($_POST));
	}
	public function videos_edit(){
		$model = new Videos;
		echo $this->AjaxResponse($model->edit($_POST));
	}
	public function usuarios_create(){
		$model = new Usuarios;
		echo $this->AjaxResponse($model->create($_POST));
	}
	public function usuarios_edit(){
		$model = new Usuarios;
		echo $this->AjaxResponse($model->edit($_POST));
	}
	public function signin(){
		$model = new Login;
		echo $this->AjaxResponse($model->signin($_POST));
	}
	public function categorias_create(){
		$model = new Categorias;
		echo $this->AjaxResponse($model->create($_POST));
	}
	public function categorias_edit(){
		$model = new Categorias;
		echo $this->AjaxResponse($model->edit($_POST));
	}
	
}

