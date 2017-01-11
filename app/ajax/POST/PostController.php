<?php
class PostController extends Controllers{
	public function __construct(){
		parent::__construct();
	}

	public function index(){
		echo "Welcome AJAX";
	}

	public function comentar(){
		$model= new Comentario;
		echo $this->AjaxResponse($model -> add($_POST));
	}

	public function comentarios(){
		$model= new Comentario();
		$dc= $model->coments($_POST['id_coment']);
		$imp='';
		if (false!=$dc) {
			foreach ($dc as $d ) {
			$imp.='<li>
				<div class="comment-main-level">

					<div class="comment-avatar"><img src="http://i9.photobucket.com/albums/a88/creaticode/avatar_1_zps8e1c80cd.jpg" alt=""></div>

					<div class="comment-box">
						<div class="comment-head">
							<h6 class="comment-name by-author"><a href="http://creaticode.com/blog">'.$d['nombre'].'</a></h6>
							<span>'.$d['fecha'].'</span>

						</div>
						<div class="comment-content">
							'.$d['comentario'].'
						</div>
					</div>
				</div>

			</li>';
			}
		}else{
			$imp.='<div class="alert alert-info">
				<strong>Información:</strong> No hay comentarios

			</div>';
		}


		echo $imp;

	}
	public function contacto(){
		$model = new contacto;
		echo $this->AjaxResponse($model->send_email($_POST));
	}

	public function subscribe(){
		$model = new Subscribe;
		
		echo $this->AjaxResponse($model->subscrip($_POST));
	}

}


?>
