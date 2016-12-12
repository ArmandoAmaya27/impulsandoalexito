<?php
final class Videos extends Models{
	private $imgdir;
	private $uploader;
	final public function __construct(){
		parent::__construct();
		$this->uploader = new Uploader;
	}
	final private function moveDirVid($id){
		$this->uploader->moveToDir('../../../static/system/images/videos/'.$id.'/', $this->imgdir);
	}
	final private function Errors($request, $edit = false){

		try {
			Util::Requir(array('Val','Str', 'Fl'));
			$this->imgdir = '../../static/system/.tmp/'.$request['tmp'] . '/';
			$glob = glob($this->imgdir . '*');

			if (!$edit) {
				
				$where = '';

			}else{
				
				$id = intval($request['id']);
				$where = "AND id <> '$id'";
			}

			
			$b = $request['titulo'];
			$c = $this->db->pSelect('titulo_video', 'videos', "titulo_video='$b' $where", 'LIMIT 1');

			if ((strtolower(Str::no_spaces($request['titulo'])) === strtolower(Str::no_spaces($c[0][0]))) && false != $c) {
				throw new Exception('<b>Error: </b>Este video ya existe.');
			}
			if (!Val::fullArray($request)) {
				throw new Exception('<b>Error: </b>Todos los campos son necesarios.');
			}
			if (!Val::Url($request['url'])) {
				throw new Exception('<b>Error: </b>La url debe tener un formato válido (http://).');
			}
			if (sizeof($glob) == 0 && !$edit) {
				throw new Exception('<b>Error: </b>Una imagen es requerida.');
			}
			

			return false;
		} catch (Exception $e) {
			return array('success' => false, 'msg' => $e->getMessage());
		}
	}

	final public function create($request){
		$error = $this->Errors($request);
		if (!is_bool($error)) {
			return $error;
		}

		$date = date('Y-m-d', time());

		$this->db->pInsert(array(
			'titulo_video' => $request['titulo'],
			'url_video' => $request['url'],
			'descripcion' => $request['desc'],
			'fecha_publicacion' => $date,
			'id_conferencista' => $request['confe']
		),'videos');

		$id = $this->db->lastInsertId();
		$this->moveDirVid($id);

		return array('success' => true, 'msg' => '<b>Realizado </b>Video guardado de forma exitosa.');
	}
	final public function edit($request){
		$error = $this->Errors($request,true);
		if (!is_bool($error)) {
			return $error;
		}

		$date = date('Y-m-d', time());
		$id = intval($request['id']);
		$this->db->pUpdate(array(
			'titulo_video' => $request['titulo'],
			'url_video' => $request['url'],
			'descripcion' => $request['desc'],
			'fecha_publicacion' => $date,
			'id_conferencista' => $request['confe']
		),'videos', "id='$id'");

		if (sizeof(Fl::fspath($this->imgdir)) > 0) {
			$this->moveDirVid($id);
		}else{
			Fl::removeDir($this->imgdir);
		}

		return array('success' => true, 'msg' => '<b>Realizado </b>Video editado de forma exitosa.');
	}

	final public function tmp_dir(){
		return $this->tmpDir();
	}
	final public function clear_tmp(){
		$this->clearTmp((60 * 60));
	}
	final public function get_confers(){

		return $this->select_array($this->db->pQuery("SELECT * FROM conferencistas", true), 'nombre');
	}
	final public function get_videos($edit = false){
		if ($edit) {
			return $this->db->pSelect('*', 'videos', "id='$this->getArg'", 'LIMIT 1');
		}

		return $this->db->pSelect('*', 'videos');
	}
	final public function getImage(){
		Util::Requir('Fl');
		return Fl::fspath('../static/system/images/videos/'.$this->getArg . '/')[0];
	}

	final public function delete_video($id){
		Util::Requir(array('Fl', 'Str'));
		$id = intval($id);
		Fl::removeDir('../static/system/images/videos/'.$id.'/');
		$this->db->pDelete('videos', "id='$id'");
		Str::redir('videos');
	}

	final public function __destruct(){
		parent::__destruct();
	}
}